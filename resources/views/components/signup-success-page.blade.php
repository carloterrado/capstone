<div class="grid md:grid-cols-2 bg-white relative p-4 sm:p-8 md:p-16  min-h-[calc(100vh-80px)] md:max-h-[calc(100vh-88px)]">
    <div class=" sm:h-[calc(100vh-144px)] md:h-[calc(100vh-208px)] md:flex justify-end  w-full  hidden" >
        <img class="h-full" src="{{url('front/images/successpage.jpg')}}" alt="success page picture">
    </div>
    <div class="h-[calc(100vh-112px)] sm:h-[calc(100vh-144px)] md:h-[calc(100vh-208px)]  z-10 bg-white/90 text-center flex flex-col justify-center items-center p-8 md:pr-[25%] space-y-4 ">
        <h1 class="uppercase text-xl sm:text-3xl">Success</h1>
        <i class='bx bxs-check-circle text-accent-regular text-3xl sm:text-5xl'></i>
        <p class="text-sm sm:text-base">{{Session::get('message')}}</p>

    </div>
    
</div>