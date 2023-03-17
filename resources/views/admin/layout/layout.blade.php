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
      <link rel="stylesheet" href="{{url('css/app.css')}}">
      <link rel="stylesheet" href="{{url('css/dataTable.css')}}">
      <link rel="stylesheet" href="{{url('css/date-picker-admin.css')}}">
      <link rel="stylesheet" href="{{url('css/magnific-popup.min.css')}}">
   
    
   
 
</head>

<body>
    <div class="max-w-[1500px] mx-auto">
    <!-- Header start -->
    @include('admin.layout.admin-header')
   <!-- Header end -->

   <!-- Sidebar start -->
   @include('admin.layout.admin-sidebar')
   <!-- Sidebar end -->

   <!-- Main content start -->
   @yield('content')
   <!-- Main content end -->
   
   <!-- Footer start -->
   @include('admin.layout.admin-footer')
   <!-- Footer end -->
    </div>
    
   <script src="{{url('js/app.js')}}"></script>
   <script src="{{url('js/jquery.min.js')}}"></script>
   <script src="{{url('front/js/index.js')}}"></script>
   <script src="{{url('js/magnific-popup.min.js')}}"></script>
   <script src="{{url('js/jquery.Datatable.js')}}"></script>
   <script src="{{url('admins/js/custom.js')}}"></script>
   <script src="{{url('js/fecha.min.js')}}"></script>
    <script src="{{url('js/datepicker.js')}}"></script> 
   <script>
    $('#arkilla-table').DataTable({
            stateSave: true,
            order: [[0, 'desc']],
        });
   $('#ongoing-transaction-table').DataTable({
            stateSave: true,
            order: [[0, 'desc']],
        });

    // VIEW BOOKING CALENDAR
    //   CAR BOOKING CALENDAR
    $('.date-input').each(function() {
            var input1 = $(this)[0];
            
            var data = $(input1).data('bookdates');
            var bookdates = [];
    
            for (let i = 0; i < data.length; i++) {
                if(data[i].status === 'approved' || data[i].status === 'ongoing')
                {
                    var starts = new Date(data[i].start_date);
                    var ends = new Date(data[i].end_date);
                    var set = new Date(data[0].end_date);
                    set.setDate(set.getDate() + 1);
                
                    while (starts <= ends) {
                        bookdates.push(fecha.format(new Date(starts), 'YYYY-MM-DD'));
                        starts.setDate(starts.getDate() + 1);   
                    }
                }
            }
            var picker = new Datepicker(input1, {
                inline: true,
                autoClose: false,
                disabledDates: bookdates,
                // onSelectRange: function() {
                //     console.log(input1.value)
                // }
               
                
            });
            
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