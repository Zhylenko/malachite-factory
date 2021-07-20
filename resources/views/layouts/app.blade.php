@include('layouts.header')
@include('layouts.footer')
@include('layouts.scripts')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">

	@yield('styles')
</head>
<body>
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

	@yield('scripts')
</body>
</html>