@section('contact')
        <!-- Contact -->
        <article class="contact" id="contact">
            <div class="container">

                <div class="contact__inner">
                    <div class="footer__title">
                        Contact us
                    </div>

                    <div class="footer__social">

                        <div class="footer__social-item">
                            <div class="footer__social-title">
                                Пошта
                            </div>
    
                            <a class="footer__social-botom" href="mailto:{{ __('content.email') }}">
                                <div class="footer__social-logo">
                                    <img src="{{ asset('img/social/email.svg') }}" alt="email-logo">
                                </div>
                                
                                <div class="footer__social-link">
                                    {{ __('content.email') }}
                                </div>
                            </a>
                        </div>
    
                        <div class="footer__social-item">
                            <div class="footer__social-title">
                                Instagram
                            </div>
    
                            <a class="footer__social-botom" href="{{ __('content.social.instagram.url') }}">
                                <div class="footer__social-logo">
                                    <img src="{{ asset('img/social/insta.svg') }}" alt="instagram-logo">
                                </div>
                                
                                <div class="footer__social-link">
                                    {{ __('content.social.instagram.name') }}
                                </div>
                            </a>
                        </div>
    
                        <div class="footer__social-item">
                            <div class="footer__social-title">
                                Телефон
                            </div>
    
                            <a class="footer__social-botom" href="tel:{{ __('content.phone') }}">
                                <div class="footer__social-logo">
                                    <img src="{{ asset('img/list/list-1.svg') }}" alt="phone-logo">
                                </div>
                                
                                <div class="footer__social-link">
                                    {{ __('content.phone') }}
                                </div>
                            </a>
                        </div>
    
                    </div>
                </div>

            </div>
            <div class="green-footer-circle"></div>
            <div class="pink-footer-circle"></div>
        </article>
@endsection