@extends('front.layout')
@section('content')

@if (Session::get('page') === 'home')
        @include('front.front-home')
       
@elseif (Session::get('page') === 'about')
        @include('front.front-about')

@elseif (Session::get('page') === 'cars')
        @include('front.front-cars')

@elseif (Session::get('page') === 'contact')
        @include('front.front-contact')

@elseif (Session::get('page') === 'profile')
        @include('front.front-profile')

@elseif (Session::get('page') === 'login')
        @include('front.front-login')

@elseif (Session::get('page') === 'signup')
        @include('front.front-signup')

@elseif (Session::get('page') === 'success')
        @include('front.front-signup-success-page')

@elseif (Session::get('page') === 'forgot-password')
        @include('front.front-forgot-password')
        
@endif

@endsection