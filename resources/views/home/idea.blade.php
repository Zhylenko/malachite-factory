@section('idea')
        <!-- Idea -->
        <article class="idea" id="about">
            <div class="container">

                <div class="idea__inner">

                    <div class="idea__design">

                        <div class="idea__design-img">
                            <img class="media-img" src="{{ asset('img/gallery/about-img.svg') }}" alt="image">
                        </div>

                        <div class="idea__design-text">
                            <h2 class="text-rotate">neon-neon-neon-neon-neon-neon</h2>
                        </div>

                    </div>

                    <div class="idea__info">

                        <h2 class="idea__info-title">Ідея та дизайн</h2>
                        <div class="idea__info-desc">
                            <h3 class="idea__desc-title">
                                Прийшла в голову дивна ідея? <br>
                                Не проблема! Ми все втілимо в життя.
                            </h3>
                            <p class="idea__desc-suptitle">
                                Залишайте заявку в якій укажіть:
                            </p>
                            <ul class="idea__desc-list">
                                <li class="idea__desc-item">
                                    Своє ім’я 
                                </li>
                                <li class="idea__desc-item">
                                    Особистий номер телефону
                                </li>
                                <li class="idea__desc-item">
                                    Короткий опис замовлення <br>
                                    (текст/малюнок, розмір, приклад   
                                    шрифту, місце розташування)
                                </li>
                            </ul>
                            <p class="idea__desc-attention">
                                <span>*</span> попередньо Ви можете вирахувати приблизну вартість    
                                замовлення
                            </p>
                        </div>

                        <button class="idea__desc-btn modal-price">Розрахувати вартicть</button>

                    </div>

                    <div class="blue-circle">
                    </div>

                </div>

            </div>
        </article>
@endsection