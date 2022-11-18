<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Chesca Chen's Car Rental</title>
  
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" /> -->
      <link rel="stylesheet" href="{{url('css/app.css')}}">
   
 
</head>

<body>
   <!-- Header start -->
    @include('admin.layout.header')
   <!-- Header end -->
   <!-- Sidebar start -->
    @include('admin.layout.sidebar')
   <!-- Sidebar end -->

   <!-- Main content start -->
   @yield('content')
   <!-- Main content end -->
   
   <!-- Footer start -->
    @include('admin.layout.footer')
   <!-- Footer end -->
 
   <!-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> -->
   <script src="{{url('js/app.js')}}"></script>
   <script src="{{url('js/jquery.min.js')}}"></script>
   <script src="{{url('front/js/index.js')}}"></script>
   <script src="{{url('admins/js/custom.js')}}"></script>
  
</body>

</html>