<?php 
$page_title = "Início";
include 'includes/header.php'; 
?>

<main class="flex-grow">
    
    <section id="home" class="relative min-h-[90vh] flex items-center justify-center text-center pt-20 bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('fotos_zenith/menu.png');">
        <div class="max-w-2xl px-6">
            <h1 class="text-5xl md:text-6xl font-bold text-dark mb-6 leading-tight">ALCANÇA O TEU POTENCIAL</h1>
            <p class="text-xl mb-8 text-gray-700">Bem-vindo ao ZENITH FIT. Onde a tua subida para a melhor versão de ti começa.</p>
            <a href="#pricing" class="inline-block bg-primary text-white px-8 py-3 rounded-full font-semibold uppercase tracking-wide border-2 border-primary hover:bg-transparent hover:text-primary transition duration-300">Aderir Agora</a>
        </div>
    </section>

    <section id="about" class="py-20 scroll-mt-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dark mb-12">A NOSSA MISSÃO: O TEU ZÉNITE</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-dark mb-4">A Nossa Filosofia</h3>
                    <p class="mb-4 text-gray-600">Para nós, atingir o auge da performance não é um acaso, é um método. No ZENITH FIT, a nossa vocação é equipar-te com uma metodologia comprovada e recursos avançados.</p>
                    <p class="text-gray-600">Mais do que um ginásio, somos um centro de transformação. Com equipamento de última geração e treinadores de elite.</p>
                </div>
                <div>
                    <img src="fotos_zenith/grupo.png" alt="Interior do ginásio Zenith Fit" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <section id="horario" class="py-20 bg-grey-bg scroll-mt-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-dark mb-4">Horário & Reservas</h2>
            <p class="text-center text-gray-600 mb-10">Clica na aula para reservar (Max: 2/dia)</p>
            
            <div class="hidden md:block overflow-x-auto bg-white rounded shadow-lg mb-10">
                <table class="schedule-table w-full text-center border-collapse">
                    <thead class="bg-dark text-white uppercase text-sm font-bold">
                        <tr>
                            <th class="p-4 border border-gray-700 w-24">Hora</th>
                            <th class="p-4 border border-gray-700">Segunda</th>
                            <th class="p-4 border border-gray-700">Terça</th>
                            <th class="p-4 border border-gray-700">Quarta</th>
                            <th class="p-4 border border-gray-700">Quinta</th>
                            <th class="p-4 border border-gray-700">Sexta</th>
                            <th class="p-4 border border-gray-700">Sábado</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700 font-medium">
                        <tr>
                            <td class="font-bold border p-4 bg-gray-50">07:00</td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="seg-07-cycling" data-name="Cycling" data-day="Segunda" data-time="07:00" data-inst="Ana"><div class="font-bold text-red-600">Cycling</div><div class="text-xs text-gray-500">(Ana)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="ter-07-yoga" data-name="Yoga" data-day="Terça" data-time="07:00" data-inst="Maria"><div class="font-bold text-emerald-600">Yoga</div><div class="text-xs text-gray-500">(Maria)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qua-07-cycling" data-name="Cycling" data-day="Quarta" data-time="07:00" data-inst="Ana"><div class="font-bold text-red-600">Cycling</div><div class="text-xs text-gray-500">(Ana)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qui-07-yoga" data-name="Yoga" data-day="Quinta" data-time="07:00" data-inst="Maria"><div class="font-bold text-emerald-600">Yoga</div><div class="text-xs text-gray-500">(Maria)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sex-07-cycling" data-name="Cycling" data-day="Sexta" data-time="07:00" data-inst="Ana"><div class="font-bold text-red-600">Cycling</div><div class="text-xs text-gray-500">(Ana)</div></td>
                            <td class="border p-4"></td>
                        </tr>
                        <tr>
                            <td class="font-bold border p-4 bg-gray-50">08:00</td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="seg-08-pilates" data-name="Pilates" data-day="Segunda" data-time="08:00" data-inst="Joana"><div class="font-bold text-cyan-600">Pilates</div><div class="text-xs text-gray-500">(Joana)</div></td>
                            <td class="border p-4"></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qua-08-pilates" data-name="Pilates" data-day="Quarta" data-time="08:00" data-inst="Joana"><div class="font-bold text-cyan-600">Pilates</div><div class="text-xs text-gray-500">(Joana)</div></td>
                            <td class="border p-4"></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sex-08-pilates" data-name="Pilates" data-day="Sexta" data-time="08:00" data-inst="Joana"><div class="font-bold text-cyan-600">Pilates</div><div class="text-xs text-gray-500">(Joana)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sab-08-pilates" data-name="Pilates" data-day="Sábado" data-time="08:00" data-inst="Joana"><div class="font-bold text-cyan-600">Pilates</div><div class="text-xs text-gray-500">(Joana)</div></td>
                        </tr>
                        <tr>
                            <td class="font-bold border p-4 bg-gray-50">09:00</td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="seg-09-zumba" data-name="Zumba" data-day="Segunda" data-time="09:00" data-inst="Carla"><div class="font-bold text-fuchsia-600">Zumba</div><div class="text-xs text-gray-500">(Carla)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="ter-09-pump" data-name="Body Pump" data-day="Terça" data-time="09:00" data-inst="Bruno"><div class="font-bold text-orange-500">Body Pump</div><div class="text-xs text-gray-500">(Bruno)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qua-09-zumba" data-name="Zumba" data-day="Quarta" data-time="09:00" data-inst="Carla"><div class="font-bold text-fuchsia-600">Zumba</div><div class="text-xs text-gray-500">(Carla)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qui-09-pump" data-name="Body Pump" data-day="Quinta" data-time="09:00" data-inst="Bruno"><div class="font-bold text-orange-500">Body Pump</div><div class="text-xs text-gray-500">(Bruno)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sex-09-zumba" data-name="Zumba" data-day="Sexta" data-time="09:00" data-inst="Carla"><div class="font-bold text-fuchsia-600">Zumba</div><div class="text-xs text-gray-500">(Carla)</div></td>
                            <td class="border p-4"></td>
                        </tr>
                        <tr>
                            <td class="font-bold border p-4 bg-gray-50">17:00</td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="seg-17-yoga" data-name="Yoga" data-day="Segunda" data-time="17:00" data-inst="Maria"><div class="font-bold text-emerald-600">Yoga</div><div class="text-xs text-gray-500">(Maria)</div></td>
                            <td class="border p-4"></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qua-17-yoga" data-name="Yoga" data-day="Quarta" data-time="17:00" data-inst="Maria"><div class="font-bold text-emerald-600">Yoga</div><div class="text-xs text-gray-500">(Maria)</div></td>
                            <td class="border p-4"></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sex-17-yoga" data-name="Yoga" data-day="Sexta" data-time="17:00" data-inst="Maria"><div class="font-bold text-emerald-600">Yoga</div><div class="text-xs text-gray-500">(Maria)</div></td>
                            <td class="border p-4"></td>
                        </tr>
                        <tr>
                            <td class="font-bold border p-4 bg-gray-50">18:00</td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="seg-18-cycling" data-name="Cycling" data-day="Segunda" data-time="18:00" data-inst="Rui"><div class="font-bold text-red-600">Cycling</div><div class="text-xs text-gray-500">(Rui)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="ter-18-cross" data-name="Cross Training" data-day="Terça" data-time="18:00" data-inst="Pedro"><div class="font-bold text-indigo-600">Cross</div><div class="text-xs text-gray-500">(Pedro)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qua-18-cycling" data-name="Cycling" data-day="Quarta" data-time="18:00" data-inst="Rui"><div class="font-bold text-red-600">Cycling</div><div class="text-xs text-gray-500">(Rui)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qui-18-cross" data-name="Cross Training" data-day="Quinta" data-time="18:00" data-inst="Pedro"><div class="font-bold text-indigo-600">Cross</div><div class="text-xs text-gray-500">(Pedro)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sex-18-cycling" data-name="Cycling" data-day="Sexta" data-time="18:00" data-inst="Rui"><div class="font-bold text-red-600">Cycling</div><div class="text-xs text-gray-500">(Rui)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sab-18-cycling" data-name="Cycling" data-day="Sábado" data-time="18:00" data-inst="Rui"><div class="font-bold text-red-600">Cycling</div><div class="text-xs text-gray-500">(Rui)</div></td>
                        </tr>
                        <tr>
                            <td class="font-bold border p-4 bg-gray-50">19:00</td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="seg-19-pump" data-name="Body Pump" data-day="Segunda" data-time="19:00" data-inst="Bruno"><div class="font-bold text-orange-500">Body Pump</div><div class="text-xs text-gray-500">(Bruno)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="ter-19-pilates" data-name="Pilates" data-day="Terça" data-time="19:00" data-inst="Joana"><div class="font-bold text-cyan-600">Pilates</div><div class="text-xs text-gray-500">(Joana)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qua-19-pump" data-name="Body Pump" data-day="Quarta" data-time="19:00" data-inst="Bruno"><div class="font-bold text-orange-500">Body Pump</div><div class="text-xs text-gray-500">(Bruno)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="qui-19-pilates" data-name="Pilates" data-day="Quinta" data-time="19:00" data-inst="Joana"><div class="font-bold text-cyan-600">Pilates</div><div class="text-xs text-gray-500">(Joana)</div></td>
                            <td class="class-trigger hover:bg-blue-50 cursor-pointer p-4 border" data-id="sex-19-pump" data-name="Body Pump" data-day="Sexta" data-time="19:00" data-inst="Bruno"><div class="font-bold text-orange-500">Body Pump</div><div class="text-xs text-gray-500">(Bruno)</div></td>
                            <td class="border p-4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="md:hidden max-w-md mx-auto mt-8 mb-10">
                
                <div class="grid grid-cols-6 gap-2 mb-4">
                    <button class="day-btn bg-primary text-white border-transparent shadow-md hover:bg-blue-600 hover:text-white p-2 rounded-lg font-bold transition text-center" data-day="seg">
                        <span class="block text-xs">SEG</span>
                    </button>
                    <button class="day-btn bg-white text-gray-600 border border-gray-200 shadow-sm hover:bg-gray-100 hover:text-gray-900 p-2 rounded-lg font-bold transition text-center" data-day="ter">
                        <span class="block text-xs">TER</span>
                    </button>
                    <button class="day-btn bg-white text-gray-600 border border-gray-200 shadow-sm hover:bg-gray-100 hover:text-gray-900 p-2 rounded-lg font-bold transition text-center" data-day="qua">
                        <span class="block text-xs">QUA</span>
                    </button>
                    <button class="day-btn bg-white text-gray-600 border border-gray-200 shadow-sm hover:bg-gray-100 hover:text-gray-900 p-2 rounded-lg font-bold transition text-center" data-day="qui">
                        <span class="block text-xs">QUI</span>
                    </button>
                    <button class="day-btn bg-white text-gray-600 border border-gray-200 shadow-sm hover:bg-gray-100 hover:text-gray-900 p-2 rounded-lg font-bold transition text-center" data-day="sex">
                        <span class="block text-xs">SEX</span>
                    </button>
                    <button class="day-btn bg-white text-gray-600 border border-gray-200 shadow-sm hover:bg-gray-100 hover:text-gray-900 p-2 rounded-lg font-bold transition text-center" data-day="sab">
                        <span class="block text-xs">SÁB</span>
                    </button>
                </div>

                <div class="flex text-center font-bold mb-6 shadow-sm rounded-lg overflow-hidden cursor-pointer border border-gray-200">
                    <div id="filter-morning" class="period-btn w-1/2 p-3 bg-primary text-white transition-colors" data-period="morning">Manhã</div>
                    <div id="filter-afternoon" class="period-btn w-1/2 p-3 bg-white text-gray-600 hover:bg-gray-50 transition-colors border-l" data-period="afternoon">Tarde</div>
                </div>

                <?php 
                function renderMobileDay($id, $label, $classes, $hidden = true) {
                    $hideClass = $hidden ? 'hidden' : '';
                    echo "<div id='schedule-$id' class='day-schedule bg-white rounded shadow divide-y border border-gray-100 $hideClass'>";
                    echo "<div class='p-4 bg-gray-50 text-center font-bold text-primary border-b border-gray-200'>$label</div>";
                    
                    if (empty($classes)) echo "<div class='p-6 text-center text-gray-500 text-sm italic'>Sem aulas neste dia.</div>";

                    foreach($classes as $aula) {
                        $time = $aula[0];
                        $name = $aula[1];
                        $inst = $aula[2];
                        $dataId = $aula[3];
                        
                        $hour = intval(substr($time, 0, 2));
                        $period = ($hour < 12) ? 'morning' : 'afternoon';

                        echo "
                        <div class='mobile-class-item flex justify-between items-center p-4 cursor-pointer class-trigger hover:bg-gray-50' 
                             data-id='$dataId' 
                             data-name='$name' 
                             data-day='$label' 
                             data-time='$time' 
                             data-inst='$inst'
                             data-period='$period'>
                            <div class='flex items-center gap-4'>
                                <span class='font-bold text-lg w-14 text-dark'>$time</span>
                                <span>$name</span>
                            </div>
                            <span class='bg-primary text-white text-xs font-bold px-4 py-2 rounded uppercase shadow-sm'>Reservar</span>
                        </div>";
                    }
                    echo "</div>";
                }

                $seg = [['07:00', 'Cycling', 'Ana', 'seg-07-cycling'],['08:00', 'Pilates', 'Joana', 'seg-08-pilates'],['09:00', 'Zumba', 'Carla', 'seg-09-zumba'],['17:00', 'Yoga', 'Maria', 'seg-17-yoga'],['18:00', 'Cycling', 'Rui', 'seg-18-cycling'],['19:00', 'Body Pump', 'Bruno', 'seg-19-pump']];
                $ter = [['07:00', 'Yoga', 'Maria', 'ter-07-yoga'],['09:00', 'Body Pump', 'Bruno', 'ter-09-pump'],['18:00', 'Cross Training', 'Pedro', 'ter-18-cross'],['19:00', 'Pilates', 'Joana', 'ter-19-pilates']];
                $qua = [['07:00', 'Cycling', 'Ana', 'qua-07-cycling'],['08:00', 'Pilates', 'Joana', 'qua-08-pilates'],['09:00', 'Zumba', 'Carla', 'qua-09-zumba'],['17:00', 'Yoga', 'Maria', 'qua-17-yoga'],['18:00', 'Cycling', 'Rui', 'qua-18-cycling'],['19:00', 'Body Pump', 'Bruno', 'qua-19-pump']];
                $qui = [['07:00', 'Yoga', 'Maria', 'qui-07-yoga'],['09:00', 'Body Pump', 'Bruno', 'qui-09-pump'],['18:00', 'Cross Training', 'Pedro', 'qui-18-cross'],['19:00', 'Pilates', 'Joana', 'qui-19-pilates']];
                $sex = [['07:00', 'Cycling', 'Ana', 'sex-07-cycling'],['08:00', 'Pilates', 'Joana', 'sex-08-pilates'],['09:00', 'Zumba', 'Carla', 'sex-09-zumba'],['17:00', 'Yoga', 'Maria', 'sex-17-yoga'],['18:00', 'Cycling', 'Rui', 'sex-18-cycling'],['19:00', 'Body Pump', 'Bruno', 'sex-19-pump']];
                $sab = [['08:00', 'Pilates', 'Joana', 'sab-08-pilates'],['09:00', 'Yoga', 'Maria', 'sab-09-yoga'],['18:00', 'Cycling', 'Rui', 'sab-18-cycling']];

                renderMobileDay('seg', 'Segunda-Feira', $seg, false);
                renderMobileDay('ter', 'Terça-Feira', $ter);
                renderMobileDay('qua', 'Quarta-Feira', $qua);
                renderMobileDay('qui', 'Quinta-Feira', $qui);
                renderMobileDay('sex', 'Sexta-Feira', $sex);
                renderMobileDay('sab', 'Sábado', $sab);
                ?>
            </div>

            <div class="text-center">
                <p class="text-lg mb-4"><strong>É membro?</strong> Utilize a tabela acima para reservar.</p>
                <a href="contacto.php" class="inline-block bg-primary text-white px-8 py-3 rounded-full font-semibold uppercase tracking-wide border-2 border-primary hover:bg-transparent hover:text-primary transition duration-300">Aderir Agora</a>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-20 scroll-mt-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dark mb-4">ESCOLHE O PLANO QUE TE LEVA AO TOPO</h2>
            <p class="text-center max-w-2xl mx-auto text-gray-600 mb-12">Transparência total. Sem custos escondidos. Escolhe o plano que se adapta à tua vida.</p>

            <div class="bg-yellow-50 border-2 border-dashed border-yellow-500 rounded-lg p-8 text-center max-w-3xl mx-auto mb-12">
                <h3 class="text-xl font-bold text-dark mb-2"><i class="fa-solid fa-star text-yellow-500"></i> PROMOÇÃO ATUAL</h3>
                <p class="text-gray-800"><strong>Taxa de Inscrição GRÁTIS</strong> em todas as adesões anuais! (Válido este mês)</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center hover:-translate-y-2 transition duration-300">
                    <h3 class="text-xl font-bold text-primary uppercase mb-2">Plano Flex</h3>
                    <div class="text-sm font-semibold text-gray-500 mb-4">Pagamento Mensal</div>
                    <div class="text-4xl font-bold text-dark mb-4">€49<span class="text-base font-normal text-gray-500">/mês</span></div>
                    <ul class="text-gray-600 mb-8 space-y-3 border-t border-gray-100 pt-6">
                        <li class="border-b border-gray-100 pb-2">Acesso Livre ao Ginásio</li>
                        <li class="border-b border-gray-100 pb-2">Aulas de Grupo Ilimitadas</li>
                        <li class="border-b border-gray-100 pb-2">Sem fidelização</li>
                        <li class="pb-2">Taxa de Inscrição: €25</li>
                    </ul>
                    <a href="contacto.php" class="inline-block bg-primary text-white px-8 py-3 rounded-full font-semibold uppercase tracking-wide border-2 border-primary hover:bg-transparent hover:text-primary transition duration-300">Aderir</a>
                </div>
                
                <div class="bg-white border-2 border-primary rounded-lg p-10 text-center transform md:scale-105 shadow-2xl hover:-translate-y-2 transition duration-300 z-10">
                    <h3 class="text-xl font-bold text-primary uppercase mb-2">Plano Zenith</h3>
                    <div class="text-sm font-semibold text-gray-500 mb-4">Pagamento Trimestral</div>
                    <div class="text-4xl font-bold text-dark mb-4">€42<span class="text-base font-normal text-gray-500">/mês</span></div>
                    <ul class="text-gray-600 mb-8 space-y-3 border-t border-gray-100 pt-6">
                        <li class="border-b border-gray-100 pb-2">Acesso Livre ao Ginásio</li>
                        <li class="border-b border-gray-100 pb-2">Aulas de Grupo Ilimitadas</li>
                        <li class="border-b border-gray-100 pb-2">Avaliação Física Inicial</li>
                        <li class="pb-2">Taxa de Inscrição: €15</li>
                    </ul>
                    <a href="contacto.php" class="inline-block bg-primary text-white px-8 py-3 rounded-full font-semibold uppercase tracking-wide border-2 border-primary hover:bg-transparent hover:text-primary transition duration-300">Aderir Agora</a>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-10 text-center hover:-translate-y-2 transition duration-300">
                    <h3 class="text-xl font-bold text-primary uppercase mb-2">Plano Anual</h3>
                    <div class="text-sm font-semibold text-gray-500 mb-4">Pagamento Anual</div>
                    <div class="text-4xl font-bold text-dark mb-4">€35<span class="text-base font-normal text-gray-500">/mês</span></div>
                    <ul class="text-gray-600 mb-8 space-y-3 border-t border-gray-100 pt-6">
                        <li class="border-b border-gray-100 pb-2">Tudo do Plano Zenith</li>
                        <li class="border-b border-gray-100 pb-2"><strong>Plano Nutricional Incluído</strong></li>
                        <li class="border-b border-gray-100 pb-2">Acesso a Workshops</li>
                        <li class="pb-2"><strong>Taxa de Inscrição GRÁTIS</strong></li>
                    </ul>
                    <a href="contacto.php" class="inline-block bg-primary text-white px-8 py-3 rounded-full font-semibold uppercase tracking-wide border-2 border-primary hover:bg-transparent hover:text-primary transition duration-300">Aderir</a>
                </div>
            </div>

            <div class="max-w-3xl mx-auto mt-16">
                <h3 class="text-2xl font-bold text-center text-dark mb-8">Perguntas Frequentes</h3>
                
                <details class="group border-b border-gray-200 mb-4 cursor-pointer">
                    <summary class="flex justify-between items-center font-semibold text-dark py-4 outline-none">
                        <span>Existe período de fidelização?</span>
                        <span class="text-primary group-open:rotate-180 transition-transform"><i class="fa-solid fa-chevron-down"></i></span>
                    </summary>
                    <p class="text-gray-600 pb-4 px-2">Dispomos de modalidades com e sem vínculo de fidelização. Os planos de longa duração (trimestral e anual) beneficiam de condições financeiras mais vantajosas.</p>
                </details>
                
                <details class="group border-b border-gray-200 mb-4 cursor-pointer">
                    <summary class="flex justify-between items-center font-semibold text-dark py-4 outline-none">
                        <span>Posso congelar a minha inscrição?</span>
                        <span class="text-primary group-open:rotate-180 transition-transform"><i class="fa-solid fa-chevron-down"></i></span>
                    </summary>
                    <p class="text-gray-600 pb-4 px-2">Sim, todos os planos (exceto o mensal) permitem o congelamento da inscrição por um período máximo de 30 dias por ano, mediante aviso prévio.</p>
                </details>
                
                <details class="group border-b border-gray-200 mb-4 cursor-pointer">
                    <summary class="flex justify-between items-center font-semibold text-dark py-4 outline-none">
                        <span>Posso experimentar antes de aderir?</span>
                        <span class="text-primary group-open:rotate-180 transition-transform"><i class="fa-solid fa-chevron-down"></i></span>
                    </summary>
                    <p class="text-gray-600 pb-4 px-2">Claro! Oferecemos um passe diário gratuito para que possas conhecer o espaço, experimentar uma aula e falar com a nossa equipa.</p>
                </details>
            </div>
        </div>
    </section>

    <section id="reviews" class="py-20 bg-grey-bg">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dark mb-12">HISTÓRIAS REAIS. RESULTADOS REAIS.</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg border-l-4 border-primary shadow-md">
                    <div class="text-yellow-500 mb-4 text-lg">⭐⭐⭐⭐⭐</div>
                    <p class="italic text-gray-600 mb-6">"O Zenith Fit não mudou só o meu corpo, mudou a minha mentalidade. O acompanhamento dos treinadores é incrível e o ambiente é fantástico. Sinto-me em casa."</p>
                    <div class="flex items-center">
                        <img src="fotos_zenith/maria.png" alt="Maria S." class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="text-primary font-bold">Maria S.</h4>
                            <span class="text-sm text-gray-500">Membro desde 2023</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg border-l-4 border-primary shadow-md">
                    <div class="text-yellow-500 mb-4 text-lg">⭐⭐⭐⭐⭐</div>
                    <p class="italic text-gray-600 mb-6">"Vim de outro ginásio e a diferença é abismal. O equipamento é todo novo, as aulas são intensas e os resultados apareceram muito mais rápido. Recomendo a 100%!"</p>
                    <div class="flex items-center">
                        <img src="fotos_zenith/joao.png" alt="João F." class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="text-primary font-bold">João F.</h4>
                            <span class="text-sm text-gray-500">Membro desde 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="free-day" class="py-20 bg-primary text-white scroll-mt-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-white mb-4">AGENDA O TEU DIA EXPERIMENTAL GRÁTIS</h2>
            <p class="text-center mb-8">Vem conhecer o espaço, experimentar uma aula e falar com a nossa equipa. Sem compromisso.</p>
            
            <form action="processa_formulario.php" method="POST" class="max-w-2xl mx-auto grid md:grid-cols-2 gap-6">
                <div class="flex flex-col">
                    <label for="name" class="font-semibold mb-2">Nome</label>
                    <input type="text" id="name" name="name" required class="p-3 rounded border border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div class="flex flex-col">
                    <label for="phone" class="font-semibold mb-2">Telefone</label>
                    <input type="tel" id="phone" name="phone" required class="p-3 rounded border border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div class="flex flex-col md:col-span-2">
                    <label for="email" class="font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="p-3 rounded border border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <button type="submit" class="md:col-span-2 bg-white text-primary py-3 px-8 rounded-full font-bold uppercase border-2 border-white hover:bg-transparent hover:text-white transition duration-300 text-lg">Quero o meu dia grátis!</button>
            </form>
        </div>
    </section>
</main>

<div id="booking-modal" class="fixed inset-0 z-50 hidden">
    <div id="modal-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-2xl p-6 w-11/12 max-w-sm text-center">
        <h3 class="text-xl font-bold mb-4 text-primary">Detalhes da Aula</h3>
        <div class="bg-gray-50 p-4 rounded mb-4 border border-gray-100">
            <p id="modal-class-name" class="text-2xl font-bold text-dark mb-1">Aula</p>
            <p class="text-gray-700"><span id="modal-day">Dia</span> às <span id="modal-time">Hora</span></p>
            <p class="text-sm text-gray-500 mt-2 mb-2">Prof. <span id="modal-inst">--</span></p>
            
            <p id="modal-capacity" class="text-sm font-bold text-primary border-t border-gray-200 pt-2 transition-colors">
                <i class="fa-solid fa-users mr-1"></i> Vagas: <span id="slots-count">--</span>/20
            </p>
        </div>
        <div id="modal-message" class="hidden mb-4 text-sm font-bold p-2 rounded"></div>
        <button id="modal-action-btn" class="w-full btn mb-3">A carregar...</button>
        <button id="modal-close-btn" class="w-full text-gray-500 text-sm hover:text-dark font-semibold">Fechar</button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>