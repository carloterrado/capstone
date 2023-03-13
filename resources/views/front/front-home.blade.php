<main id="home">
    <!-- Hero section -->
    <section class="relative text-white h-[100vmin] md:h-[calc(100vmin-5.5rem)]">
        <img class="w-full h-full object-cover" src="{{url('front/images/resized-cover-photo.jpg')}}" alt="hero image">
        <div class="absolute inset-0 bg-black/40"></div>
        
        <div class="flex flex-col gap-2 md:gap-4  w-full absolute top-1/2 -translate-y-1/2 md:translate-y-0 md:top-[30%] -translate-x-1/2 left-1/2  font-[800] font-['Montserrat',sans-serif]">
            <h1 class="text-[2rem] sm:text-[3rem] lg:text-[4.5rem] text-center leading-none font-['Roboto',sans-serif] font-[500] ">Find the <span class="text-accent-regular font-['Roboto',sans-serif] font-[500]">Best</span>   </h1>
            <h2 class="text-[2rem] sm:text-[3rem] lg:text-[4.5rem] text-center leading-none font-['Roboto',sans-serif] font-[500] "><span class="text-accent-regular font-['Roboto',sans-serif] font-[500]">Car</span> for You </h2>
            <p class="text-[.8rem] text-center sm:text-[1rem] font-[400]">Rent with ease, never miss a breeze, <br> with just a few clicks!</p>
            <div class="flex items-center justify-center md:mt-6" >
                <a class="grid place-content-center" href="{{url('/cars')}}"><button class="btn-1 my-auto bg-accent-regular uppercase border-none w-[fit-content]  text-[.5rem] rounded-full px-3 py-1 md:py-3 md:px-7 lg:text-[1rem]">Find a car</button></a>
            </div>
            
        </div>
    </section>

    <!-- Car section -->
    <section class="bg-[#F5F5F5] px-2 py-6 sm:py-16  sm:px-24 ">
        <div class="font-bold mb-6 md:mb-10">
            <h2 class="text-center text-[1.5rem] lg:text-[2.5rem]  leading-none">Featured <span class="text-accent-regular">Cars</span></h2>
        </div>
        <div class="grid grid-cols-6 gap-4 w-full mx-auto owl-carousel owl-theme overflow-hidden uppercase">
            <div class=" col-span-6 h-[250px] sm:h-[325px] md:col-span-3 mx-1 lg:col-span-2  relative bg-white overflow-hidden border-gray-200 rounded-lg shadow">
                <h1 class=" mt-4 text-center ">Mitsubishi Hatchback</h1>
                <div class="h-full w-full "><img class="w-full h-full object-contain" src="{{url('front/images/mitsubishi-hatchback.png')}}" alt=""></div>
            </div>
            <div class="col-span-6 h-[250px] sm:h-[325px] md:col-span-3 mx-1 lg:col-span-2  relative bg-white overflow-hidden border-gray-200 rounded-lg shadow ">
                <h1 class=" mt-4 text-center ">mitsubishi mirage gls</h1>
                <div class="h-full w-full "><img class="w-full h-full object-contain" src="{{url('front/images/mitsubishi-mirage-gls.png')}}" alt=""></div>
            </div>
            <div class="col-span-6 h-[250px] sm:h-[325px] md:col-span-3 mx-1 lg:col-span-2  relative bg-white overflow-hidden border-gray-200 rounded-lg shadow ">
                <h1 class=" mt-4 text-center ">nissan almera</h1>
                <div class="h-full w-full "><img class="w-full h-full object-contain" src="{{url('front/images/nissan-almera.png')}}" alt=""></div>
            </div>
            <div class="col-span-6 h-[250px] sm:h-[325px] md:col-span-3 mx-1 lg:col-span-2  relative bg-white overflow-hidden border-gray-200 rounded-lg shadow ">
                <h1 class=" mt-4 text-center ">toyota hiace grandia</h1>
                <div class="h-full w-full "><img class="w-full h-full object-contain" src="{{url('front/images/toyota-hiace-grandia.png')}}" alt=""></div>
            </div>
            <div class="col-span-6 h-[250px] sm:h-[325px] md:col-span-3 mx-1 lg:col-span-2  relative bg-white overflow-hidden border-gray-200 rounded-lg shadow ">
                <h1 class=" mt-4 text-center ">toyota vios black</h1>
                <div class="h-full w-full "><img class="w-full h-full object-contain" src="{{url('front/images/toyota-vios-black.png')}}" alt=""></div>
            </div>
            <div class="col-span-6 h-[250px] sm:h-[325px] md:col-span-3 mx-1 lg:col-span-2  relative bg-white overflow-hidden border-gray-200 rounded-lg shadow ">
                <h1 class=" mt-4 text-center ">toyota vios silver</h1>
                <div class="h-full w-full "><img class="w-full h-full object-contain" src="{{url('front/images/toyota-vios-silver.png')}}" alt=""></div>
            </div>
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
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 15 15"><path fill="#e84949" d="M10.5 1a1 1 0 0 0-1 1H2v1l1 1l1-1l1 1l1-1l1 1h2.5a1 1 0 0 0 1 1h2a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-2Zm.5 1.5a.5.5 0 0 1 1 0v1a.5.5 0 0 1-1 0v-1ZM2.146 9.354A.5.5 0 0 0 2 9.707V13.5a.5.5 0 0 0 .5.5H4a.5.5 0 0 0 .5-.5V13h6v.5a.5.5 0 0 0 .5.5h1.5a.5.5 0 0 0 .5-.5V9.707a.5.5 0 0 0-.146-.353L12 8.5l-1.354-2.257a.5.5 0 0 0-.43-.243H4.784a.5.5 0 0 0-.429.243L3 8.5l-.854.854ZM11.134 9H3.866l1.2-2h4.868l1.2 2ZM5.5 10.828v.372a.3.3 0 0 1-.3.3H3.3a.3.3 0 0 1-.3-.3v-.834a.3.3 0 0 1 .359-.294l1.82.364a.4.4 0 0 1 .321.392Zm6.5-.34v.712a.3.3 0 0 1-.3.3H9.8a.3.3 0 0 1-.3-.3v-.454a.3.3 0 0 1 .241-.294l1.78-.356a.4.4 0 0 1 .479.392Z"/></svg>
                </div>
                <!-- <i class='bx bxs-truck text-accent-regular text-[4rem]'></i> -->
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Vehicle Rental</h3>
                <p class="font-medium ">We provide a variety of vehicles that depends on your needs and budget. Whether you need a small, compact car for a city trip, or a spacious van for a family road trip, we have got you covered!</p>
            </div>
            <div class="max-w-[400px] py-6 sm:px-6 border-t border-t-accent-regular sm:border-t-0">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 2048 2048"><path fill="#e84949" d="M896 512v128H512V512h384zM512 896V768h384v128H512zm0 256v-128h256v128H512zM384 512v128H256V512h128zm0 256v128H256V768h128zm-128 384v-128h128v128H256zM128 128v1792h640v128H0V0h1115l549 549v219h-128V640h-512V128H128zm1024 91v293h293l-293-293zm640 805h256v1024H896V1024h256V896h128v128h384V896h128v128zm128 896v-512h-896v512h896zm0-640v-128h-896v128h896z"/></svg>
                </div>
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Booking & Reservation</h3>
                <p class="font-medium ">You can book your desired car online or make reservations simple and convenient. We strive to provide fast and efficient service so that you can hit the road as soon as possible.</p>
            </div>
            <div class="max-w-[400px] pt-6 lg:px-6 border-t border-t-accent-regular sm:border-t-0  sm:border-l sm:border-l-accent-regular">
                <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="#e84949" d="M21.71 8.71c1.25-1.25.68-2.71 0-3.42l-3-3c-1.26-1.25-2.71-.68-3.42 0L13.59 4H11C9.1 4 8 5 7.44 6.15L3 10.59v4l-.71.7c-1.25 1.26-.68 2.71 0 3.42l3 3c.54.54 1.12.74 1.67.74c.71 0 1.36-.35 1.75-.74l2.7-2.71H15c1.7 0 2.56-1.06 2.87-2.1c1.13-.3 1.75-1.16 2-2C21.42 14.5 22 13.03 22 12V9h-.59l.3-.29M20 12c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-4.41l-3.28 3.28c-.31.29-.49.12-.6.01l-2.99-2.98c-.29-.31-.12-.49-.01-.6L5 15.41v-4l2-2V11c0 1.21.8 3 3 3s3-1.79 3-3h7v1m.29-4.71L18.59 9H11v2c0 .45-.19 1-1 1s-1-.55-1-1V8c0-.46.17-2 2-2h3.41l2.28-2.28c.31-.29.49-.12.6-.01l2.99 2.98c.29.31.12.49.01.6Z"/></svg>
                </div>
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Marketing Platform</h3>
                <p class="font-medium ">We help other car rental owners rent out their vehicles by providing a platform for them to market their cars. This gives our customers a wider selection of vehicles to choose from.</p>
            </div>
        </div>
    </section>

    <!-- How to rent a car section -->
    <section class="bg-[#F5F5F5] px-6 pb-14 sm:p-14 gap-4 grid sm:grid-cols-2 lg:grid-cols-4">
        <div class="py-10  sm:h-[400px] sm:flex sm:flex-col sm:justify-end">
            <p class="text-accent-regular text-[1.2rem] font-medium whitespace-nowrap">How to rent a Car?</p>
            <p class="whitespace-nowrap sm:mb-8 font-bold text-[1.2rem] sm:text-[1.75rem]">Booking is <br>
            as easy as <br>
            <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/2 before:bg-accent-regular">1-2-3!</span></p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">01</h2>
            <div >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 -ml-2" viewBox="0 0 24 24"><path  d="M9.61 16.11c0-2.08.98-3.92 2.49-5.11H5l1.5-4.5h11l1.22 3.66c.84.37 1.58.91 2.19 1.58L18.92 6c-.2-.58-.76-1-1.42-1h-11c-.66 0-1.22.42-1.42 1L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h4.29c-.43-.87-.68-1.85-.68-2.89M6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16m14.21 4.7l-.01.01l.01-.01m-4.6-9.09c2.5 0 4.5 2 4.5 4.5c0 .89-.25 1.71-.69 2.39L23 21.61L21.61 23l-3.11-3.07c-.7.43-1.5.68-2.39.68c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5m0 2a2.5 2.5 0 1 0 2.5 2.5c0-1.39-1.11-2.5-2.5-2.5"/></svg>
            </div>
            <!-- <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i> -->
            <h3 class="font-bold mb-3">Find a car</h3>
            <p>With our search filters and detailed vehicle information, you can easily find the perfect car for your need.</p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">02</h2>
            <div >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 -ml-2"  viewBox="0 0 24 24"><path  d="M10 9a1 1 0 0 1 1-1a1 1 0 0 1 1 1v4.47l1.21.13l4.94 2.19c.53.24.85.77.85 1.35v4.36c-.03.82-.68 1.47-1.5 1.5H11c-.38 0-.74-.15-1-.43l-4.9-4.2l.74-.77c.19-.21.46-.32.74-.32h.22L10 19V9m1-4a4 4 0 0 1 4 4c0 1.5-.8 2.77-2 3.46v-1.22c.61-.55 1-1.35 1-2.24a3 3 0 0 0-3-3a3 3 0 0 0-3 3c0 .89.39 1.69 1 2.24v1.22C7.8 11.77 7 10.5 7 9a4 4 0 0 1 4-4m0-2a6 6 0 0 1 6 6c0 1.7-.71 3.23-1.84 4.33l-1-.45A5.019 5.019 0 0 0 16 9a5 5 0 0 0-5-5a5 5 0 0 0-5 5c0 2.05 1.23 3.81 3 4.58v1.08C6.67 13.83 5 11.61 5 9a6 6 0 0 1 6-6Z"/></svg>
            </div>
            <h3 class="font-bold mb-3">Pick a car</h3>
            <p>We will give you the freedom to choose the vehicle that best fits your needs and budget.</p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">03</h2>
            <div >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 -ml-2" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14q-.425 0-.712-.288Q11 13.425 11 13t.288-.713Q11.575 12 12 12t.713.287Q13 12.575 13 13t-.287.712Q12.425 14 12 14Zm-4 0q-.425 0-.713-.288Q7 13.425 7 13t.287-.713Q7.575 12 8 12t.713.287Q9 12.575 9 13t-.287.712Q8.425 14 8 14Zm8 0q-.425 0-.712-.288Q15 13.425 15 13t.288-.713Q15.575 12 16 12t.712.287Q17 12.575 17 13t-.288.712Q16.425 14 16 14Zm-4 4q-.425 0-.712-.288Q11 17.425 11 17t.288-.712Q11.575 16 12 16t.713.288Q13 16.575 13 17t-.287.712Q12.425 18 12 18Zm-4 0q-.425 0-.713-.288Q7 17.425 7 17t.287-.712Q7.575 16 8 16t.713.288Q9 16.575 9 17t-.287.712Q8.425 18 8 18Zm8 0q-.425 0-.712-.288Q15 17.425 15 17t.288-.712Q15.575 16 16 16t.712.288Q17 16.575 17 17t-.288.712Q16.425 18 16 18ZM5 22q-.825 0-1.413-.587Q3 20.825 3 20V6q0-.825.587-1.412Q4.175 4 5 4h1V3q0-.425.287-.713Q6.575 2 7 2t.713.287Q8 2.575 8 3v1h8V3q0-.425.288-.713Q16.575 2 17 2t.712.287Q18 2.575 18 3v1h1q.825 0 1.413.588Q21 5.175 21 6v14q0 .825-.587 1.413Q19.825 22 19 22Zm0-2h14V10H5v10Z"/></svg>
            </div>
            <h3 class="font-bold mb-3">Book a car</h3>
            <p>Simply select the dates, location, and vehicle, and we'll take care of the rest.</p>
        </div>
    </section>

    <!-- Become a car owner section -->
    <section class="bg-white p-6 sm:p-14 grid gap-8 md:grid-cols-2">
        <div class="sm:h-[fit-content] relative">
            <div class="mb-8     lg:-translate-y-6">
                <h2 class="text-[1.5rem] sm:text-[2rem] lg:text-[3rem] font-bold whitespace-nowrap ">As our <span class="text-accent-regular">car</span>  <br>
                  <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular"><span class="text-accent-regular">rental</span>  owner</span> </h2>
            </div>
            <div>
                <ul class="grid sm:grid-cols-2 gap-y-8 gap-x-4">
                    <li class="flex gap-2 items-center">
                        <div class="h-10 w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        </div>
                        <span>We will help you to reach wider audience</span>
                    </li>
                    <li class="flex gap-2 items-center">
                        <div class="h-10 w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        </div>   
                        <span>We'll make sure users are thoroughly reviewed to avoid frauds and scams</span></li>
                    <li class="flex gap-2 items-center">
                        <div class="h-10 w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        </div>   
                        <span>You can provide transportation for people who don't own a car</span></li>
                    <li class="flex gap-2 items-center">
                        <div class="h-10 w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        </div>    
                        <span>Experience optimized data collection and reservation process</span></li>
                    <li class="flex gap-2 items-center">
                        <div class="h-10 w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        </div>
                        <span>You can choose when to make your car available for rent.</span></li>
                    <li class="flex gap-2 items-center">
                        <div class="h-10 w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        </div>
                        <span>You can build social connection to people especially other co-owners</span></li>
                </ul>
            </div>
        </div>
        <div class="max-h-[500px] relative">
            <img class="w-full h-full object-cover" src="{{url('front/images/become.jpg')}}" alt="">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-full max-w-md px-2 m-auto ">
                <p class="text-center text-white mb-4 lg:mb-8">Join us and embrace the future of car rental! Take advantage of the endless opportunities to grow your business, reach a wider audience, and provide a seamless rental experience to your customers.  </p>
                <a href="{{url('admin/login')}}"><button class="rounded-full px-6  btn-orange-sidebar w-[fit-content] lg:w-[300px] outline-offset-0 whitespace-nowrap mx-auto block">Become a car rental owner</button></a>
            </div>
        </div>

    </section>

    <!-- Book Now section -->
    <section class="bg-white p-6 sm:p-14  grid gap-16 md:grid-cols-2">  
        <div class="h-[200px] w-full sm:h-full max-h-[85vh]  relative">
            <img class="w-full h-full object-cover" src="{{url('front/images/booknow.png')}}" alt="">
            <div class="absolute inset-0 bg-black/40"></div>
            <img class="absolute top-full left-0 w-full -translate-y-[70%]" src="{{url('front/images/red_car_booknow.png')}}" alt="">
        </div>
        <div class=" relative ">
            <div class="mb-8 lg:-translate-y-5">
                <h2 class="text-[1.5rem] sm:text-[2rem] lg:text-[3rem] font-bold whitespace-nowrap "><span class="text-accent-regular"> Why</span> should <br>
                you <span class="text-accent-regular">choose</span>  <br>
                  <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular text-accent-regular">us?</span> </h2>
            </div>
            <div>
               <p>Our car rental web application offers a wide variety of affordable cars, providing you with the flexibility to find the right vehicle for your needs and budget. By choosing our user-friendly web application, you gain access to greater rental terms and conditions flexibility, saving you valuable time and effort. </p>
               <p>Our web application also provides a readily available Frequently Asked Questions (FAQs) section to address any questions or concerns you may have.<br> So, if you are looking for a convenient, affordable, and flexible car rental experience, consider using our web application.</p>
               <a href="{{url('/cars')}}"> <button class="btn-1 bg-accent-regular uppercase border-none w-[fit-content] text-white mt-6">Book now</button></a>
            </div>
        </div>
    </section>

    <!-- Frequently ask section -->
    <section class="bg-white p-6 sm:p-14 grid gap-8 md:grid-cols-2">  
        <div class=" relative order-2 sm:order-1 ">
            <div class="mb-8 lg:-translate-y-4">
                <h2 class="text-[1.5rem] sm:text-[2rem] lg:text-[3rem] font-bold whitespace-nowrap">
                <span class="text-accent-regular"> Frequently </span>Asked<br>
                  <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular">Questions</span> </h2>
            </div>
            <div class="grid mb-8 relative">
               <!-- Set of questions with collapsible answers-->
                <div id="accordion-open" class=" mb-4 text-gray-600" data-accordion="collapse" data-active-classes="bg-accent-regular text-white" >
                    <h2 id="accordion-open-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left  border border-b-0 border-gray-200 rounded-t-xl hover:bg-accent-regular hover:text-white" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
                        <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 
                        1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>What does "unlimited mileage" mean?</span>
                        <svg data-accordion-icon class="w-6 h-6  shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    </h2>
                    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                        <div class="p-5 font-normal border border-b-0 border-gray-200">
                            <p class="mb-2 text-gray-600">"Unlimited mileage" means that you can drive the rental car as many miles as you want in the geographic area specified in your rental agreement during the time you have it. It's important to note that "unlimited mileage" does not mean that you can take the rental car anywhere you want.</p>
                            
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left  border border-b-0 border-gray-200 hover:bg-accent-regular hover:text-white" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                            <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 
                            0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>How to cancel my reservation?</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                        <div class="p-5 font-normal border border-b-0 border-gray-200">
                            <ul class="pl-5 text-gray-600 list-disc">
                                <li>Log in to your account.</li>
                                <li>On the upper right corner click your avatar/profile.</li>
                                <li>Click the "Reserved Car" section.</li>
                                <li>Find the reservation you wish to cancel and click "Cancel."</li>
                            </ul>
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-gray-200 hover:bg-accent-regular hover:text-white" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                        <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 
                        0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>How to rent a car?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    </h2>
                    <div id="accordion-open-body-3" class="hidden z-10" aria-labelledby="accordion-open-heading-3">
                        <div class="p-5 font-normal border border-t-0 border-gray-200 max-h-56 overflow-auto">
                            <ul class="pl-5 text-gray-600 list-disc">
                                <li>Create an account on the web app.</li>
                                <li>Once you have created an account, go to the home page of the web app.</li>
                                <li>Click on the "find a car" or "cars" on the navigation bar at the center top of the page.</li>
                                <li>Search for a car based on your preferences. You can select the car type, capacity, and price range that you prefer. You can also choose whether to have a driver or just self-drive</li>
                                <li>After choosing a car that suits your needs, click the "Reserve Now" button below the car you have chosen.</li>
                                <li>The car details, description, and excluded details will appear. On the right side of the page, you will see a calendar where you can select the date and time you want to rent the car. You will also need to choose the region, province, and city of your destination.</li>
                                <li>After selecting the date, time, and destination, click the "reserve this car" button.</li>
                            </ul>
                            <p class="indent-10 text-gray-600 mt-4">If you select the "self-drive" option, you will need to provide your full name, contact number, and address. You will also need to upload a picture of your driver's license, two valid IDs, and the latest electric or water bill.</p>
                            <p class="indent-10 text-gray-600 mt-4">If you select the "with driver" option, you will need to provide your full name, contact number, and address. You will also need to provide two valid IDs and the latest water or electric bill.</p>
                            
                        </div>
                    </div>
                </div >
                <a href="{{url('frequently-asked-questions')}}">
                <button type="button" class="btn-1 px-6 absolute -bottom-10 left-0 -z-0 text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-semibold rounded-full  p-2.5 text-center inline-flex items-center w-[fit-content]">
                <span class="mr-3"> More FAQs</span>
                <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button></a>
              
            </div>
            
        </div> 
        <div class="h-[200px] w-full sm:h-full max-h-[85vh] relative order-1 sm:order-2 ">
            <img class="w-full h-full object-cover" src="{{url('front/images/faqs.jpg')}}" alt="">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>  
    </section>
</main>



