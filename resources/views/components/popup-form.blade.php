<section class="popup-section">
    <div class="popup-overflow">
        <div class="popup-bg"></div>
        <div class="popup-container">
            <div class="close-popup-btn" onclick="closePopup()">
                <div class="icon-close w-embed"></div>
            </div>

            <div class="popup-form-grid">
                <div class="form-header-block">
                    <div class="form-heading">Заявка на внедрение</div>
                    <div class="standart-text center-aling">Заполните свои данные и мы свяжемся с вами по вопросам внедрения данного AI агента в ваш бизнес.</div>
                </div>

                <div class="popup-form-block w-form">
                    <form method="POST" action="{{ route('requests.store') }}" class="form-block">
                        @csrf
                        <input type="hidden" name="request_type" value="разработка">
{{--                        <input type="hidden" name="capsule_id" value="{{$capsule->id}}">--}}

                        <div class="form-row-grid">
                            <div class="field-block">
                                <div class="input-text">Имя</div>
                                <input class="text-field w-input" maxlength="256" name="user_name" placeholder="Введите имя" type="text" required>
                            </div>

                            <div class="field-block">
                                <div class="input-text">Номер телефона</div>
                                <input class="text-field w-input" maxlength="18" name="phone" placeholder="+7 (___) ___-__-__" type="text" id="popupPhoneInput" required>
                            </div>

                            <div class="field-block">
                                <div class="input-text">Что бы вы хотели автоматизировать с помощью AI?</div>
                                <textarea name="message" placeholder="Описание" maxlength="5000" class="text-field message-field w-input" style="resize: none"></textarea>
                            </div>
                        </div>
                        <input type="submit" class="form-button w-button" value="Оставить заявку">
                    </form>

                    <div class="success-messagge w-form-done">
                        <div>Спасибо! Ваша заявка отправлена.</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Что-то пошло не так. Попробуйте ещё раз.</div>
                    </div>
                </div>
            </div>

            <div class="close-popup-btn" onclick="closePopup()">
                <div class="icon-close w-embed">
                    <!-- крестик -->
                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <rect fill="none" height="100%" width="100%"></rect>
                        <line fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="200" x2="56" y1="56" y2="200"></line>
                        <line fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="200" x2="56" y1="200" y2="56"></line>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const popupPhoneInput = document.getElementById('popupPhoneInput');

        popupPhoneInput.addEventListener('input', function () {
            let x = this.value.replace(/\D/g, '').slice(1);
            let formatted = '+7';

            if (x.length > 0) formatted += ' (' + x.substring(0, 3);
            if (x.length >= 4) formatted += ') ' + x.substring(3, 6);
            if (x.length >= 7) formatted += '-' + x.substring(6, 8);
            if (x.length >= 9) formatted += '-' + x.substring(8, 10);

            this.value = formatted;
        });
    });
</script>

<script>
    function closePopup() {
        document.querySelectorAll('.popap-show').forEach(el => {
            el.classList.remove('popap-show');
        });
    }
</script>

<script>
    $(document).ready(function () {
        $('.form-block').on('submit', function (e) {
            e.preventDefault();

            let $form = $(this);
            let formData = $form.serialize();

            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function () {
                    $form.hide();
                    $('.w-form-done').fadeIn();
                },
                error: function () {
                    $('.w-form-fail').fadeIn();
                }
            });
        });
    });
</script>

