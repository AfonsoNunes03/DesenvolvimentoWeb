<?php
$page_title = "Blog";
include 'includes/header.php';
?>

<main class="flex-grow">
    
    <section class="bg-cover bg-center py-20 text-center" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('fotos_zenith/menu.png');">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-dark mb-4">O Nosso Blog</h1>
            <p class="text-lg text-gray-700">Dicas de fitness, nutrição e bem-estar.</p>
        </div>
    </section>

    <section id="blog-list" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">
                    <img src="fotos_zenith/nutricao.png" alt="Nutrição" class="w-full h-48 object-cover">
                    <div class="p-8">
                        <div class="text-xs font-bold text-gray-500 mb-2 uppercase tracking-wide">Nutrição • 24 Outubro, 2025</div>
                        <h3 class="text-xl font-bold text-dark mb-3 leading-tight">Os 5 Mitos Sobre Perda de Peso (Desmistificados)</h3>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed">Deixar de comer hidratos? Só comer de 3 em 3 horas? A nossa nutricionista explica tudo o que precisas de saber.</p>
                        <a href="#" class="text-primary font-bold hover:underline flex items-center text-sm uppercase tracking-wide">
                            Ler Mais <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">
                    <img src="fotos_zenith/treino.png" alt="Treino" class="w-full h-48 object-cover">
                    <div class="p-8">
                        <div class="text-xs font-bold text-gray-500 mb-2 uppercase tracking-wide">Treino • 22 Outubro, 2025</div>
                        <h3 class="text-xl font-bold text-dark mb-3 leading-tight">Porque é que o Treino de Força é Essencial</h3>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed">Descubra os benefícios incríveis do treino de força para a saúde óssea, metabolismo e composição corporal.</p>
                        <a href="#" class="text-primary font-bold hover:underline flex items-center text-sm uppercase tracking-wide">
                            Ler Mais <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">
                    <img src="fotos_zenith/personal.png" alt="Mindset" class="w-full h-48 object-cover">
                    <div class="p-8">
                        <div class="text-xs font-bold text-gray-500 mb-2 uppercase tracking-wide">Mindset • 20 Outubro, 2025</div>
                        <h3 class="text-xl font-bold text-dark mb-3 leading-tight">Como Criar Consistência: A Chave Para o Sucesso</h3>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed">A motivação vai e vem. A disciplina fica. Aprenda a construir hábitos diários que o levam ao sucesso.</p>
                        <a href="#" class="text-primary font-bold hover:underline flex items-center text-sm uppercase tracking-wide">
                            Ler Mais <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>