@include('layouts.navbar')

@section('header')
    <!-- Header -->
    <header class="header" id="home">
        <div class="container">
            <nav class="menu">
                <ul class="menu__list">

                    @yield('navbar')
                    
                    <ul class="menu__logo">
                        <li class="menu__logo-item">
                            <a class="menu__logo-link" href="{{ Route('index') }}">
                                <img src="{{ asset('img/logo-png.png') }}" alt="logo">
                            </a>
                        </li>
                    </ul>

                </ul>

                <div class="burger" id="burger">
                    <div class="burger-line"></div>
                </div>
            </nav>
        </div>
    </header>
@endsection