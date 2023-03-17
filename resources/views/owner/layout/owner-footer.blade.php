
<footer class="bg-[#1F1F1F] text-white">
    <div class="grid md:grid-cols-3 p-6 sm:p-14">
        
        
        <div class="grid grid-cols-8 col-span-3  md:col-span-2">
            <div class="hidden sm:block sm:col-span-3 md:col-span-2 text-white">
                <img src="{{url('admins/images/Gcash.svg')}}" alt="">
            </div>
            <div class="col-span-8 sm:col-span-5 md:col-span-6 flex flex-col justify-between px-2 md:pl-6 md:pr-8 max-w-xl">
                <div class="flex  mb-4">
                    <img class="h-24 sm:hidden" src="{{url('admins/images/Gcash.svg')}}" alt="">
                    <h2 class="md:text-[1.5rem] font-bold">Here's where to pay your <br><span class="text-accent-regular">commission fee.</span></h2>
                </div>
               
                <div class="text-white/80 mb-4 text-sm font-semibold grid grid-cols-4 justify-between  ">
                    <p class="col-span-2 md:col-span-1">Account Number: </p> <p class="col-span-2 md:col-span-3">0976-436-2722</p>
                    <p class="col-span-2 md:col-span-1">Account Name: </p> <p class="col-span-2 md:col-span-3">Jasmin Villarta</p>
                </div>
                <p class="text-white/80 text-sm">Note: If you miss 3 payments in a row, your account will be deactivated. Make sure to pay on time.</p>

            </div>
           
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