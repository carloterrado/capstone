<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Chesca Chen's Car Rental</title>
  
   
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      
   <link rel="stylesheet" href="{{url('css/app.css')}}">
  
      
 
</head>

<body>
   <div class="max-w-[1500px] mx-auto">
   <!-- Header start -->
    @include('front.layout.header')
   <!-- Header end -->

   <!-- Sidebar start -->
    @include('front.layout.sidebar')
   <!-- Sidebar end -->  

   <!-- Main content start -->
   <div class="main-content">
      @yield('content')
   </div>
   <!-- Main content end -->
   
   <!-- Footer start -->
    @include('front.layout.footer')
   <!-- Footer end -->
   </div>
 
   <script src="{{url('js/app.js')}}"></script>
   <script src="{{url('front/js/index.js')}}"></script>
   <script src="{{url('js/jquery.min.js')}}"></script>
   <script src="{{url('front/js/custom.js')}}"></script>
  
</body>

</html>