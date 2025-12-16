<?php
session_start();
require_once 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $stmt = $pdo->prepare("INSERT INTO users (nome, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['nome'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        header("Location: login.php"); exit();
    } catch (Exception $e) { $error = "Email já registado."; }
}
include 'includes/header.php';
?>
<main class="flex-grow flex items-center justify-center bg-grey-bg py-20 min-h-[60vh]">
    <div class="bg-white p-8 rounded shadow-lg w-full max-w-sm border-t-4 border-primary">
        <h1 class="text-2xl font-bold mb-6 text-center text-dark">Criar Conta</h1>
        <?php if(isset($error)) echo "<div class='bg-red-100 text-red-700 p-3 rounded mb-4 text-sm'>$error</div>"; ?>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome" required class="w-full p-2 border mb-4 rounded">
            <input type="email" name="email" placeholder="Email" required class="w-full p-2 border mb-4 rounded">
            <input type="password" name="password" placeholder="Password" required class="w-full p-2 border mb-6 rounded">
            <button class="btn bg-primary w-full">Registar</button>
        </form>
        <p class="mt-6 text-sm text-center text-gray-600">Já tens conta? <a href="login.php" class="text-primary font-bold hover:underline">Entrar</a></p>
    </div>
</main>
<?php include 'includes/footer.php'; ?>