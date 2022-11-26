@extends('front.layout')
@section('content')

@if (Session::get('page') === 'home')

        <x-home />

@elseif (Session::get('page') === 'about')

        <x-about />

@elseif (Session::get('page') === 'cars')

        <x-cars />

@elseif (Session::get('page') === 'contact')

        <x-contact />

@elseif (Session::get('page') === 'login')

        <x-front-login />

@elseif (Session::get('page') === 'signup')

        <x-front-signup />
@endif

@endsection