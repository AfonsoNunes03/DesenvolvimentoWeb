document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. Menu Mobile ---
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- 2. SISTEMA DE FILTRAGEM MOBILE ---
    const dayBtns = document.querySelectorAll('.day-btn');
    const periodBtns = document.querySelectorAll('.period-btn');
    const daySchedules = document.querySelectorAll('.day-schedule');
    
    let activeDay = 'seg';
    let activePeriod = 'morning';

    // Classes para botões (Evitar hover branco/invisível)
    const activeClasses = ['bg-primary', 'text-white', 'border-transparent', 'shadow-md', 'hover:bg-blue-600', 'hover:text-white'];
    const inactiveClasses = ['bg-white', 'text-gray-600', 'border-gray-200', 'shadow-sm', 'border', 'hover:bg-gray-100', 'hover:text-gray-900'];

    function setBtnActive(btn) {
        btn.classList.remove(...inactiveClasses);
        btn.classList.add(...activeClasses);
    }

    function setBtnInactive(btn) {
        btn.classList.remove(...activeClasses);
        btn.classList.add(...inactiveClasses);
    }

    function renderMobileView() {
        dayBtns.forEach(btn => {
            if(btn.dataset.day === activeDay) setBtnActive(btn);
            else setBtnInactive(btn);
        });

        periodBtns.forEach(btn => {
            if(btn.dataset.period === activePeriod) {
                btn.classList.remove('bg-white', 'text-gray-600', 'hover:bg-gray-50');
                btn.classList.add('bg-primary', 'text-white');
            } else {
                btn.classList.remove('bg-primary', 'text-white');
                btn.classList.add('bg-white', 'text-gray-600', 'hover:bg-gray-50');
            }
        });

        daySchedules.forEach(schedule => {
            schedule.classList.add('hidden');
            if (schedule.id === `schedule-${activeDay}`) {
                schedule.classList.remove('hidden');
                const classes = schedule.querySelectorAll('.mobile-class-item');
                classes.forEach(item => {
                    if (item.dataset.period === activePeriod) item.classList.remove('hidden');
                    else item.classList.add('hidden');
                });
            }
        });
    }

    if (dayBtns.length > 0) {
        dayBtns.forEach(btn => {
            btn.addEventListener('click', () => { activeDay = btn.dataset.day; renderMobileView(); });
        });
        periodBtns.forEach(btn => {
            btn.addEventListener('click', () => { activePeriod = btn.dataset.period; renderMobileView(); });
        });
        renderMobileView();
    }


    // --- 3. SISTEMA DE RESERVAS (ATUALIZADO) ---
    const modal = document.getElementById('booking-modal');
    const closeBtn = document.getElementById('modal-close-btn');
    const actionBtn = document.getElementById('modal-action-btn');
    const mMsg = document.getElementById('modal-message');
    const capacityElem = document.getElementById('modal-capacity');
    let currentAulaData = null;

    document.querySelectorAll('.class-trigger').forEach(item => {
        item.addEventListener('click', function() {
            currentAulaData = {
                id: this.dataset.id,
                name: this.dataset.name,
                day: this.dataset.day,
                time: this.dataset.time,
                inst: this.dataset.inst
            };
            if(document.getElementById('modal-class-name')) {
                document.getElementById('modal-class-name').textContent = currentAulaData.name;
                document.getElementById('modal-time').textContent = currentAulaData.time;
                document.getElementById('modal-day').textContent = currentAulaData.day;
                document.getElementById('modal-inst').textContent = currentAulaData.inst;
                // Reset da lotação visual
                if(capacityElem) {
                    capacityElem.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-1"></i> A verificar...';
                    capacityElem.className = 'text-sm font-bold text-gray-500 border-t border-gray-200 pt-2';
                }
            }
            
            if(mMsg) mMsg.classList.add('hidden');
            checkBookingStatus(currentAulaData.id);
            if(modal) modal.classList.remove('hidden');
        });
    });

    function closeModal() { if(modal) modal.classList.add('hidden'); }
    if(closeBtn) closeBtn.addEventListener('click', closeModal);
    const backdrop = document.getElementById('modal-backdrop');
    if(backdrop) backdrop.addEventListener('click', closeModal);

    if (actionBtn) {
        actionBtn.onclick = function(e) {
            e.preventDefault();
            if (currentAulaData && !actionBtn.disabled) toggleBooking();
        };
    }

    // --- Lógica de Cancelar no Dashboard ---
    const cancelBtns = document.querySelectorAll('.cancel-booking-btn');
    if (cancelBtns.length > 0) {
        cancelBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                if(!confirm("Tem a certeza que deseja cancelar esta reserva?")) return;
                const aulaId = this.dataset.id;
                const card = this.closest('.booking-card');
                const container = document.getElementById('bookings-container');
                
                this.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';
                this.disabled = true;

                const formData = new FormData();
                formData.append('action', 'cancel');
                formData.append('aula_id', aulaId);

                fetch('api_booking.php', { method: 'POST', body: formData })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.remove();
                            if (container && container.children.length === 0) location.reload();
                        }, 300);
                    } else {
                        alert("Erro: " + (data.message || "Tente novamente."));
                        this.innerHTML = '<i class="fa-solid fa-xmark"></i>';
                        this.disabled = false;
                    }
                });
            });
        });
    }

    // --- FUNÇÕES API ---
    function checkBookingStatus(aulaId) {
        if(!actionBtn) return;
        actionBtn.textContent = "A verificar...";
        actionBtn.disabled = true;
        actionBtn.className = "w-full rounded-md bg-gray-400 px-3 py-2 text-white font-bold";

        const formData = new FormData();
        formData.append('action', 'check_status');
        formData.append('aula_id', aulaId);
        // Precisamos enviar dia/hora para a API calcular a capacidade da data correta
        formData.append('dia', currentAulaData.day); 
        formData.append('hora', currentAulaData.time);

        fetch('api_booking.php', { method: 'POST', body: formData })
        .then(res => res.json())
        .then(data => {
            // Atualizar Vagas no Modal
            if(capacityElem && data.spots_taken !== undefined) {
                capacityElem.innerHTML = `<i class="fa-solid fa-users mr-1"></i> Vagas: ${data.spots_taken} / ${data.max_spots}`;
                
                if (data.spots_taken >= data.max_spots && !data.is_booked) {
                    // Cheia e não inscrito -> Vermelho
                    capacityElem.className = 'text-sm font-bold text-red-500 border-t border-gray-200 pt-2';
                    updateBtnVisual('full');
                    return; // Sai daqui para não sobrescrever o botão com 'unbooked'
                } else {
                    // Normal -> Azul (ou verde se tiver vagas)
                    capacityElem.className = 'text-sm font-bold text-primary border-t border-gray-200 pt-2';
                }
            }

            if (data.message === 'not_logged_in') updateBtnVisual('login');
            else if (data.is_booked) updateBtnVisual('booked');
            else updateBtnVisual('unbooked');
        });
    }

    function toggleBooking() {
        if(!actionBtn) return;
        actionBtn.disabled = true;
        actionBtn.textContent = "A processar...";
        if(mMsg) mMsg.classList.add('hidden');

        const formData = new FormData();
        formData.append('action', 'toggle');
        formData.append('aula_id', currentAulaData.id);
        formData.append('nome_aula', currentAulaData.name);
        formData.append('dia', currentAulaData.day);
        formData.append('hora', currentAulaData.time);
        formData.append('instrutor', currentAulaData.inst);

        fetch('api_booking.php', { method: 'POST', body: formData })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                updateBtnVisual(data.new_state);
                showMsg(data.message, 'success');
                // Atualizar contador visualmente (simulação rápida)
                if(capacityElem) {
                   // Num caso real recarregarias o check_status, mas aqui podemos deixar assim ou recarregar
                   checkBookingStatus(currentAulaData.id); 
                }
            } else if (data.status === 'limit_error') {
                showMsg(data.message, 'error');
                updateBtnVisual('unbooked');
            } else {
                showMsg(data.message || "Erro desconhecido", 'error');
                actionBtn.disabled = false;
            }
        });
    }

    function showMsg(text, type) {
        if(!mMsg) return;
        mMsg.textContent = text;
        mMsg.classList.remove('hidden');
        if (type === 'success') mMsg.className = 'mt-4 text-green-600 font-bold block bg-green-100 p-2 rounded';
        else mMsg.className = 'mt-4 text-red-600 font-bold block bg-red-100 p-2 rounded';
    }

    function updateBtnVisual(state) {
        if(!actionBtn) return;
        actionBtn.disabled = false; // Habilita por defeito
        
        if (state === 'login') {
            actionBtn.textContent = "Login Necessário";
            actionBtn.className = "w-full btn bg-dark text-white";
            actionBtn.onclick = () => window.location.href = 'login.php';
        } else if (state === 'booked') {
            actionBtn.textContent = "Cancelar Inscrição";
            actionBtn.className = "w-full btn bg-red-600 hover:bg-red-700 text-white border-none";
            actionBtn.onclick = () => toggleBooking();
        } else if (state === 'full') {
            actionBtn.textContent = "Aula Esgotada";
            actionBtn.className = "w-full btn bg-gray-400 text-white cursor-not-allowed border-none";
            actionBtn.disabled = true; // Desabilita o clique
        } else { 
            actionBtn.textContent = "Inscrever na Aula";
            actionBtn.className = "w-full btn bg-primary hover:bg-blue-600 text-white border-none";
            actionBtn.onclick = () => toggleBooking();
        }
    }
});