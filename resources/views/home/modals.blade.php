@include('layouts.contact-popup')
@include('layouts.calculator-popup', ['types' => $types, 'fonts' => $fonts, 'places' => $places])

@section('modals')
    @yield('contact-popup')
    @yield('calculator-popup')
@endsection