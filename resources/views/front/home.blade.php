@extends('front.layout.layout')
@section('content')


<?php
        use App\Models\Booking;
        use Illuminate\Support\Facades\Session;
        use Illuminate\Support\Facades\Auth;
        if(auth()->check())
        {
                $carBooked = Booking::where('user_id',Auth::user()->id)->count();
                Session::put('carBooked',$carBooked);
                Session::forget('login_message');
        }
        if(Session::get('page') !== 'login')
        {
              echo  Session::forget('login_message');
        }
?>


@if (Session::get('page') === 'home')
        @include('front.front-home')
       
@elseif (Session::get('page') === 'about')
        @include('front.about.front-about')

@elseif (Session::get('page') === 'frequently-asked-questions')
        @include('front.faqs.faqs')

@elseif (Session::get('page') === 'cars')
        @include('front.cars.front-cars')

@elseif (Session::get('page') === 'reserved-cars')
        @include('front.cars.front-reserved-cars')

@elseif (Session::get('page') === 'contact')
        @include('front.contact.front-contact')

@elseif (Session::get('page') === 'profile')
        @include('front.profile.front-profile')

@elseif (Session::get('page') === 'login')
        @include('front.front-login')

@elseif (Session::get('page') === 'signup')
        @include('front.front-signup')

@elseif (Session::get('page') === 'success')
        @include('front.front-signup-success-page')

@elseif (Session::get('page') === 'forgot-password')
        @include('front.front-forgot-password')

@elseif (Session::get('page') === 'test')
        @include('front.test')
        
@endif

@endsection