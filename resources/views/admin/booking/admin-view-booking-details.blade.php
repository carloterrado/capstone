
<div id="{{'view-booking'.$book['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">
    <div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">

        <form  class=" relative bg-white rounded-lg shadow" enctype="multipart/form-data" >
        
        
            <div class="form-step step-one pb-6">
                <div class="flex justify-between px-2 pt-6 pb-4 sm:p-6 rounded-t items-center ">
                    <h2 class="text-lg sm:text-xl font-semibold uppercase leading-4">{{$book['car_info']['name']}}</h2>
                    <button data-modal-toggle="{{'view-booking'.$book['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="px-2 sm:px-6 grid grid-cols-8 gap-x-6">
                    <div class="col-span-8 md:col-span-5 mb-6">
                        <div class="relative h-42 sm:h-56 overflow-hidden" id="car-photos">
                               
                            <a class="zoomable-image" href="data:image/jpeg;base64,{{$book['car_info']['main_photo']}}">
                            <img src="data:image/jpeg;base64,{{$book['car_info']['main_photo']}}" class="h-full w-full object-cover " alt="..."></a>
                        </div>

                        <!-- Tab link -->
                        <div class="my-6 bg-[#f5f5f5]">
                            <ul class="grid grid-cols-6 -mb-px text-sm font-medium text-center " id="{{'car'.$book['id']}}" data-tabs-toggle="{{'#car-content'.$book['id']}}" role="tablist">
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 rounded-t-lg uppercase" id="{{'car-description-tab'.$book['id']}}" data-tabs-target="{{'#car-description'.$book['id']}}" type="button" role="tab" aria-controls="{{'car-description'.$book['id']}}" aria-selected="false">User Details</button>
                                </li>
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-accent-regular hover:border-accent-regular uppercase" id="{{'car-excluded-tab'.$book['id']}}" data-tabs-target="{{'#car-excluded'.$book['id']}}" type="button" role="tab" aria-controls="{{'car-excluded'.$book['id']}}" aria-selected="false">User IDs</button>
                                </li>
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-accent-regular hover:border-accent-regular uppercase" id="{{'car-details-tab'.$book['id']}}" data-tabs-target="{{'#car-details'.$book['id']}}" type="button" role="tab" aria-controls="{{'car-details'.$book['id']}}" aria-selected="false">Car Details</button>
                                </li>
                                
                                
                            </ul>
                        </div>

                        <!-- Tab content -->
                        <div id="{{'car-content'.$book['id']}}">
                            <!-- USER DETAILS  -->
                            <div class="hidden p-4" id="{{'car-description'.$book['id']}}" role="tabpanel" aria-labelledby="{{'car-description-tab'.$book['id']}}">
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">User ID:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{'#'.$book['user_id']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Name:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['booking_info']['fullname']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Contact:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['booking_info']['contact']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Address:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['booking_info']['address']}}</p>
                                </div>
                            </div>

                            <!-- USER IDs -->
                            <div class="hidden " id="{{'car-excluded'.$book['id']}}" role="tabpanel" aria-labelledby="{{'car-excluded-tab'.$book['id']}}">
                                <h3 class="text-sm font-semibold">Valid IDs:</h3>
                                <div class="grid grid-cols-6 gap-1">
                                    @foreach ($book['booking_info_id'] as $id)
                                        <div class="relative h-42 col-span-6 sm:col-span-3">
                                            <a class="zoomable-image" href="data:image/jpeg;base64,{{$id['images']}}">
                                            <img src="data:image/jpeg;base64,{{$id['images']}}" class="w-full h-full object-cover " alt="..."></a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="grid grid-cols-6 gap-1">
                                    <div class="col-span-6 sm:col-span-3">
                                        <h3 class="text-sm font-semibold mt-4">Utility Bill:</h3>
                                        <div class="relative h-42 ">
                                            <a class="zoomable-image" href="data:image/jpeg;base64,{{$book['booking_info']['utility']}}">
                                            <img src="data:image/jpeg;base64,{{$book['booking_info']['utility']}}" class="w-full h-full object-cover " alt="..."></a>
                                        </div> 
                                    </div>
                                    @if (!empty($book['booking_info']['license']))
                                    <div class="col-span-6 sm:col-span-3">
                                        <h3 class="text-sm font-semibold mt-4">Driver's License:</h3>
                                        <div class="relative h-42 ">
                                        <a class="zoomable-image" href="data:image/jpeg;base64,{{$book['booking_info']['license']}}">
                                            <img src="data:image/jpeg;base64,{{$book['booking_info']['license']}}" class="w-full h-full object-cover " alt="..."></a>
                                        </div>
                                    </div>   
                                    @endif
                                </div>
                            </div>  

                            <!-- CAR DETAILS -->
                            <div class="hidden p-4" id="{{'car-details'.$book['id']}}" role="tabpanel" aria-labelledby="{{'car-details-tab'.$book['id']}}">
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Type:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['car_info']['car_types']['name']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Capacity:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['car_info']['capacity']}} Seats</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Fuel:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['car_info']['fuel_type']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Location:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['car_info']['pickup_location']}}</p>
                                </div>
                                
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Rent Option:</h3>
                                    <p class="col-span-3 text-sm font-semibold">
                                        @if ($book['booking_info']['driver'] === '1')
                                            With Driver
                                        @else
                                            Self Drive
                                        @endif
                                    </p>
                                </div>
                                <?php
                                    $date1 = new DateTime($book['start_date']);
                                    $date2 = new DateTime($book['end_date']);
                                    $interval = $date1->diff($date2);
                                    
                                ?>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Driver's Fee:</h3>
                                    <p class="col-span-3 text-sm font-semibold">
                                        
                                        @if ($book['booking_info']['driver'] === '1')
                                            @if (intval($interval->format('%R%a')) > 1)
                                                {{'₱ '.number_format($book['booking_info']['driver_fee'],2,'.',',') . ' / '.intval($interval->format('%R%a')).' Days' }}   
                                            @else
                                                {{'₱ '.number_format($book['booking_info']['driver_fee'],2,'.',',') . ' / '.intval($interval->format('%R%a')).' Day' }}
                                            @endif   
                                        @else
                                            {{'₱ '.number_format($book['booking_info']['driver_fee'],2,'.',',')}}
                                        @endif 
                                    </p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Car Fee:</h3>
                                    <p class="col-span-3 text-sm font-semibold">
                                        @if (intval($interval->format('%R%a')) > 1)
                                            {{'₱ '.number_format($book['booking_info']['car_price'],2,'.',',') . ' / '.intval($interval->format('%R%a')).' Days' }}    
                                        @else
                                            {{'₱ '.number_format($book['booking_info']['car_price'],2,'.',',') . ' / '.intval($interval->format('%R%a')).' Day' }} 
                                        @endif 
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                   

                    <div class="col-span-8 md:col-span-3">
                        <div class="bg-[#f5f5f5] pb-4">
                            <div class="p-2 md:p-6 md:pb-4 sm:pt-0">
                                <div class="mt-4">   
                                    <h3 class="col-span-3 text-sm font-semibold">Destination:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['booking_info']['destination']}}</p>
                                </div> 
                                <div class="mt-4">   
                                    <h3 class="col-span-3 text-sm font-semibold">Start Date:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['start_date']}}</p>
                                </div> 
                                <div class="mt-4">   
                                    <h3 class="col-span-3 text-sm font-semibold">End Date:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['end_date']}}</p>
                                </div> 
                                <div class="mt-4">   
                                    <h3 class="col-span-3 text-sm font-semibold">Time:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$book['time']}}</p>
                                </div> 
                            
                            </div>
                            <div class="mx-2 sm:mx-6 mt-2 sm:mt-0  h-1 rounded-full bg-accent-regular">
                            </div>
                            
                            <div class="px-2 py-6 md:px-6">
                                <h3 class="grand-total  font-semibold">{{'Total: ₱ '.number_format($book['booking_info']['grand_total'],2,'.',',')}} </h3>
                            </div>
                            
                        
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

