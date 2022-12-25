@extends('owner.layout.layout')
@section('content')
@if (Session::get('page') === 'dashboard')
    @include('owner.dashboard.owner-dashboard')

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