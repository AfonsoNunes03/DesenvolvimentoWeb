<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZENITH FIT</title>
    
    <script>
        (function() {
            var originalWarn = console.warn;
            console.warn = function(...args) {
                // Se a mensagem for o aviso do CDN, ignora-a
                if (args[0] && typeof args[0] === 'string' && args[0].includes('cdn.tailwindcss.com should not be used in production')) {
                    return;
                }
                
                originalWarn.apply(console, args);
            };
        })();
    </script>

    <link rel="icon" type="image/png" href="fotos_zenith/logo.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: { primary: '#0084ff', dark: '#222', 'app-orange': '#e0592a' } } } }
    </script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="font-[Poppins] text-gray-800 bg-white flex flex-col min-h-screen">
    
    <header class="bg-white sticky top-0 z-40 border-b py-4 shadow-sm">
        <div class="container mx-auto px-6 flex justify-between items-center relative">
            
            <a href="index.php" class="text-2xl font-bold text-dark tracking-wide flex items-center gap-1 z-20">
                ZENITH <span class="text-primary text-xl">▲</span> FIT
            </a>
            
            <nav class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 items-center space-x-6">
                <a href="index.php#about" class="text-sm font-semibold uppercase text-gray-800 hover:text-primary transition-colors">Sobre Nós</a>
                <a href="servicos.php" class="text-sm font-semibold uppercase text-gray-800 hover:text-primary transition-colors">Serviços</a>
                <a href="index.php#horario" class="text-sm font-semibold uppercase text-gray-800 hover:text-primary transition-colors">Horário</a>
                <a href="index.php#pricing" class="text-sm font-semibold uppercase text-gray-800 hover:text-primary transition-colors">Preços</a>
                <a href="blog.php" class="text-sm font-semibold uppercase text-gray-800 hover:text-primary transition-colors">Blog</a>
                <a href="contacto.php" class="text-sm font-semibold uppercase text-gray-800 hover:text-primary transition-colors">Contacto</a>
            </nav>

            <div class="flex items-center gap-4">
                <div class="hidden md:flex items-center gap-4">
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <a href="dashboard.php" class="text-primary font-bold border border-primary px-4 py-1 rounded-full hover:bg-primary hover:text-white transition text-sm">
                            <i class="fa-solid fa-user mr-2"></i><?php echo explode(' ', $_SESSION['user_name'])[0]; ?>
                        </a>
                        <a href="logout.php" class="text-red-500 font-semibold text-sm hover:underline">Sair</a>
                    <?php else: ?>
                        <a href="login.php" class="btn text-sm px-5 py-2">Login / Entrar</a>
                    <?php endif; ?>
                </div>

                <button id="mobile-menu-btn" class="md:hidden text-2xl text-dark">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t absolute w-full left-0 top-full shadow-lg p-6 flex flex-col space-y-4 z-40">
            <a href="index.php#about" class="font-semibold text-gray-800 hover:text-primary">Sobre Nós</a>
            <a href="servicos.php" class="font-semibold text-gray-800 hover:text-primary">Serviços</a>
            <a href="index.php#horario" class="font-semibold text-gray-800 hover:text-primary">Horário</a>
            <a href="index.php#pricing" class="font-semibold text-gray-800 hover:text-primary">Preços</a>
            <a href="blog.php" class="font-semibold text-gray-800 hover:text-primary">Blog</a>
            <a href="contacto.php" class="font-semibold text-gray-800 hover:text-primary">Contacto</a>
            <hr>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php" class="text-primary font-bold">Minha Conta</a>
                <a href="logout.php" class="text-red-500">Terminar Sessão</a>
            <?php else: ?>
                <a href="login.php" class="font-bold text-dark">Entrar</a>
                <a href="registar.php" class="font-bold text-app-orange">Criar Conta</a>
            <?php endif; ?>
        </div>
    </header>