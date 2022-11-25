@extends('front.layout')
@section('content')
<div id="front-signup" class="pages hidden">
    <x-front-signup />
</div>
<div id="about" class="pages">
    <x-about />
</div>
<div id="home" class="pages hidden">
    <x-home />
</div>
<div id="cars" class="pages hidden">
    <x-cars />
</div>
<div id="contact" class="pages hidden">
    <x-contact />
</div>
<div id="front-login" class="pages hidden">
    <x-front-login />
</div>
@endsection  
