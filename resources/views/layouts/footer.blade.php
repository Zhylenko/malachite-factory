@section('footer')
<!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__copyright">
                    <div class="footer__copyright-info">
                        Copyright © {{ date('Y') }}
                        <span>
                            <a class="footer__copyright-link" href="/">Malachite 
                            <span>
                                Factory.
                            </span>
                        </a>
                        </span>
                    </div>
                    <div class="footer__copyright-powered">
                        Powered by
                        <span>
                            <a class="footer__powered-link" href="{{ __('developer.url') }}">{{ __('developer.name') }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="green-footer-circle"></div>
        <div class="pink-footer-circle"></div>
    </footer>
@endsection