@extends('admin.layout')
@section('content')
 @if (Session::get('page') === 'dashboard')
    @include('admin.admin-dashboard')
     
 @elseif (Session::get('page') === 'cars')
    @include('admin.admin-cars')

 @elseif (Session::get('page') === 'owner-cars')
    @include('admin.admin-owner-cars')

 @elseif (Session::get('page') === 'car-request')
    @include('admin.admin-car-request')

 @elseif (Session::get('page') === 'car-declined')
    @include('admin.admin-car-declined')

 @elseif (Session::get('page') === 'all-admins')
    @include('admin.admin-all-admins')

 @elseif (Session::get('page') === 'admins')
    @include('admin.admin-admins')

 @elseif (Session::get('page') === 'staff')
    @include('admin.admin-staff')

 @elseif (Session::get('page') === 'owner')
    @include('admin.admin-car-owner')

 @elseif (Session::get('page') === 'new-owners')
    @include('admin.admin-new-owners')

 @elseif (Session::get('page') === 'declined-owners')
    @include('admin.admin-declined-owners')

 @elseif (Session::get('page') === 'users')
    @include('admin.admin-users')
    
 @elseif (Session::get('page') === 'unverified-users')
    @include('admin.admin-unverified-users')
 @endif
@endsection