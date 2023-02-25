<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{Session::get('title')}}</title>

   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="{{url('css/app.css')}}">
   <link rel="stylesheet" href="{{url('css/date-picker.css')}}">
   <link rel="stylesheet" href="{{url('css/dataTable.css')}}">
   <link rel="stylesheet" href="{{url('css/magnific-popup.min.css')}}">
   
   <!-- <link rel="stylesheet" href="{{url('css/datepicker-main.css')}}"> -->
  
 
</head>

<body>
   <div class="max-w-[1500px] mx-auto">
   <!-- Header start -->
   @include('front.layout.front-header')
   <!-- Header end -->

   <!-- Sidebar start -->
   @include('front.layout.front-sidebar')
   <!-- Sidebar end -->  

   <!-- Main content start -->
   <div id="main" class="main-content">
      @yield('content')
   </div>

   <!-- Main content end -->
   
   <!-- Footer start -->
   @include('front.layout.front-footer')
   <!-- Footer end -->
   </div>
   
 
   
   <script src="{{url('js/app.js')}}"></script>
   <script src="{{url('front/js/index.js')}}"></script>
   <script src="{{url('js/jquery.min.js')}}"></script>
   <script src="{{url('front/js/custom.js')}}"></script>
   <script src="{{url('js/magnific-popup.min.js')}}"></script>
   <script src="{{url('js/jquery.Datatable.js')}}"></script>
  -->
   <script>
       $('#ongoing-transaction-table').DataTable({
        ordering: false,
        stateSave: true,
      
      
       });
       $('#history-transaction-table').DataTable({
      //   ordering: false,
        stateSave: true,
        order: [[0, 'desc']],
       
       });
       $('.zoomable-image').magnificPopup({
            type: 'image',
            gallery: {
            enabled: false
            }
        });
     
   


   </script>
   
  
</body>

</html>