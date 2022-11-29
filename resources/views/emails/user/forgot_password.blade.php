<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{Session::get('title')}}</title>

   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="{{url('css/app.css')}}">
      
 
</head>

<body>
   <div class="max-w-[1500px] mx-auto">
      <div class="h-screen grid place-items-center bg-white">
        <p class="text-base"> Dear <b class="font-bold">{{ $email }}, </b></p> 
       <p> We provided you a temporary password: <b>{{ $code }}</b> </p>
       <p> Thanks and Regards,</p>
        <p class="text-base">Chesca Chen's Car Rental</p>
      </div>
   </div>
 
   <script src="{{url('js/app.js')}}"></script>
 
  
</body>

</html>