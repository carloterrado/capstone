@extends('owner.layout.layout')
@section('content')
@if (Session::get('page') === 'dashboard')
    @include('owner.dashboard.owner-dashboard')

@elseif (Session::get('page') === 'booking')
    @include('owner.booking.owner-reserved-cars')

@elseif (Session::get('page') === 'new-booking')
    @include('owner.booking.owner-new-reserved-cars')

@elseif (Session::get('page') === 'approved-booking')
    @include('owner.booking.owner-approved-booking')

@elseif (Session::get('page') === 'cancelled-booking')
    @include('owner.booking.owner-cancelled-cars')

@elseif (Session::get('page') === 'booking-history')
    @include('owner.booking.owner-booking-history')

 @elseif (Session::get('page') === 'cars')
    @include('owner.cars.owner-cars')

 @elseif (Session::get('page') === 'car-request')
    @include('owner.cars.owner-car-request')

 @elseif (Session::get('page') === 'car-declined')
    @include('owner.cars.owner-car-declined')

 @elseif (Session::get('page') === 'profile')
    @include('owner.profile.owner-profile')

@endif
@endsection