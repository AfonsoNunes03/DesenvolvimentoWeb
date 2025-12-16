<?php
session_start();
require_once 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$_POST['email']]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];
        header("Location: index.php"); 
        exit();
    } else { 
        $error = "Dados incorretos."; 
    }
}
include 'includes/header.php';
?>
<main class="flex-grow flex items-center justify-center bg-grey-bg py-20 min-h-[60vh]">
    <div class="bg-white p-8 rounded shadow-lg w-full max-w-sm border-t-4 border-primary">
        <h1 class="text-2xl font-bold mb-6 text-center text-dark">Entrar</h1>
        <?php if(isset($error)) echo "<div class='bg-red-100 text-red-700 p-3 rounded mb-4 text-sm'>$error</div>"; ?>
        <form method="POST">
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" required class="w-full p-2 border rounded">
            </div>
            <button class="btn w-full">Entrar</button>
        </form>
        <p class="mt-6 text-sm text-center text-gray-600">Sem conta? <a href="registar.php" class="text-primary font-bold hover:underline">Regista-te</a></p>
    </div>
</main>
<?php include 'includes/footer.php'; ?>