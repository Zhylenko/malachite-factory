@section('navbar')
                    <ul class="menu__wrapper">
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#about') }}">Про нас</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#portfolio') }}">Портфолiо</a>
                        </li>
                        <li class="empty">
                            <div class="empty-div"></div>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#booking') }}">Як замовити?</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#contact') }}">Зв’язатися</a>
                        </li>
                    </ul>
@endsection