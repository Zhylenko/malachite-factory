@section('contact-popup')
        <!-- Contact -->
        <form class="modal__form" id="contact-form" action="{{ Route('contact.send') }}" novalidate>

            <div class="modal__top">
                <div class="modal__top-title">
                    ВАША ЗАЯВКА
                </div>
                <button class="modal__top-close" type="button">
                    <div></div>
                    <div></div>
                </button>
            </div>

            <div class="input-wrapper">
                <div class="form__group">
                    <input class="modal-input" type="text" name="name" autocomplete="off" required />
                    <label class="label-name" for="name">
                        <span class="label__content">Ім’я</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group">
                    <input class="modal-input" type="tel" name="phone" autocomplete="off" required />
                    <label class="label-name" for="phone">
                        <span class="label__content">Телефон</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper text-wrapper">
                <div class="form__group text-group">
                    <textarea rows="1" class="textarea" name="message" id="textarea"></textarea>
                    <label class="label-name" for="phone">
                        <span class="label__content">Якою ви бачите свою вивіску?</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="form__btn-group">
                <button class="form-btn" type="submit">Надiслати</button>
            </div>

        </form>
@endsection