
<div id="{{'view-car'.$car['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">

<div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">

    
    <form  class="relative bg-white rounded-lg shadow ">
      
        <div class="view-step detail-one">
            <div class="flex justify-end p-4 rounded-t ">
                
                <button data-modal-toggle="{{'view-car'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="px-2 sm:px-6 grid grid-cols-8 gap-6">
                <div class="col-span-8 md:col-span-4 ">
                    <div class=" relative" data-carousel="static"> 
                         <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg " id="car-photos">
                            <div  class="hidden duration-700 ease-in-out" data-carousel-item="active" >
                                <a class="zoomable-image" href="data:image/jpeg;base64,{{$car['main_photo']}}">
                                <img src="data:image/jpeg;base64,{{$car['main_photo']}}" class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="..."></a>
                            </div>
                            @foreach ($car['car_photos'] as $photo)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item >
                            <a class="zoomable-image" href="data:image/jpeg;base64,{{$photo['photos']}}">
                                <img src="data:image/jpeg;base64,{{$photo['photos']}}" class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="..."></a>
                            </div>
                            @endforeach
                           
                          
                        </div>
                         <!-- Slider controls -->
                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-accent-regular/30  group-hover:bg-accent-regular/50 group-focus:ring-0 group-focus:ring-accent-regular  group-focus:outline-none">
                                <svg aria-hidden="true" class="w-6 h-6 text-white " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-accent-regular/30  group-hover:bg-accent-regular/50 group-focus:ring-0 group-focus:ring-accent-regular  group-focus:outline-none">
                                <svg aria-hidden="true" class="w-6 h-6 text-white " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-accent-regular mb-2 ">Car Details</h3>
                        <div>
                            <h4  class="block text-sm font-semibold text-gray-900 ">Name of Car: </h4>
                            <p class="text-sm sm:text-base" >{{$car['name']}}</p>
                        </div>
                        <div class="mt-2">
                            <h4  class="block text-sm font-semibold text-gray-900 ">Plate Number: </h4>
                            <p class="text-sm sm:text-base" >{{$car['plate_number']}}</p>
                        </div>
                        <div class="mt-2 grid grid-cols-2">
                            <div class="col-span-1">
                                <h4  class="block text-sm font-semibold text-gray-900 ">Car Type: </h4>
                                <p class="text-sm sm:text-base">{{$car['car_types']['name']}}</p>
                            </div>
                            <div class="col-span-1">
                                <h4  class="block text-sm font-semibold text-gray-900 ">Capacity: </h4>
                                <p class="text-sm sm:text-base">{{$car['capacity']}} Seater</p>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h4  class="block text-sm font-semibold text-gray-900 ">Description: </h4>
                            <p class="text-sm sm:text-base" >{{$car['description']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-8 md:col-span-4 ">
                    <div class="mt-6">
                        <h3 class="text-lg sm:text-xl font-semibold text-accent-regular mb-2 ">Service Details</h3>
                        <div>
                            <h4  class="block text-sm font-semibold text-gray-900 ">Pick-up Location: </h4>
                            <p class="text-sm sm:text-base" >{{$car['pickup_location']}}</p>
                        </div>
                        <div class="mt-2 grid grid-cols-2">
                            <div class="col-span-1">
                                <h4  class="block text-sm font-semibold text-gray-900 ">Service Offer: </h4>
                                <p class="text-sm sm:text-base">
                                    @if ($car['driver'] === '1')
                                        With driver
                                    @else
                                        Without driver
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-1">
                                <h4  class="block text-sm font-semibold text-gray-900 ">Driver's Fee: </h4>
                                <p class="text-sm sm:text-base">{{'₱ '.$car['drivers_fee'].'.00'}} / Per day</p>
                            </div>
                        </div> 
                    </div>
                    <div class="mt-12">
                        <h3 class="text-lg sm:text-xl font-semibold text-accent-regular mb-2 ">Price Details</h3>
                       
                        <div class="mt-2 grid grid-cols-2 gap-2">
                            <div class="col-span-1">
                                <h4  class="block text-sm font-semibold text-gray-900 uppercase">Location </h4>
                            </div>
                            <div class="col-span-1">
                                <h4  class="block text-sm font-semibold text-gray-900 uppercase">Price </h4>
                            </div>
                        </div> 
                        @foreach ($car['car_price'] as $price)
                        <div class="mt-2 grid grid-cols-2 gap-2">
                            <div class="col-span-1 text-xs">
                                <p>{{$price['regions']['regDesc']}}</p>
                            </div>
                            <div class="col-span-1 text-sm">
                                <p>{{'₱ '.$price['price'].'.00'}} / Per day</p>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
              
            </div>
            <div class="flex items-center justify-end px-2 py-6 sm:p-6  space-x-2 rounded-b  border-gray-200 "> 
            </div>
        </div>

    </form>
</div>
</div>