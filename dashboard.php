<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) { 
    header("Location: login.php"); 
    exit; 
}

$user_id = $_SESSION['user_id'];

// --- 1. BUSCAR PRÓXIMAS AULAS ---
$stmtUpcoming = $pdo->prepare("SELECT * FROM reservas WHERE user_id = ? AND (data_aula >= CURDATE() OR data_aula IS NULL) ORDER BY data_aula ASC, hora ASC");
$stmtUpcoming->execute([$user_id]);
$proximas_aulas = $stmtUpcoming->fetchAll();


// --- 2. FILTRAR HISTÓRICO ---
$whereClause = "user_id = ? AND data_aula < CURDATE() AND data_aula IS NOT NULL";
$params = [$user_id];

// Receber inputs
$filter_year = $_GET['year'] ?? '';
$filter_month = $_GET['month'] ?? '';
$filter_week_date = $_GET['week_date'] ?? ''; // Agora recebemos uma data

if ($filter_year) {
    $whereClause .= " AND YEAR(data_aula) = ?";
    $params[] = $filter_year;
}
if ($filter_month) {
    $whereClause .= " AND MONTH(data_aula) = ?";
    $params[] = $filter_month;
}
if ($filter_week_date) {
    // A lógica mágica: Filtra pelo "YEARWEEK" da data escolhida pelo utilizador
    // O modo '1' define que a semana começa à Segunda-feira
    $whereClause .= " AND YEARWEEK(data_aula, 1) = YEARWEEK(?, 1)";
    $params[] = $filter_week_date;
}

$stmtHistory = $pdo->prepare("SELECT * FROM reservas WHERE $whereClause ORDER BY data_aula DESC");
$stmtHistory->execute($params);
$historico = $stmtHistory->fetchAll();

$page_title = "Minha Conta";
include 'includes/header.php';
?>

<main class="flex-grow bg-grey-bg py-10">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold text-dark">Olá, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
                <p class="text-gray-600">Bem-vindo à tua área de membro.</p>
            </div>
            <a href="index.php#horario" class="mt-4 md:mt-0 btn bg-primary text-white hover:bg-blue-600 px-6 py-2 rounded-full font-bold shadow-md transition">
                <i class="fa-solid fa-plus mr-2"></i> Nova Reserva
            </a>
        </div>

        <div class="mb-12">
            <h2 class="text-xl font-bold text-dark mb-4 border-l-4 border-primary pl-3">Próximas Aulas</h2>
            
            <?php if(empty($proximas_aulas)): ?>
                <div class="bg-white p-8 rounded-xl shadow border border-gray-100 text-center text-gray-500">
                    <p>Não tens aulas agendadas para breve.</p>
                </div>
            <?php else: ?>
                <div id="bookings-container" class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <?php foreach($proximas_aulas as $res): ?>
                        <div class="booking-card bg-white p-5 rounded-xl shadow-md border border-gray-100 relative group hover:-translate-y-1 transition duration-300">
                            
                            <button class="cancel-booking-btn absolute top-4 right-4 h-8 w-8 flex items-center justify-center bg-red-50 text-red-500 rounded-full hover:bg-red-500 hover:text-white transition" 
                                    title="Desmarcar Aula"
                                    data-id="<?php echo htmlspecialchars($res['aula_id']); ?>">
                                <i class="fa-solid fa-xmark"></i>
                            </button>

                            <div class="mb-3">
                                <span class="text-xs font-bold text-primary bg-blue-50 px-2 py-1 rounded uppercase tracking-wide">Confirmado</span>
                            </div>
                            <h3 class="font-bold text-xl text-dark mb-1"><?php echo htmlspecialchars($res['nome_aula']); ?></h3>
                            <div class="text-gray-600 text-sm space-y-1">
                                <p><i class="fa-regular fa-calendar mr-2"></i> 
                                    <?php echo $res['data_aula'] ? date('d/m/Y', strtotime($res['data_aula'])) . " (" . $res['dia'] . ")" : $res['dia']; ?>
                                </p>
                                <p><i class="fa-regular fa-clock mr-2"></i> <?php echo htmlspecialchars($res['hora']); ?></p>
                                <p><i class="fa-solid fa-user mr-2"></i> Prof. <?php echo htmlspecialchars($res['instrutor']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <div class="flex flex-col md:flex-row justify-between items-end md:items-center mb-6 border-b pb-4 gap-4">
                <h2 class="text-xl font-bold text-dark border-l-4 border-gray-400 pl-3">Histórico de Aulas</h2>
                
                <form method="GET" class="flex flex-wrap gap-2 items-center">
                    
                    <select name="year" class="p-2 border rounded text-sm bg-gray-50 focus:border-primary focus:outline-none">
                        <option value="">Todos os Anos</option>
                        <option value="2025" <?= $filter_year == '2025' ? 'selected' : '' ?>>2025</option>
                        <option value="2024" <?= $filter_year == '2024' ? 'selected' : '' ?>>2024</option>
                    </select>
                    
                    <select name="month" class="p-2 border rounded text-sm bg-gray-50 focus:border-primary focus:outline-none">
                        <option value="">Todos os Meses</option>
                        <option value="1" <?= $filter_month == '1' ? 'selected' : '' ?>>Janeiro</option>
                        <option value="2" <?= $filter_month == '2' ? 'selected' : '' ?>>Fevereiro</option>
                        <option value="3" <?= $filter_month == '3' ? 'selected' : '' ?>>Março</option>
                        <option value="4" <?= $filter_month == '4' ? 'selected' : '' ?>>Abril</option>
                        <option value="5" <?= $filter_month == '5' ? 'selected' : '' ?>>Maio</option>
                        <option value="6" <?= $filter_month == '6' ? 'selected' : '' ?>>Junho</option>
                        <option value="7" <?= $filter_month == '7' ? 'selected' : '' ?>>Julho</option>
                        <option value="8" <?= $filter_month == '8' ? 'selected' : '' ?>>Agosto</option>
                        <option value="9" <?= $filter_month == '9' ? 'selected' : '' ?>>Setembro</option>
                        <option value="10" <?= $filter_month == '10' ? 'selected' : '' ?>>Outubro</option>
                        <option value="11" <?= $filter_month == '11' ? 'selected' : '' ?>>Novembro</option>
                        <option value="12" <?= $filter_month == '12' ? 'selected' : '' ?>>Dezembro</option>
                    </select>

                    <div class="relative group">
                        <span class="text-[10px] uppercase font-bold text-gray-400 absolute -top-2 left-2 bg-white px-1">Semana de</span>
                        <input type="date" name="week_date" value="<?= $filter_week_date ?>" 
                               class="p-2 border rounded text-sm bg-gray-50 focus:border-primary focus:outline-none h-[38px]">
                    </div>

                    <button type="submit" class="bg-dark text-white px-4 py-2 rounded text-sm hover:bg-black transition">Filtrar</button>
                    <a href="dashboard.php" class="text-gray-500 text-sm hover:underline ml-2">Limpar</a>
                </form>
            </div>

            <?php if(empty($historico)): ?>
                <div class="text-center py-10">
                    <i class="fa-solid fa-clock-rotate-left text-gray-300 text-4xl mb-3"></i>
                    <p class="text-gray-500 italic">Nenhum histórico encontrado com estes filtros.</p>
                </div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-sm text-gray-500 border-b border-gray-200">
                                <th class="py-3 font-semibold pl-2">Data</th>
                                <th class="py-3 font-semibold">Aula</th>
                                <th class="py-3 font-semibold">Hora</th>
                                <th class="py-3 font-semibold">Instrutor</th>
                                <th class="py-3 font-semibold text-right pr-2">Estado</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700">
                            <?php foreach($historico as $h): ?>
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                <td class="py-3 pl-2 text-gray-500"><?php echo date('d/m/Y', strtotime($h['data_aula'])); ?></td>
                                <td class="py-3 font-bold text-dark"><?php echo htmlspecialchars($h['nome_aula']); ?></td>
                                <td class="py-3"><?php echo htmlspecialchars($h['hora']); ?></td>
                                <td class="py-3"><?php echo htmlspecialchars($h['instrutor']); ?></td>
                                <td class="py-3 text-right pr-2">
                                    <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs font-bold uppercase">Concluída</span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>