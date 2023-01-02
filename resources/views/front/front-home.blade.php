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
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16"  viewBox="0 0 640 512"><path fill="#e84949"   d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg>
                </div>
                <!-- <i class='bx bxs-truck text-accent-regular text-[4rem]'></i> -->
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Service 1</h3>
                <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
            </div>
            <div class="max-w-[400px] py-6 sm:px-6 border-t border-t-accent-regular sm:border-t-0">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16"  viewBox="0 0 640 512"><path fill="#e84949"   d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg>
                </div>
                <h3 class="mb-3 text-[1.2rem] lg:text-[1.5rem] font-bold">Service 2</h3>
                <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
            </div>
            <div class="max-w-[400px] pt-6 lg:px-6 border-t border-t-accent-regular sm:border-t-0  sm:border-l sm:border-l-accent-regular">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16"  viewBox="0 0 640 512"><path fill="#e84949"   d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg>
                </div>
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
            <div >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 -ml-2" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14q-.425 0-.712-.288Q11 13.425 11 13t.288-.713Q11.575 12 12 12t.713.287Q13 12.575 13 13t-.287.712Q12.425 14 12 14Zm-4 0q-.425 0-.713-.288Q7 13.425 7 13t.287-.713Q7.575 12 8 12t.713.287Q9 12.575 9 13t-.287.712Q8.425 14 8 14Zm8 0q-.425 0-.712-.288Q15 13.425 15 13t.288-.713Q15.575 12 16 12t.712.287Q17 12.575 17 13t-.288.712Q16.425 14 16 14Zm-4 4q-.425 0-.712-.288Q11 17.425 11 17t.288-.712Q11.575 16 12 16t.713.288Q13 16.575 13 17t-.287.712Q12.425 18 12 18Zm-4 0q-.425 0-.713-.288Q7 17.425 7 17t.287-.712Q7.575 16 8 16t.713.288Q9 16.575 9 17t-.287.712Q8.425 18 8 18Zm8 0q-.425 0-.712-.288Q15 17.425 15 17t.288-.712Q15.575 16 16 16t.712.288Q17 16.575 17 17t-.288.712Q16.425 18 16 18ZM5 22q-.825 0-1.413-.587Q3 20.825 3 20V6q0-.825.587-1.412Q4.175 4 5 4h1V3q0-.425.287-.713Q6.575 2 7 2t.713.287Q8 2.575 8 3v1h8V3q0-.425.288-.713Q16.575 2 17 2t.712.287Q18 2.575 18 3v1h1q.825 0 1.413.588Q21 5.175 21 6v14q0 .825-.587 1.413Q19.825 22 19 22Zm0-2h14V10H5v10Z"/></svg>
            </div>
            <!-- <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i> -->
            <h3 class="font-bold mb-3">Find a car</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">02</h2>
            <div >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 -ml-2" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14q-.425 0-.712-.288Q11 13.425 11 13t.288-.713Q11.575 12 12 12t.713.287Q13 12.575 13 13t-.287.712Q12.425 14 12 14Zm-4 0q-.425 0-.713-.288Q7 13.425 7 13t.287-.713Q7.575 12 8 12t.713.287Q9 12.575 9 13t-.287.712Q8.425 14 8 14Zm8 0q-.425 0-.712-.288Q15 13.425 15 13t.288-.713Q15.575 12 16 12t.712.287Q17 12.575 17 13t-.288.712Q16.425 14 16 14Zm-4 4q-.425 0-.712-.288Q11 17.425 11 17t.288-.712Q11.575 16 12 16t.713.288Q13 16.575 13 17t-.287.712Q12.425 18 12 18Zm-4 0q-.425 0-.713-.288Q7 17.425 7 17t.287-.712Q7.575 16 8 16t.713.288Q9 16.575 9 17t-.287.712Q8.425 18 8 18Zm8 0q-.425 0-.712-.288Q15 17.425 15 17t.288-.712Q15.575 16 16 16t.712.288Q17 16.575 17 17t-.288.712Q16.425 18 16 18ZM5 22q-.825 0-1.413-.587Q3 20.825 3 20V6q0-.825.587-1.412Q4.175 4 5 4h1V3q0-.425.287-.713Q6.575 2 7 2t.713.287Q8 2.575 8 3v1h8V3q0-.425.288-.713Q16.575 2 17 2t.712.287Q18 2.575 18 3v1h1q.825 0 1.413.588Q21 5.175 21 6v14q0 .825-.587 1.413Q19.825 22 19 22Zm0-2h14V10H5v10Z"/></svg>
            </div>
            <h3 class="font-bold mb-3">Pick a car</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
        </div>
        <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
            <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">03</h2>
            <div >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 -ml-2" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14q-.425 0-.712-.288Q11 13.425 11 13t.288-.713Q11.575 12 12 12t.713.287Q13 12.575 13 13t-.287.712Q12.425 14 12 14Zm-4 0q-.425 0-.713-.288Q7 13.425 7 13t.287-.713Q7.575 12 8 12t.713.287Q9 12.575 9 13t-.287.712Q8.425 14 8 14Zm8 0q-.425 0-.712-.288Q15 13.425 15 13t.288-.713Q15.575 12 16 12t.712.287Q17 12.575 17 13t-.288.712Q16.425 14 16 14Zm-4 4q-.425 0-.712-.288Q11 17.425 11 17t.288-.712Q11.575 16 12 16t.713.288Q13 16.575 13 17t-.287.712Q12.425 18 12 18Zm-4 0q-.425 0-.713-.288Q7 17.425 7 17t.287-.712Q7.575 16 8 16t.713.288Q9 16.575 9 17t-.287.712Q8.425 18 8 18Zm8 0q-.425 0-.712-.288Q15 17.425 15 17t.288-.712Q15.575 16 16 16t.712.288Q17 16.575 17 17t-.288.712Q16.425 18 16 18ZM5 22q-.825 0-1.413-.587Q3 20.825 3 20V6q0-.825.587-1.412Q4.175 4 5 4h1V3q0-.425.287-.713Q6.575 2 7 2t.713.287Q8 2.575 8 3v1h8V3q0-.425.288-.713Q16.575 2 17 2t.712.287Q18 2.575 18 3v1h1q.825 0 1.413.588Q21 5.175 21 6v14q0 .825-.587 1.413Q19.825 22 19 22Zm0-2h14V10H5v10Z"/></svg>
            </div>
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
                    <li class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-14 md:w-14"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg><span>Lorem ipsum dolor sit amet consectetur.</span>
                    </li>
                    <li class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-14 md:w-14"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        <span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-14 md:w-14"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        <span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-14 md:w-14"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        <span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-14 md:w-14"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        <span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    <li class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-14 md:w-14"  viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg>    
                        <span>Lorem ipsum dolor sit amet consectetur.</span></li>
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
