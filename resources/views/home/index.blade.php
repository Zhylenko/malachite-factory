@extends('layouts.app')

@section('title', 'Malachite Factory | Виготовлення неонової продукції')

@section('styles')
@endsection

@include('home.main')
@include('home.about')
@include('home.portfolio', ['works' => $works])
@include('home.contact')

@section('content')

@endsection