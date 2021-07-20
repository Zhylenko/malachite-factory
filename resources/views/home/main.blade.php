@section('main')
        <!-- Home -->
        <article class="top">
            <div class="container">

                <div class="main__content">
    
                    <div class="main__info">
                        
                        <div class="main__info-title">
                            Створюємо <span>неоновий</span> декор під замовлення
                        </div>
    
                        <div class="main__info-subtitle">
                            <p class="main__info-paragraph">
                                MALACHITE FACTORY - провідна компанія <br>дизайнер-виробник неонового декору та рекламних вивісок. Ми спеціалізуємося на виготовленні світлодіодних лед неонових предметів інтер’єру, а саме: текстів, логотипів та малюнків на замовлення. 
                            </p>
                            <p class="main__info-paragraph">
                                Замовляйте у нас свою фантазію, яку ми перетворимо у найякіснішу реальність!
                            </p>
                        </div>
    
                        <div class="main__info-buttons">
                            <button class="main__info-btn purple-btn modal-price">
                                Розрахувати вартість
                            </button>
    
                            <button class="main__info-btn purple-btn modal-booking">
                                Замовити
                            </button>
                        </div>
                    </div>
    
                    <div class="main__image">
                        <img class="media-img" src="{{ asset('img/gallery/main-img.svg') }}" alt="image">
                    </div>
    
                </div>
    
                <div class="purple-circle"></div>
    
                <div class="main__arrow">
                    <a class="main__arrow-link" href="#about">
                        <img src="{{ asset('img/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
    
            </div>
        </article>
@endsection