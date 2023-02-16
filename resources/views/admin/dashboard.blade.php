@extends('admin.layout.layout')
@section('content')
 @if (Session::get('page') === 'dashboard')
    @include('admin.dashboard.admin-dashboard')

@elseif (Session::get('page') === 'booking')
    @include('admin.booking.admin-reserved-cars')

@elseif (Session::get('page') === 'new-booking')
    @include('admin.booking.admin-new-reserved-cars')

@elseif (Session::get('page') === 'approved-booking')
    @include('admin.booking.admin-approved-booking')

@elseif (Session::get('page') === 'cancelled-booking')
    @include('admin.booking.admin-cancelled-cars')

@elseif (Session::get('page') === 'booking-history')
    @include('admin.booking.admin-booking-history')

@elseif (Session::get('page') === 'commission')
    @include('admin.booking.admin-commission')
     
 @elseif (Session::get('page') === 'profile')
    @include('admin.profile.admin-profile')

 @elseif (Session::get('page') === 'car-types')
    @include('admin.cars.admin-car-types')

 @elseif (Session::get('page') === 'cars')
    @include('admin.cars.admin-cars')

 @elseif (Session::get('page') === 'owner-cars')
    @include('admin.cars.admin-owner-cars')

 @elseif (Session::get('page') === 'car-request')
    @include('admin.cars.admin-car-request')

 @elseif (Session::get('page') === 'car-declined')
    @include('admin.cars.admin-car-declined')

 @elseif (Session::get('page') === 'all-admins')
    @include('admin.admins.admin-all-admins')

 @elseif (Session::get('page') === 'admins')
    @include('admin.admins.admin-admins')

 @elseif (Session::get('page') === 'staff')
    @include('admin.admins.admin-staff')

 @elseif (Session::get('page') === 'owner')
    @include('admin.admins.admin-car-owner')

 @elseif (Session::get('page') === 'new-owners')
    @include('admin.admins.admin-new-owners')

 @elseif (Session::get('page') === 'declined-owners')
    @include('admin.admins.admin-declined-owners')

 @elseif (Session::get('page') === 'users')
    @include('admin.users.admin-users')
    
 @elseif (Session::get('page') === 'unverified-users')
    @include('admin.users.admin-unverified-users')
 @endif
@endsection