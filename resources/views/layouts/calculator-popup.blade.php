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
                    <select class="form-select _req" name="type" required>
                        <option value="" hidden disabled selected>Виберіть тип виробу</option>
                        @foreach($types as $type)
                        <option value="{{ $type->type }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper" id="font-wrapper">
                <div class="form__group select-group">
                    <select class="form-select _req" id="fontInput" name="font" required disabled>
                        <option value="" hidden disabled selected>Виберіть шрифт</option>
                        @foreach($fonts as $font)
                        <option value="{{ $font->font }}">{{ $font->font }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper" id="file-wrapper">
                <div class="form__group">
                    <div class="file">
                        <div class="file__item">
                            <input class="file__input _req" id="formImage" size="1" accept=".png, .jpeg, .jpg, .bmp, .gif, .svg" type="file" name="image" disabled>
                            <button class="file__button" type="button">Вибрати файл</button>
                        </div>
                    </div>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper" id="text-wrapper">
                <div class="form__group">
                    <input class="modal-input _req" id="textInput" type="text" name="message" autocomplete="off" disabled required/>
                    <label class="label-name" for="message">
                      <span class="label__content">Текст</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group">
                    <input class="modal-input _req" type="number" name="width" min="0" autocomplete="off" required />
                    <label class="label-name" for="width">
                        <span class="label__content">Ширина, см</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group">
                    <input class="modal-input _req" type="number" name="height" min="0" autocomplete="off" required />
                    <label class="label-name" for="height">
                        <span class="label__content">Висота, см</span>
                    </label>
                </div>
                <div class="form-error"></div>
            </div>

            <div class="input-wrapper">
                <div class="form__group select-group">
                    <select class="form-select _req" name="place" required>
                        <option value="" hidden disabled selected>Виберіть місце</option>
                        @foreach($places as $place)
                        <option value="{{ $place->place }}">{{ $place->place }}</option>
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