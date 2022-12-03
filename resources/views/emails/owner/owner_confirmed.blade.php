
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
      <h1 class="text-base font-normal">Dear <span class="font-bold">{{ $name }},</span></h1>
        <p>Your email is confirmed </p>
        <p>Please wait for admin to verify your credentials.</p>
        <p>Thanks and Regards,</p>
      <h2 class="text-base font-normal">Chesca Chen's Car Rental</h2>
    </div>
   </div>
 
   <script src="{{url('js/app.js')}}"></script>
 
  
</body>

</html>