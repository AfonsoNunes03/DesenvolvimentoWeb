<?php
$page_title = "Contactos";
include 'includes/header.php';
?>

<main class="flex-grow">
    
    <section class="bg-cover bg-center py-24 text-center relative" style="background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.8)), url('fotos_zenith/menu.png');">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 tracking-tight">Fale Connosco</h1>
            <p class="text-lg text-gray-600 font-medium">Estamos aqui para responder a todas as suas questões.</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="grid md:grid-cols-3 gap-16">
                
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Envie-nos uma Mensagem</h2>
                    
                    <form action="processa_formulario.php" method="POST" class="space-y-6">
                        
                        <div>
                            <label class="block text-sm font-bold text-gray-900 mb-2">Nome</label>
                            <input type="text" name="name" required 
                                   class="w-full border border-gray-300 rounded-md p-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition"
                                   placeholder="">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-900 mb-2">Telefone</label>
                            <input type="tel" name="phone" required pattern="[0-9]{9}" 
                                   class="w-full border border-gray-300 rounded-md p-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition"
                                   placeholder="">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-900 mb-2">Email</label>
                            <input type="email" name="email" required 
                                   class="w-full border border-gray-300 rounded-md p-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition"
                                   placeholder="">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-900 mb-2">Assunto</label>
                            <select name="subject" required 
                                    class="w-full border border-gray-300 rounded-md p-4 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition cursor-pointer">
                                <option value="" disabled selected>Escolha um assunto...</option>
                                <option value="Informações Gerais">Informações Gerais</option>
                                <option value="Inscrição">Inscrição / Preços</option>
                                <option value="Aulas">Aulas de Grupo</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-900 mb-2">Mensagem</label>
                            <textarea name="message" rows="6" required 
                                      class="w-full border border-gray-300 rounded-md p-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition resize-y"></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="bg-gray-900 text-white font-bold py-4 px-10 rounded-full hover:bg-black transition uppercase tracking-wide text-sm shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 duration-200">
                                Enviar Mensagem
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-gray-50 p-10 rounded-xl h-fit border border-gray-100">
                    
                    <h3 class="text-lg font-bold text-gray-900 mb-6">Informação de Contacto</h3>
                    
                    <ul class="space-y-5 mb-10">
                        <li class="flex items-start">
                            <i class="fa-solid fa-location-dot text-blue-600 mt-1.5 mr-4 text-lg"></i>
                            <span class="text-gray-600 text-sm leading-relaxed">Avenida Sá da Bandeira, 85, 3000-350<br>Coimbra</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone text-blue-600 mr-4 text-lg"></i>
                            <span class="text-gray-600 text-sm">+351 210 000 000</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope text-blue-600 mr-4 text-lg"></i>
                            <span class="text-gray-600 text-sm">geral@zenithfit.pt</span>
                        </li>
                    </ul>

                    <h3 class="text-lg font-bold text-gray-900 mb-4">Horário</h3>
                    <ul class="space-y-3 text-gray-600 text-sm mb-10 border-t border-gray-200 pt-6">
                        <li class="flex justify-between">
                            <strong class="text-gray-900">Seg - Sex:</strong> 
                            <span>06:00 - 23:00</span>
                        </li>
                        <li class="flex justify-between">
                            <strong class="text-gray-900">Sábado:</strong> 
                            <span>08:00 - 20:00</span>
                        </li>
                        <li class="flex justify-between">
                            <strong class="text-gray-900">Domingo:</strong> 
                            <span>09:00 - 14:00</span>
                        </li>
                    </ul>

                    <h3 class="text-lg font-bold text-gray-900 mb-4">Siga-nos</h3>
                    <div class="flex space-x-5">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-2xl transition transform hover:scale-110"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-2xl transition transform hover:scale-110"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-2xl transition transform hover:scale-110"><i class="fa-brands fa-tiktok"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>