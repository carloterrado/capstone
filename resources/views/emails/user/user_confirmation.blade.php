
   <div class="max-w-[1500px] mx-auto">
      <div class="h-screen grid place-items-center bg-white">
        <p class="text-base"> Dear <b class="font-bold">{{ $name }}, </b></p> 
       <p> Please click on below link to confirm your account: <span><a class="font-bold"  href="{{url('confirm/'.$code)}}">{{ $email }}</a></span> </p>
       <p> Thanks and Regards,</p>
        <p class="text-base">Chesca Chen's Car Rental</p>
      </div>
   </div>
