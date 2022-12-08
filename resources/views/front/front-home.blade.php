<main id="home">
    <!-- Hero section -->
    <section class="relative text-white h-[100vmin] md:h-[calc(100vmin-5.5rem)]">
        <img class="w-full h-full object-cover" src="{{url('front/images/red-car-home.jpg')}}" alt="hero image">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="flex flex-col gap-4 w-auto sm:w-1/2  absolute top-1/3 -translate-y-1/3 left-8 md:left-32 font-[800] font-['Montserrat',sans-serif]">
            <h1 class="text-[2rem] sm:text-[3rem] lg:text-[4.5rem] leading-none font-['Roboto',sans-serif] font-[600] ">Welcome</h1>
            <h2 class="text-[.8rem] sm:text-[1.2rem] leading-6">Find the best deal on rental cars <br> and drive to your destination</h2>
            <p class="text-[.8rem] sm:text-[1rem] font-[400]">Sedan cars at low cost, <br> starts at ₱1500.00</p>
            <a href="{{url('/cars')}}"><button class="btn-1 bg-accent-regular uppercase border-none w-[fit-content] sm:mt-6 text-[.7rem] lg:text-[1rem]">Find a car</button></a>
        </div>
    </section>

    <!-- Ride with our service section -->
    <section class="bg-white p-6 sm:p-14 flex flex-col gap-6 sm:gap-24 justify-between">
        <div class="font-bold">
            <p class="text-center text-accent-regular text-[1.2rem] lg:text-[1.75rem]">Ride with</p>
            <h2 class="text-center text-[1.5rem] lg:text-[2.5rem] uppercase leading-none">Our Services</h2>
        </div>
        <div class="flex justify-center flex-wrap sm:flex-nowrap text-center">
            <div class="max-w-[400px] py-6 sm:px-6 border-t border-t-accent-regular sm:border-t-0 sm:border-r sm:border-r-accent-regular">
                <i class='bx bxs-truck text-accent-regular text-[4rem]'></i>
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Service 1</h3>
                <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
            </div>
            <div class="max-w-[400px] py-6 sm:px-6 border-t border-t-accent-regular sm:border-t-0">
                <i class='bx bxs-truck text-accent-regular text-[4rem]'></i>
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Service 2</h3>
                <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
            </div>
            <div class="max-w-[400px] pt-6 lg:px-6 border-t border-t-accent-regular sm:border-t-0  sm:border-l sm:border-l-accent-regular">
                <i class='bx bxs-truck text-accent-regular text-[4rem]'></i>
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Service 3</h3>
                <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
            </div>
        </div>
    </section>

    <!-- How to rent a car section -->
    <section class="bg-[#F5F5F5] px-6 pb-14 sm:p-14 gap-4 grid sm:grid-cols-2 lg:grid-cols-4">
        <div class="py-10  sm:h-[400px] sm:flex sm:flex-col sm:justify-end">
            <p class="text-accent-regular text-[1.2rem] font-medium whitespace-nowrap">How to rent a Car?</p>
            <p class="whitespace-nowrap sm:mb-8 font-bold text-[1.2rem] sm:text-[1.75rem]">Experience with <br>
            our car rental <br>
            <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/2 before:bg-accent-regular">offer</span></p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">01</h2>
            <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i>
            <h3 class="font-bold mb-3">Find a car</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">02</h2>
            <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i>
            <h3 class="font-bold mb-3">Pick a car</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">03</h2>
            <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i>
            <h3 class="font-bold mb-3">Book a car</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
        </div>
    </section>

    <!-- Become a car owner section -->
    <section class="bg-white p-6 sm:p-14 grid gap-8 md:grid-cols-2">
        <div class="sm:h-[fit-content] relative">
            <div class="mb-16 lg:-translate-y-6">
                <h2 class="text-[1.5rem] sm:text-[2rem] lg:text-[3rem] font-bold whitespace-nowrap ">Lorem ipsum <br>
                 dolor sit amet, <br>
                  <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular">consectetur.</span> </h2>
            </div>
            <div>
                <ul class="grid sm:grid-cols-2 gap-y-8 gap-x-4">
                    <li class="flex gap-2 items-center"><i class='bx bxs-check-circle  text-[1.5rem] md:text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center"><i class='bx bxs-check-circle  text-[1.5rem] md:text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center"><i class='bx bxs-check-circle  text-[1.5rem] md:text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center"><i class='bx bxs-check-circle  text-[1.5rem] md:text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center"><i class='bx bxs-check-circle  text-[1.5rem] md:text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center"><i class='bx bxs-check-circle  text-[1.5rem] md:text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                </ul>
            </div>
        </div>
        <div class="max-h-[500px] relative">
            <img class="w-full h-full object-cover" src="{{url('front/images/become.jpg')}}" alt="">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="absolute top-[10%] sm:top-1/4 lg:top-1/2 left-1/2 translate-x-[-50%] w-[90%] md:w-9/12 ">
                <p class="text-center text-white mb-4 lg:mb-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum quaerat accusantium dolor assumenda fuga qui illum maxime deleniti dolorum impedit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, sit. </p>
                <a href="{{url('admin/login')}}"><button class=" btn-orange-sidebar w-[fit-content] lg:w-[300px] outline-offset-0 whitespace-nowrap mx-auto block">Become a car rental owner</button></a>
            </div>
        </div>

    </section>

    <!-- Book Now section -->
    <section class="bg-white p-6 sm:p-14 sm:pb-28 grid gap-16 md:grid-cols-2">  
        <div class="h-[200px] sm:h-[fit-content] lg:h-screen relative">
            <img class="w-full h-full object-cover" src="{{url('front/images/booknow.png')}}" alt="">
            <div class="absolute inset-0 bg-black/40"></div>
            <img class="absolute top-full left-0 w-full -translate-y-[70%]" src="{{url('front/images/red_car_booknow.png')}}" alt="">
        </div>
        <div class="h-[fit-content] lg:h-screen relative ">
            <div class="mb-16 lg:-translate-y-5">
                <h2 class="text-[1.5rem] sm:text-[2rem] lg:text-[3rem] font-bold whitespace-nowrap ">Lorem ipsum <br>
                 dolor sit amet, <br>
                  <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular">consectetur.</span> </h2>
            </div>
            <div>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis, est officia cupiditate provident totam aspernatur, voluptate officiis id temporibus reprehenderit quos repellendus vitae recusandae! Eos unde necessitatibus, nostrum rem nobis eligendi harum rerum, inventore impedit, reprehenderit maiores consequuntur. Animi.</p>
               <button class="btn-1 bg-accent-regular uppercase border-none w-[fit-content] text-white mt-6">Book now</button>
            </div>
        </div>
    </section>

    <!-- Frequently ask section -->
    <section class="bg-white p-6 sm:p-14 grid gap-8 md:grid-cols-2">  
        <div class="sm:h-[100vh] relative order-2 sm:order-1">
            <div class="mb-16 lg:-translate-y-4">
                <h2 class="text-[1.5rem] sm:text-[2rem] lg:text-[3rem] font-bold whitespace-nowrap">
                 Frequently Asked <br>
                  <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular">Questions</span> </h2>
            </div>
            <div class="grid gap-8">
               <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
               <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
               <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
               <button type="button" class="btn-1 text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-semibold rounded-full  p-2.5 text-center inline-flex items-center w-[fit-content]">
                <span class="mr-3">More FAQs</span>
                <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </div>
        </div> 
        <div class="h-[200px] sm:h-[100vh] relative order-1 sm:order-2">
            <img class="w-full h-full object-cover" src="{{url('front/images/faqs.jpg')}}" alt="">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>  
    </section>
</main>
