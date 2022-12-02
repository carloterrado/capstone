@extends('owner.layout')
@section('content')
@if (Session::get('page') === 'dashboard')
    @include('owner.owner-dashboard')

 @elseif (Session::get('page') === 'cars')
    @include('owner.owner-cars')

 @elseif (Session::get('page') === 'car-request')
    @include('owner.owner-car-request')

 @elseif (Session::get('page') === 'car-declined')
    @include('owner.owner-car-declined')

@endif
@endsection