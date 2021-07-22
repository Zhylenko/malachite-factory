@section('calculator-popup')
        <!-- Calculate -->
        <form class="modal__form" id="calculate-form" action="{{ Route('calculator.send') }}" novalidate>

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
                    <input class="modal-input _req" type="text" name="name" autocomplete="off" required />
                    <label class="label-name" for="name">
                        <span class="label__content">Ім’я</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group">
                    <input class="modal-input _req" type="tel" name="phone" autocomplete="off" required />
                    <label class="label-name" for="phone">
                        <span class="label__content">Телефон</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group select-group">
                    <select class="form-select _req" name="picture">
                        <option selected hidden>Виберіть тип виробу</option>
                        @foreach($types as $type)
                        <option value="{{ $type->name }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group">
                    <input class="modal-input _req" type="text" name="width" autocomplete="off" required />
                    <label class="label-name" for="width">
                        <span class="label__content">Ширина, см</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group">
                    <input class="modal-input _req" type="text" name="height" autocomplete="off" required />
                    <label class="label-name" for="height">
                        <span class="label__content">Висота, см</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group select-group">
                    <select class="form-select _req" name="fonts">
                        <option selected hidden>Виберіть шрифт</option>
                        @foreach($fonts as $font)
                        <option value="{{ $font->name }}">{{ $font->font }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group select-group">
                    <select class="form-select _req" name="place">
                        <option selected hidden>Виберіть місце</option>
                        @foreach($places as $place)
                        <option value="{{ $place->name }}">{{ $place->place }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="form__btn-group">
                <button class="form-btn" type="submit">Надiслати</button>
            </div>

        </form>
@endsection