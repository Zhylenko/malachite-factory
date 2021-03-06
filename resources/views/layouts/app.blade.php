@include('layouts.header')
@include('layouts.footer')
@include('layouts.scripts')
@include('layouts.call-button')

@include('layouts.google-analytics', ['id' => 'G-NC13ZYZXX7'])
@include('layouts.gtm-head', ['id' => 'GTM-59NMKBZ'])
@include('layouts.gtm-body', ['id' => 'GTM-59NMKBZ'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
	<!-- Swiper Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}">

	@yield('styles')

	@include('facebook-pixel::head')
	
	@yield('google-analytics')
	@yield('gtm-head')
</head>
<body>
	@include('facebook-pixel::body')
	@yield('gtm-body')

    @yield('header')

	@hasSection('modals')
	<!-- Modals -->
    <section class="modals">
		@yield('modals')
    </section>
	@endif
	
	<!-- Main Section -->
    <main class="main">
	@yield('content')
	</main>

	@yield('footer')

	@yield('call-button')

	@yield('scripts')
</body>
</html>