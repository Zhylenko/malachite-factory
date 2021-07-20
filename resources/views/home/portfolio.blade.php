@section('portfolio')
    <!-- Portfolio -->
        <article class="portfolio" id="portfolio">
            <div class="container">

                <div class="portfolio__inner">
                    <div class="portfolio__title">portfolio</div>

                    <div class="portfolio__swiper">

                        <div class="portfolio__container swiper-container">
    
                            <div class="portfolio__slider swiper-wrapper">
                                @foreach($works as $work)    
                                <div class="portfolio__slide swiper-slide">
                                    <div class="porfolio__slider-image">
                                        <img src="{{ asset('img/works/' . $work->image . '') }}" alt="image">

                                        <div class="portfolio__block">
                                            <div class="portfolio__block-title">
                                                {{ $work->description }}
                                            </div>
                                            <a class="portfolio__block-social" href="{{ $work->url }}">
                                                <img src="{{ asset('img/insta.svg') }}" alt="instagram-logo">
                                            </a>
                                            <div class="portfolio__block-price">
                                                {{ $work->price }} ₴
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach    
                            </div>
    
                        </div>
    
                        <div class="prev-btn">
                            <img src="{{ asset('img/images/arrow.svg') }}" alt="arrow">
                        </div>
                        <div class="next-btn">
                            <img src="{{ asset('img/images/arrow.svg') }}" alt="arrow">
                        </div>
    
                    </div>

                                    
                    <div class="portfolio__btn">
                        <a class="portfolio__btn-link" href="{{ __('content.social.instagram.url') }}">Бiльше</a>
                    </div>
    
                </div>

            </div>

            <div class="green-circle"></div>

        </article>
@endsection