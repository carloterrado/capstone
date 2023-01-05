<div class="grid md:grid-cols-2 bg-white relative p-4 sm:p-8 md:p-16  min-h-[calc(100vh-80px)] md:max-h-[calc(100vh-88px)]">
    <div class=" sm:h-[calc(100vh-144px)] md:h-[calc(100vh-208px)] md:flex justify-end  w-full  hidden" >
        <img class="h-full" src="{{url('front/images/successpage.jpg')}}" alt="success page picture">
    </div>
    <div class="h-[calc(100vh-112px)] sm:h-[calc(100vh-144px)] md:h-[calc(100vh-208px)]  z-10 bg-white/90 text-center flex flex-col justify-center items-center p-8 md:pr-[25%] space-y-4 ">
        <h1 class="uppercase text-xl sm:text-3xl">Success</h1>
        <svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>
        <p class="text-sm sm:text-base">{{Session::get('message')}}</p>

    </div>
    
</div>