
<footer class="bg-[#1F1F1F] text-white">
    <div class="grid md:grid-cols-3 p-6 sm:p-14">
        <div class="text-center md:text-left mb-12 md:mb-0">
            <h3 class=" lg:text-[1.5rem] uppercase font-bold text-accent-regular">Socials</h3>
            <div class="grid gap-12 mt-4">   
                <!-- <p class="text-xs sm:text-base">Lorem ipsum dolor sit amet <br>
                 consectetur adipisicing elit.</p> -->
                <div class="mt-auto grid grid-cols-4  md:block text-center md:text-left">
                    
                        
                        <a href="https://www.facebook.com/paulines.general.merchandize" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 col-span-1 inline mr-4 justify-self-center" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z"/></svg></a>
                        <a href="mailto:cchcarrentals@gmail.com" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 col-span-1 inline mr-4 justify-self-center" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M4 20q-.825 0-1.412-.587Q2 18.825 2 18V6q0-.825.588-1.412Q3.175 4 4 4h16q.825 0 1.413.588Q22 5.175 22 6v12q0 .825-.587 1.413Q20.825 20 20 20Zm8-7.175q.125 0 .262-.038q.138-.037.263-.112L19.6 8.25q.2-.125.3-.312q.1-.188.1-.413q0-.5-.425-.75T18.7 6.8L12 11L5.3 6.8q-.45-.275-.875-.013Q4 7.05 4 7.525q0 .25.1.437q.1.188.3.288l7.075 4.425q.125.075.263.112q.137.038.262.038Z"/></svg></a>
                </div>
            </div>
        </div>
        <div class="text-center md:text-left mb-12 md:mb-0">
            <h3 class="lg:text-[1.5rem] uppercase font-bold text-accent-regular">Explore</h3>
            <ul class="mt-4 grid md:gap-4 grid-cols-4 md:grid-cols-1 ">
                <li class="text-center md:text-left border-r-2 md:border-r-0"><a href="{{url('/')}}" class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold home text-xs sm:text-base">Home</a></li>
                <li class="text-center md:text-left border-r-2 md:border-r-0"><a href="{{url('/cars')}}"  class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold cars text-xs sm:text-base">Cars</a></li>
                <li class="text-center md:text-left border-r-2 md:border-r-0"><a href="{{url('/about')}}" class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold about text-xs sm:text-base">About</a></li>
                <li class="text-center md:text-left"><a href="{{url('/contact')}}" class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold contact text-xs sm:text-base">Contact</a></li>
            </ul>
        </div>
        <div class="text-center md:text-left">
            <h3 class="lg:text-[1.5rem] uppercase font-bold text-accent-regular">Contact us</h3>
            <p class="mt-4 whitespace-nowrap text-xs sm:text-base "><span class="font-bold">Address </span>Blk. A 11 Lot 3 Luzviminda 1, <br>
            Dasmariñas Cavite.</p>
           <ul class="mt-4 grid gap-4 text-xs sm:text-base">
                
                <li class="flex gap-2 justify-center md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M10.5 20h3q.2 0 .35-.15q.15-.15.15-.35q0-.2-.15-.35q-.15-.15-.35-.15h-3q-.2 0-.35.15q-.15.15-.15.35q0 .2.15.35q.15.15.35.15ZM7 23q-.825 0-1.412-.587Q5 21.825 5 21V3q0-.825.588-1.413Q6.175 1 7 1h10q.825 0 1.413.587Q19 2.175 19 3v18q0 .825-.587 1.413Q17.825 23 17 23Zm0-7h10V6H7Z"/></svg><span>09662568536</span>
                </li>
                
            
           </ul>
        </div>

    </div>
    <?php 
    use Carbon\Carbon;
    $now = Carbon::now();
    $year = $now->year;
     ?>
    <div class="p-6 sm:px-14 bg-black">
        <p class="text-center sm:text-left text-xs sm:text-base">{{$year}} All Rights Reserve <a href="javascript:void(0)" data-modal-toggle="terms-and-conditions"> <span class="text-accent-regular whitespace-nowrap hover:underline">Terms of Use</span></a></p>
    </div>
    @include('front.terms-and-conditions')
</footer>