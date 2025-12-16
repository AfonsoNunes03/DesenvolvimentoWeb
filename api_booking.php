<?php
session_start();
require_once 'db.php';
header('Content-Type: application/json');

// 1. Verificar Login
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'not_logged_in']);
    exit;
}

$user_id = $_SESSION['user_id'];
$action = $_POST['action'] ?? '';
$aula_id = $_POST['aula_id'] ?? '';
$dia_semana = $_POST['dia'] ?? ''; 
$hora_aula = $_POST['hora'] ?? ''; 

// Função auxiliar para calcular a data exata da próxima aula
function getNextDateForDay($ptDay, $classTime) {
    $map = [
        'Segunda' => 'Monday', 'Segunda-Feira' => 'Monday',
        'Terça' => 'Tuesday', 'Terça-Feira' => 'Tuesday',
        'Quarta' => 'Wednesday', 'Quarta-Feira' => 'Wednesday',
        'Quinta' => 'Thursday', 'Quinta-Feira' => 'Thursday',
        'Sexta' => 'Friday', 'Sexta-Feira' => 'Friday',
        'Sábado' => 'Saturday',
        'Domingo' => 'Sunday'
    ];

    $enDay = $map[$ptDay] ?? null;
    if (!$enDay) return date('Y-m-d'); // Fallback

    // Data de hoje
    $today = new DateTime();
    $todayName = $today->format('l'); 
    
    // Se o dia da semana da aula for hoje
    if ($todayName === $enDay) {
        // Verifica se a hora já passou
        $now = new DateTime();
        $classDate = new DateTime($today->format('Y-m-d') . ' ' . $classTime);
        
        if ($classDate > $now) {
            return $today->format('Y-m-d'); // É hoje mais tarde
        }
    }

    // Caso contrário, é o próximo dia da semana
    $nextDate = new DateTime("next $enDay");
    return $nextDate->format('Y-m-d');
}

try {
    // Calcular data específica (importante para verificar a capacidade daquele dia exato)
    $data_aula = getNextDateForDay($dia_semana, $hora_aula);

    // AÇÃO: VERIFICAR STATUS E CAPACIDADE
    if ($action === 'check_status') {
        
        // 1. Ver se o user já está inscrito
        $stmt = $pdo->prepare("SELECT id FROM reservas WHERE user_id = ? AND aula_id = ? AND data_aula = ?");
        $stmt->execute([$user_id, $aula_id, $data_aula]);
        $is_booked = (bool)$stmt->fetch();

        // 2. Contar Total de Inscritos nesta aula/data
        $countStmt = $pdo->prepare("SELECT COUNT(*) as total FROM reservas WHERE aula_id = ? AND data_aula = ?");
        $countStmt->execute([$aula_id, $data_aula]);
        $total_inscritos = $countStmt->fetch()['total'];
        $max_spots = 20;

        echo json_encode([
            'status' => 'success', 
            'is_booked' => $is_booked,
            'spots_taken' => $total_inscritos,
            'max_spots' => $max_spots
        ]);
    } 
    
    // AÇÃO: CANCELAR (Dashboard)
    elseif ($action === 'cancel') {
        $stmt = $pdo->prepare("DELETE FROM reservas WHERE user_id = ? AND aula_id = ?");
        $stmt->execute([$user_id, $aula_id]);
        
        if ($stmt->rowCount() > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Reserva cancelada.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Reserva não encontrada.']);
        }
    }

    // AÇÃO: TOGGLE (Inscrever/Cancelar no Horário)
    elseif ($action === 'toggle') {
        // Verificar estado atual
        $stmt = $pdo->prepare("SELECT id FROM reservas WHERE user_id = ? AND aula_id = ?");
        $stmt->execute([$user_id, $aula_id]);
        $existing = $stmt->fetch();

        if ($existing) {
            // CANCELAR
            $pdo->prepare("DELETE FROM reservas WHERE id = ?")->execute([$existing['id']]);
            echo json_encode(['status' => 'success', 'new_state' => 'unbooked', 'message' => 'Inscrição cancelada com sucesso.']);
        } else {
            // INSCREVER
            
            // A. Limite do Utilizador (2 por dia)
            $countUserStmt = $pdo->prepare("SELECT COUNT(*) as total FROM reservas WHERE user_id = ? AND dia = ?");
            $countUserStmt->execute([$user_id, $dia_semana]);
            if ($countUserStmt->fetch()['total'] >= 2) {
                echo json_encode(['status' => 'limit_error', 'message' => 'Atingiste o limite de 2 aulas para ' . $dia_semana . '.']);
                exit;
            }

            // B. Limite da Aula (20 vagas)
            $countClassStmt = $pdo->prepare("SELECT COUNT(*) as total FROM reservas WHERE aula_id = ? AND data_aula = ?");
            $countClassStmt->execute([$aula_id, $data_aula]);
            if ($countClassStmt->fetch()['total'] >= 20) {
                echo json_encode(['status' => 'limit_error', 'message' => 'Aula completa! Capacidade máxima atingida.']);
                exit;
            }

            $pdo->prepare("INSERT INTO reservas (user_id, aula_id, nome_aula, dia, hora, instrutor, data_aula) VALUES (?, ?, ?, ?, ?, ?, ?)")
                ->execute([$user_id, $aula_id, $_POST['nome_aula'], $dia_semana, $hora_aula, $_POST['instrutor'], $data_aula]);
            
            echo json_encode(['status' => 'success', 'new_state' => 'booked', 'message' => 'Inscrição confirmada para ' . date('d/m', strtotime($data_aula)) . '!']);
        }
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Erro: ' . $e->getMessage()]);
}
?>