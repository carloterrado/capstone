
<div id="{{'view-car'.$car['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg">

<div class="relative w-full max-w-2xl m-auto bg-white rounded-lg">

    
    <form  class="relative bg-white rounded-lg shadow ">
      
         <!-- Step 1 -->
        <div class="view-step detail-one">
            <div class="flex justify-between p-4 rounded-t border-b">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Car details
                </h3>
                
                <button data-modal-toggle="{{'view-car'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="p-6 space-y-6">
              
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Car ID: <span class="font-semibold">{{$car['id']}}</span></p>
                    </div>
                    
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="{{'car'.$car['id']}} block mb-2 text-sm font-medium text-gray-900 ">Status: <span class="font-semibold">
                        @if ($car['status'] === 1)
                            Active
                        @else
                            Inactive
                        @endif
                        </span></p>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Name: <span class="font-semibold">{{$car['name']}}</span></p>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Car type: <span class="font-semibold">{{$car['car_types']['name']}}</span></p>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Plate number: <span class="font-semibold">{{$car['plate_number']}}</span></p>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Car capacity: <span class="font-semibold">{{$car['capacity']}}</span></p>
                    </div>
                    
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">With driver: <span class="font-semibold">
                        @if ($car['driver'] === '1')
                            Yes
                        @else
                            No
                        @endif
                        </span></p>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Driver's fee: <span class="font-semibold">{{'₱'.$car['drivers_fee'].'.00'}}</span></p>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">     
                        <label class="block pb-1 text-sm font-medium text-gray-900">Pick-up location:</label>
                        <p  class="block mb-2 text-sm font-medium text-gray-900 "> <span class="font-semibold">{{$car['pickup_location']}}</span></p>
                    </div>
                    
                    <div class="col-span-6 sm:col-span-3">
                        <label class="block pb-1 text-sm font-medium text-gray-900">Description:</label>
                        <p  class="block mb-2 text-sm font-medium text-gray-900 "> <span class="font-semibold">{{$car['description']}}</span></p>

                    </div>
                   
                
                   
                </div>
               
            </div>
            <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 "> 
                <button type="button" class="second-details details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Next</button>
            </div>
        </div>


         <!-- Step 2 -->
        <div class="view-step detail-two hidden">
            <div class="flex justify-between p-4 rounded-t border-b">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Car photos
                </h3>
                
                <button data-modal-toggle="{{'view-car'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">

                    @if ($car['registration'] !== null)
                    <div class="col-span-6 sm:col-span-3">
                        <label  for="add-admin-car-registration" class="block pb-1 text-sm font-semibold  text-gray-500" >Car registration</label>
                        <a href="{{url('owner/images/cars/registration/'.$car['registration'])}}" target="_blank">
                        <img src="{{url('owner/images/cars/registration/'.$car['registration'])}}" alt="Car photo"></a>
                    </div>
                    @endif
                    <div class="col-span-6 sm:col-span-3 relative">
                        <label   class="block pb-1 text-sm font-semibold  text-gray-500" >Main car photo</label>
                       
                        <a href="{{url('owner/images/cars/main/'.$car['main_photo'])}}" target="_blank" >
                        <img  src="{{url('owner/images/cars/main/'.$car['main_photo'])}}" alt="Car photo" class="inset-0 object-cover w-full h-44 rounded-lg"></a>
                      
                    </div>
                   
                    <div class="col-span-6 sm:col-span-3 relative" data-carousel="static">
                        <label  class="block pb-1 text-sm font-semibold text-gray-500" >Photos of car: click for large view</label>
                       
                         <!-- Carousel wrapper -->
                        <div class="relative h-44 overflow-hidden rounded-lg">
                            <!-- Item 1 -->
                            @foreach ($car['car_photos'] as $photo)
                           
                            <div class="hidden duration-700 ease-in-out" 
                            @if ($loop->first) data-carousel-item="active" @else data-carousel-item @endif >
                                <a href="{{url('owner/images/cars/'.$photo['photos'])}}" target="_blank">
                                <img src="{{url('owner/images/cars/'.$photo['photos'])}}" class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="..."></a>
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
                    
                   
                   
                </div>  
            </div>
            <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b border-t border-gray-200 ">
                <button type="button" class="first-details details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                <button type="button" class="third-details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Next</button>
            </div>
        </div>



         <!-- Step 3 -->
        <div class="view-step detail-three hidden">
            <div class="flex justify-between p-4 rounded-t border-b">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Pricing details
                </h3>
                <button data-modal-toggle="{{'view-car'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>

           

            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    @foreach ($car['car_price'] as $price)
                        <div class="col-span-6 sm:col-span-3 relative">
                            <label class="block pb-1 text-sm font-medium  text-gray-900" >{{$price['regions']['regDesc']}}</label>
                            <p  class="block mb-2 text-sm font-medium text-gray-900 "> <span class="font-semibold">{{'₱'.$price['price'].'.00'}}</span></p>
                        </div>
                    @endforeach
                   
                    
                   
                   
                   
                  
                </div>
            </div>
            <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b border-t border-gray-200 ">
                
                <button type="button" class="second-details btn-1 bg-accent-regular uppercase w-full  sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                
            </div>
        </div>
    </form>
</div>
</div>