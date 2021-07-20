@section('contact')
        <!-- Booking -->
        <article class="booking" id="booking">
            <div class="container">
                <div class="booking__inner">
                    <div class="booking__title-wrapper">
                        <div class="booking__title-group">
                            <div class="booking__rect-left"></div>
                            <div class="booking__title-text">Як замовити?</div>
                            <div class="booking__rect-right"></div>
                        </div>
                    </div>

                    <ul class="booking__list">
                        <li class="booking__list-item">
                            <div class="booking__list-logo">
                                <img src="{{ asset('img/list/list-1.svg') }}" alt="logo">
                            </div>
                            <div class="booking__list-title">Заявка</div>
                            <div class="booking__list-text">Натисніть нижче кнопку “Замовити” і введіть усю інформацію, яка потребується для подальшого зв’язку та виготовлення замовлення.</div>
                        </li>

                        <li class="booking__list-item">
                            <div class="booking__list-logo">
                                <img src="{{ asset('img/list/list-2.svg') }}" alt="logo">
                            </div>
                            <div class="booking__list-title">Оплата</div>
                            <div class="booking__list-text">Перед початком виготовлення сплачується 50% від вартості виробу. Друга частина суми доплачується перед відправкою або при отриманні товару. Оплата здіснюється на картку ПриватБанку.</div>
                        </li>

                        <li class="booking__list-item">
                            <div class="booking__list-logo">
                                <img src="{{ asset('img/list/list-3.svg') }}" alt="logo">
                            </div>
                            <div class="booking__list-title">Виготовлення</div>
                            <div class="booking__list-text">Використовуються якісні, перевірені матеріали.Будь-який текст, логотип чи малюнок виготовляються від 3 до 7 робочих днів, залежить від складності виробу.</div>
                        </li>

                        <li class="booking__list-item">
                            <div class="booking__list-logo">
                                <img src="{{ asset('img/list/list-4.svg') }}" alt="logo">
                            </div>
                            <div class="booking__list-title">Доставка</div>
                            <div class="booking__list-text">Коли виріб повністю готовий, він проходить перевірку на працездатність. І тільки після підтвердження якості формується відправка замовнику.Доставка здійснюється Новою Поштою.</div>
                        </li>
                    </ul>

                    <div class="booking__btn">
                        <a class="booking__link purple-btn modal-booking" href="#">Замовити</a>
                    </div>
                    
                </div>
            </div>
            <div class="red-circle"></div>
        </article>
@endsection