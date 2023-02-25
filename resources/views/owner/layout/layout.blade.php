<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ Session::get('title') }}</title>
  
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">
     
      <link rel="stylesheet" href="{{url('css/dataTable.css')}}">
      <link rel="stylesheet" href="{{url('css/app.css')}}">
      <link rel="stylesheet" href="{{url('css/magnific-popup.min.css')}}">
     
 
</head>

<body>
   <div class="max-w-[1500px] mx-auto">
   <!-- Header start -->
   @include('owner.layout.owner-header')
   <!-- Header end -->

   <!-- Sidebar start -->
   @include('owner.layout.owner-sidebar')
   <!-- Sidebar end -->

   <!-- Main content start -->
   @yield('content')
   <!-- Main content end -->
   
   <!-- Footer start -->
   @include('owner.layout.owner-footer')
   <!-- Footer end -->
   </div>
 
   <script src="{{url('js/app.js')}}"></script>
   <script src="{{url('front/js/index.js')}}"></script>
   <script src="{{url('js/jquery.min.js')}}"></script>
   <script src="{{url('js/magnific-popup.min.js')}}"></script>
   <script src="{{url('js/jquery.Datatable.js')}}"></script>
   <script src="{{url('owner/js/custom.js')}}"></script>
   <script>
       $('#arkilla-table').DataTable({
         ordering: false,
        stateSave: true,
       });
  
       $('#ongoing-transaction-table').DataTable({
        ordering: false,
        stateSave: true,
       });

       $('.zoomable-image').magnificPopup({
            type: 'image',
            gallery: {
            enabled: true
            }
        });
   </script>

 
</body>

</html>