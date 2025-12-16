<?php
$page_title = "Serviços";
include 'includes/header.php';
?>

<main class="flex-grow">
    
    <section class="bg-cover bg-center py-20 text-center" style="background-image: linear-gradient(rgba(182, 179, 179, 0.8), rgba(255, 255, 255, 0.8)), url('fotos_zenith/menu.png');">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-dark mb-4">Os Nossos Serviços</h1>
            <p class="text-lg text-gray-700">Tudo o que precisas para atingir o teu zénite.</p>
        </div>
    </section>

    <section id="personal-training" class="py-20 scroll-mt-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <img src="fotos_zenith/personal-trainer-1.jpg" alt="Treino Personalizado" class="w-full rounded-lg shadow-lg">
                <div>
                    <h3 class="text-2xl font-bold text-dark mb-4">Personal Training</h3>
                    <p class="text-gray-600 mb-4">O nosso serviço de Personal Training (PT) é a forma mais rápida e segura de atingir os teus objetivos, sejam eles perda de peso, ganho de massa muscular, reabilitação ou performance desportiva.</p>
                    <p class="font-semibold text-dark mb-2">O que inclui o nosso serviço de PT?</p>
                    <ul class="space-y-2 text-gray-600 list-disc pl-5">
                        <li><strong>Avaliação Inicial Completa:</strong> Análise postural, medição de massa gorda e definição de objetivos.</li>
                        <li><strong>Planeamento 100% Personalizado:</strong> Um plano de treino feito à tua medida, que evolui contigo.</li>
                        <li><strong>Acompanhamento Nutricional:</strong> Aconselhamento para otimizar os teus resultados.</li>
                        <li><strong>Motivação e Responsabilidade:</strong> O teu PT estará contigo em cada série, a garantir a tua técnica e a puxar por ti.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="aulas-grupo" class="py-20 bg-grey-bg scroll-mt-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-dark mb-12">Aulas de Grupo</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <img src="fotos_zenith/yoga.avif" alt="Aula de Yoga" class="w-full rounded-lg shadow-lg order-1">
                <div class="order-2">
                    <h3 class="text-2xl font-bold text-dark mb-4">Yoga & Pilates</h3>
                    <p class="text-gray-600 mb-4">Encontre o seu equilíbrio e fortaleça o seu core. As nossas aulas de Yoga (Vinyasa e Hatha) e Pilates focam-se na flexibilidade, controlo corporal e conexão mente-corpo.</p>
                    <p class="text-gray-600">Perfeito para todos os níveis, desde iniciantes a praticantes avançados.</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="order-2 md:order-1">
                    <h3 class="text-2xl font-bold text-dark mb-4">Cycling</h3>
                    <p class="text-gray-600">Prepare-se para suar! As nossas aulas de cycling são uma festa de cardio de alta intensidade. Com música motivadora e instrutores cheios de energia, vai queimar calorias e fortalecer as pernas como nunca.</p>
                </div>
                <img src="fotos_zenith/cy2.webp" alt="Aula de Cycling" class="w-full rounded-lg shadow-lg order-1 md:order-2">
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <img src="fotos_zenith/danca-fitt.jpg" alt="Aula de Zumba" class="w-full rounded-lg shadow-lg order-1">
                <div class="order-2">
                    <h3 class="text-2xl font-bold text-dark mb-4">Zumba & Dança</h3>
                    <p class="text-gray-600">Quem disse que treinar não pode ser divertido? Perca-se na música e dance até não poder mais. Zumba combina ritmos latinos e internacionais para um treino de corpo inteiro que mais parece uma festa.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="musculacao" class="py-20 scroll-mt-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-dark mb-12">Musculação & Cardio</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="order-2 md:order-1">
                    <h3 class="text-2xl font-bold text-dark mb-4">O Teu Espaço Para Crescer</h3>
                    <p class="text-gray-600 mb-4">A nossa área de musculação é o coração do ZENITH FIT. Equipada com a mais recente tecnologia Technogym e Life Fitness, tens tudo o que precisas para atingir os teus objetivos de força e hipertrofia.</p>
                    <ul class="space-y-2 text-gray-600 list-disc pl-5">
                        <li>Zona de Peso Livre completa (Racks de agachamento, halteres até 50kg)</li>
                        <li>Máquinas de última geração para todos os grupos musculares.</li>
                        <li>Zona de Treino Funcional com relva sintética, pesos russos e mais.</li>
                        <li>Instrutores de sala sempre presentes para te ajudar com a técnica.</li>
                    </ul>
                </div>
                <img src="fotos_zenith/strong-man.webp" alt="Zona de Musculação" class="w-full rounded-lg shadow-lg order-1 md:order-2">
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <img src="fotos_zenith/iStock-1132086660.jpg" alt="Zona de Cardio" class="w-full rounded-lg shadow-lg order-1">
                 <div class="order-2">
                    <h3 class="text-2xl font-bold text-dark mb-4">Zona de Cardio</h3>
                    <p class="text-gray-600 mb-4">Quer estejas a aquecer ou a fazer uma sessão de cardio dedicada, a nossa zona cardiovascular tem vista para a cidade e está equipada com:</p>
                    <ul class="space-y-2 text-gray-600 list-disc pl-5">
                        <li>Passadeiras com ligação à Netflix e Spotify.</li>
                        <li>Elípticas e Steppers.</li>
                        <li>Bicicletas estáticas e Remos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>