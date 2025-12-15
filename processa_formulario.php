<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Receber os dados do formulário
    $nome = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telefone = htmlspecialchars(trim($_POST['phone']));
    
    // Define assunto se não vier preenchido (caso venha de outro formulário)
    $assunto = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : "Contacto Geral";
    $mensagem = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : "Sem mensagem adicional.";

    try {
        // 2. Inserir na Base de Dados (Tabela contactos)
        $sql = "INSERT INTO contactos (nome, email, telefone, assunto, mensagem) VALUES (:nome, :email, :telefone, :assunto, :mensagem)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':telefone' => $telefone,
            ':assunto' => $assunto,
            ':mensagem' => $mensagem
        ]);

        // 3. MOSTRAR A PÁGINA DE SUCESSO (Design limpo e profissional)
        $page_title = "Mensagem Enviada";
        include 'includes/header.php';
?>
        <main class="flex-grow flex items-center justify-center bg-gray-50 py-24">
            <div class="text-center bg-white p-12 rounded-2xl shadow-xl max-w-lg mx-auto border border-gray-100">
                
                <div class="mb-6">
                    <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-green-100">
                        <i class="fa-solid fa-check text-4xl text-green-600"></i>
                    </div>
                </div>

                <h1 class="text-3xl font-bold text-gray-900 mb-4">Mensagem Enviada!</h1>
                
                <div class="text-gray-600 mb-8 space-y-2">
                    <p>Obrigado pelo contacto, <strong><?php echo $nome; ?></strong>.</p>
                    <p>A tua mensagem sobre "<strong><?php echo $assunto; ?></strong>" foi registada com sucesso.</p>
                    <p class="text-sm text-gray-500 mt-4">A nossa equipa irá responder para o email <u><?php echo $email; ?></u> o mais breve possível.</p>
                </div>

                <a href="index.php" class="inline-block bg-gray-900 text-white font-bold py-3 px-8 rounded-full hover:bg-black transition uppercase tracking-wide text-sm shadow-md hover:shadow-lg">
                    Voltar ao Início
                </a>
            </div>
        </main>
<?php
        include 'includes/footer.php';

    } catch (PDOException $e) {
        
        echo "<div style='text-align:center; padding:50px;'>";
        echo "<h1>Ups! Algo correu mal.</h1>";
        echo "<p>Erro: " . $e->getMessage() . "</p>";
        echo "<a href='contacto.php'>Tentar Novamente</a>";
        echo "</div>";
    }

} else {
    //se aceder diretamente à página sem enviar formulário
    header("Location: contacto.php");
    exit();
}
?>