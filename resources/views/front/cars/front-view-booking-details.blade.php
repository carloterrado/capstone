
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
                        <div class="relative h-56 overflow-hidden" id="car-photos">
                            
                                @if ($book['car_info']['owner_id'] === 0)
                                <img src="{{url('admins/images/cars/main/'.$book['car_info']['main_photo'])}}" class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="...">
                                @else
                                <img src="{{url('owner/images/cars/main/'.$book['car_info']['main_photo'])}}" class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="..."></a>
                                @endif
                        </div>

                        <!-- Tab link -->
                        <div class="my-6 bg-[#f5f5f5]">
                            <ul class="grid grid-cols-6 -mb-px text-sm font-medium text-center " id="{{'car'.$book['id']}}" data-tabs-toggle="{{'#car-content'.$book['id']}}" role="tablist">
                                
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-accent-regular hover:border-accent-regular uppercase" id="{{'car-details-tab'.$book['id']}}" data-tabs-target="{{'#car-details'.$book['id']}}" type="button" role="tab" aria-controls="{{'car-details'.$book['id']}}" aria-selected="false">Car Details</button>
                                </li>
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 rounded-t-lg uppercase" id="{{'car-description-tab'.$book['id']}}" data-tabs-target="{{'#car-description'.$book['id']}}" type="button" role="tab" aria-controls="{{'car-description'.$book['id']}}" aria-selected="false">Description</button>
                                </li>
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-accent-regular hover:border-accent-regular uppercase" id="{{'car-excluded-tab'.$book['id']}}" data-tabs-target="{{'#car-excluded'.$book['id']}}" type="button" role="tab" aria-controls="{{'car-excluded'.$book['id']}}" aria-selected="false">Excluded</button>
                                </li>
                                
                            </ul>
                        </div>

                        <!-- Tab content -->
                        <div id="{{'car-content'.$book['id']}}">
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
                                            {{'₱ '.number_format($book['booking_info']['driver_fee'],2,'.',',') . ' / '.intval($interval->format('%R%a')).' Days' }}    
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
                            <div class="hidden p-4" id="{{'car-description'.$book['id']}}" role="tabpanel" aria-labelledby="{{'car-description-tab'.$book['id']}}">
                                <p class="text-sm font-semibold ">{{$book['car_info']['description']}}</p>
                            </div>
                            <div class="hidden p-4" id="{{'car-excluded'.$book['id']}}" role="tabpanel" aria-labelledby="{{'car-excluded-tab'.$book['id']}}">
                                <div class="border-b-2 mb-4">
                                    <h3 class="text-sm font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="inline-block" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M18 10a1 1 0 0 1-1-1a1 1 0 0 1 1-1a1 1 0 0 1 1 1a1 1 0 0 1-1 1m-6 0H6V5h6m7.77 2.23l.01-.01l-3.72-3.72L15 4.56l2.11 2.11C16.17 7 15.5 7.93 15.5 9a2.5 2.5 0 0 0 2.5 2.5c.36 0 .69-.08 1-.21v7.21a1 1 0 0 1-1 1a1 1 0 0 1-1-1V14a2 2 0 0 0-2-2h-1V5a2 2 0 0 0-2-2H6c-1.11 0-2 .89-2 2v16h10v-7.5h1.5v5A2.5 2.5 0 0 0 18 21a2.5 2.5 0 0 0 2.5-2.5V9c0-.69-.28-1.32-.73-1.77Z"/></svg> <span>Fuel</span></h3>  
                                </div>
                                <div class="border-b-2 mb-4">
                                    <h3 class="text-sm font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="inline-block" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15"><path fill="currentColor" d="M2.5 1a.5.5 0 0 0-.5.5V13h-.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1H7v-2.901l6.776-4.553a.5.5 0 0 0 .136-.694l-.279-.415a.5.5 0 0 0-.693-.136L7 8.29V2h.5a.5.5 0 0 0 0-1h-5ZM3 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-4Z"/></svg> <span>Toll Fees</span></h3>  
                                </div>
                                <div class="border-b-2 mb-4">
                                    <h3 class="text-sm font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="inline-block" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15"><path fill="currentColor" d="M1 13V2h4.5a3.5 3.5 0 0 1 3.21 2.103a3.36 3.36 0 0 0-.504.676c-.23.41-.232.837-.174 1.154l.3 1.625A3.495 3.495 0 0 1 5.5 9H3v4H1Zm4.5-6a1.5 1.5 0 1 0 0-3H3v3h2.5Zm3.516-1.248a.716.716 0 0 1 .062-.484C9.315 4.848 9.978 4 11.5 4c1.521 0 2.185.847 2.421 1.268a.716.716 0 0 1 .064.484L13.019 11H12v2h-1v-2H9.981l-.965-5.248ZM12.75 7L13 5.655C12.83 5.409 12.42 5 11.5 5s-1.33.41-1.5.655L10.25 7h2.5Z"/></svg> <span>Parking Fees</span></h3>  
                                </div>
                                <div class="border-b-2 mb-4">
                                    <h3 class="text-sm font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="inline-block" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M20.475 23.3L19 21.825V22h-2v-2.175L.675 3.5L2.1 2.075l19.8 19.8ZM19 16.125l-2.075-2.075L14 11.125V7q0-2.075 1.463-3.537Q16.925 2 19 2Zm-7-7l-2-2V2h2Zm-3-3l-2-2V2h2Zm-3-3L4.875 2H6ZM7 22v-9.15q-1.275-.35-2.137-1.4Q4 10.4 4 9V3.975l2 2V9h1V6.975l2.025 2l2.25 2.275q-.4.575-.987.987Q9.7 12.65 9 12.85V22Z"/></svg> <span>Driver's Meal</span></h3>  
                                </div>
                            </div>    
                        </div>
                    </div>

                    <!-- Reservation form start -->

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
                                <input type="hidden" value="" name="total-price" class="total-price">
                                <h4 class="grand-total font-semibold">{{'Total: ₱ '.number_format($book['booking_info']['grand_total'],2,'.',',')}} </h4>
                            </div>
                            
                        
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

