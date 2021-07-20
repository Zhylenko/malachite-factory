@extends('layouts.app')

@include('home.modals', ['types' => $types, 'fonts' => $fonts, 'places' => $places])
@include('home.main')
@include('home.idea')
@include('home.portfolio', ['works' => $works])
@include('home.order')
@include('home.contact')

@section('title', 'Malachite Factory | Виготовлення неонової продукції')

@section('styles')
@endsection

@section('content')
    @yield('main')
    @yield('idea')
    @yield('portfolio')
    @yield('order')
    @yield('contact')
@endsection