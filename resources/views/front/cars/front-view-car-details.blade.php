
<div id="{{'view-car'.$car['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">
    <div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">
        <form  class="car-booking-form form relative bg-white rounded-lg shadow" enctype="multipart/form-data" >
            @include('message.loading')
        
            <div class="form-step step-one pb-6">
                <div class="flex justify-between px-2 pt-6 pb-4 sm:p-6 rounded-t items-center relative">
                    <h2 class="text-lg sm:text-xl font-semibold uppercase leading-4">{{$car['name']}}</h2>
                    <button data-modal-toggle="{{'view-car'.$car['id']}}" type="button" before="Close" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:top-0 before:right-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="px-2 sm:px-6 grid grid-cols-8 gap-x-6">
                    <div class="col-span-8 md:col-span-5 mb-6">
                        <div class="relative h-42 sm:h-56 overflow-hidden" id="car-photos">
                            <a class="zoomable-image" href="data:image/jpeg;base64,{{$car['main_photo']}}">
                                <img src="data:image/jpeg;base64,{{$car['main_photo']}}" class="h-full w-full object-cover" alt="..."></a>
                        </div>

                        <!-- Tab link -->
                        <div class="my-6 bg-[#f5f5f5]">
                            <ul class="grid grid-cols-6 -mb-px text-sm font-medium text-center " id="{{'car'.$car['id']}}" data-tabs-toggle="{{'#car-content'.$car['id']}}" role="tablist">
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-accent-regular hover:border-accent-regular uppercase" id="{{'car-details-tab'.$car['id']}}" data-tabs-target="{{'#car-details'.$car['id']}}" type="button" role="tab" aria-controls="{{'car-details'.$car['id']}}" aria-selected="false">Car Details</button>
                                </li>
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 rounded-t-lg uppercase" id="{{'car-description-tab'.$car['id']}}" data-tabs-target="{{'#car-description'.$car['id']}}" type="button" role="tab" aria-controls="{{'car-description'.$car['id']}}" aria-selected="false">Description</button>
                                </li>
                                <li class="mr-2 col-span-6 sm:col-span-2" role="presentation">
                                    <button class="car-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-accent-regular hover:border-accent-regular uppercase" id="{{'car-excluded-tab'.$car['id']}}" data-tabs-target="{{'#car-excluded'.$car['id']}}" type="button" role="tab" aria-controls="{{'car-excluded'.$car['id']}}" aria-selected="false">Excluded</button>
                                </li> 
                            </ul>
                        </div>

                        <!-- Tab content -->
                        <div id="{{'car-content'.$car['id']}}">
                            <div class="hidden p-4" id="{{'car-details'.$car['id']}}" role="tabpanel" aria-labelledby="{{'car-details-tab'.$car['id']}}">
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Type:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$car['carTypes']['name']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Capacity:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$car['capacity']}} Seats</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Fuel:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$car['fuel_type']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Location:</h3>
                                    <p class="col-span-3 text-sm font-semibold">{{$car['pickup_location']}}</p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Rent Option:</h3>
                                    <p class="col-span-3 text-sm font-semibold">
                                        @if ($car['driver'] === '1')
                                            With Driver
                                        @else
                                            Self Drive
                                        @endif
                                    </p>
                                </div>
                                <div class="grid grid-cols-6 border-b-2 mb-4">
                                    <h3 class="col-span-3 text-sm font-semibold">Driver's Fee:</h3>
                                    <p class="col-span-3 text-sm font-semibold">
                                        {{'₱ '.number_format($car['drivers_fee'],2,'.',',')}} / Day
                                    </p>
                                </div>
                            </div>
                            <div class="hidden p-4" id="{{'car-description'.$car['id']}}" role="tabpanel" aria-labelledby="{{'car-description-tab'.$car['id']}}">
                                <p class="text-sm ">{{$car['description']}}</p>
                            </div>
                            <div class="hidden p-4" id="{{'car-excluded'.$car['id']}}" role="tabpanel" aria-labelledby="{{'car-excluded-tab'.$car['id']}}">
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
                            <div class="p-4 bg-[#302E2E]">
                                <h3 class="text-lg sm:text-xl font-semibold text-white text-center mb-2 ">{{'₱'.number_format($car['carPrice'][3]['price'],2,'.',',')}} <span class="text-accent-regular"> / Day</span></h3>
                                <p class="text-white text-[10px] text-center">Price may vary as per destination</p>
                            </div>
                            <input type="hidden" name="car-id" value="{{$car['id']}}">
                            <input type="hidden" name="owner-id" value="{{$car['owner_id']}}">
                        
                            <div class="p-2 md:p-6 md:pb-4 sm:pt-0">
                                <div class="picker">
                                    <div class="picker__item">
                                        <div class="range-input relative">
                                            <!-- <label class="block mb-2 text-sm font-semibold text-gray-900 uppercase text-center">Select Date(s) </label> -->
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-2 top-2 pointer-events-none z-50" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#e84949" d="M12 14q-.425 0-.712-.288Q11 13.425 11 13t.288-.713Q11.575 12 12 12t.713.287Q13 12.575 13 13t-.287.712Q12.425 14 12 14Zm-4 0q-.425 0-.713-.288Q7 13.425 7 13t.287-.713Q7.575 12 8 12t.713.287Q9 12.575 9 13t-.287.712Q8.425 14 8 14Zm8 0q-.425 0-.712-.288Q15 13.425 15 13t.288-.713Q15.575 12 16 12t.712.287Q17 12.575 17 13t-.288.712Q16.425 14 16 14Zm-4 4q-.425 0-.712-.288Q11 17.425 11 17t.288-.712Q11.575 16 12 16t.713.288Q13 16.575 13 17t-.287.712Q12.425 18 12 18Zm-4 0q-.425 0-.713-.288Q7 17.425 7 17t.287-.712Q7.575 16 8 16t.713.288Q9 16.575 9 17t-.287.712Q8.425 18 8 18Zm8 0q-.425 0-.712-.288Q15 17.425 15 17t.288-.712Q15.575 16 16 16t.712.288Q17 16.575 17 17t-.288.712Q16.425 18 16 18ZM5 22q-.825 0-1.413-.587Q3 20.825 3 20V6q0-.825.587-1.412Q4.175 4 5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588Q21 5.175 21 6v14q0 .825-.587 1.413Q19.825 22 19 22Zm0-2h14V10H5v10Z"/></svg>

                                                <input type="text"  value="" name="date" data-bookdates="{{json_encode($car['carBooking'])}}" class="date-input block px-2.5 py-2 w-full text-xs text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 mb-2" placeholder="choose date" readonly>
                                            </div>
                                            <div class="text-[10px] grid grid-cols-4 mt-2">
                                                <div class="flex items-center gap-1 col-span-2 ml-4">
                                                    <div class="w-2 h-2 bg-accent-regular"></div>
                                                    <p>Not Available</p>
                                                </div>
                                                <div class="flex items-center gap-1 col-span-2">
                                                    <div class="w-2 h-2 bg-green-400"></div>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                            <div class="mt-2 items-center">
                                                <label class="w-fit mb-2 text-sm font-semibold text-gray-900 uppercase text-center mr-2 mt-1">Pick Up Time: </label>
                                                <input type="time" name="book-time" class="time-input w-full bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block px-2.5 py-2 uppercase" placeholder="Select time" >
                                            </div>
                                            <div class=" mt-2 items-center">
                                                <label class="w-fit mb-2 text-sm font-semibold text-gray-900 uppercase text-center mr-2 mt-1">Drop Off Time: </label>
                                                <input type="time" name="book-time-end" class="time-end-input w-full bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block px-2.5 py-2 uppercase" placeholder="Select time" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">   
                                    <input type="hidden" value="{{$car['carPrice'][3]['price']}}" name="car-price" class="car-price">
                                    <label class="block mb-2 text-sm font-semibold text-gray-900 uppercase ">Destination </label>
                                    <!-- <label class="block mb-2 text-xs font-medium text-gray-900 uppercase">Region: </label> -->
                                    <select name="region" data-price="{{json_encode($car['carPrice'])}}" class="region bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                                        <option disabled selected>Select Region</option>
                                    </select>
                                </div> 
                                <div class="mt-4">   
                                    <!-- <label class="block mb-2 text-xs font-medium text-gray-900 uppercase">Province: </label> -->
                                    <input type="hidden" value="" name="book-province" class="book-province">
                                    <select name="province"  class="province bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                                        <option disabled selected>Select Province</option>
                                
                                    </select>
                                </div> 
                                <div class="mt-4">   
                                    <!-- <label class="block mb-2 text-xs font-medium text-gray-900 uppercase">City: </label> -->
                                    <input type="hidden" value="" name="book-city" class="book-city">
                                    <select name="city" class="city bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                                        <option disabled selected>Select City</option>
                                
                                    </select>
                                </div> 
                                @if ($car['driver'] === '1')
                                <div class="mt-4">  
                                    <input type="hidden" value="0" name="driver-fee" class="driver-price"> 
                                    <label class="block mb-2 text-sm font-semibold text-gray-900 uppercase text-center">Rent option </label>
                                    <select name="driver" data-driver="{{$car['drivers_fee']}}" class="driver bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                                        <option value="1">With Driver</option>
                                        <option value="0" selected>Self Drive</option>
                                    </select>
                                </div>
                                @else
                                <div class="mt-4 hidden">
                                    <input type="hidden" value="0" name="driver-fee" class="driver-price">   
                                    <label class="block mb-2 text-sm font-semibold text-gray-900 uppercase text-center">Rent option </label>
                                    <select name="driver"  class="driver bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                                        <option value="0" selected>Self Drive</option>
                                    </select>
                                </div>
                                @endif
                            </div>
                            <div class="mx-2 sm:mx-6 mt-2 sm:mt-0  h-1 rounded-full bg-accent-regular">
                            </div>
                            
                            <div class="step1-error p-2 sm:px-6 text-sm font-medium text-accent-regular hidden"> 
                                The above information is required!  
                            </div> 
                            <div class="mt-6 px-6">
                                <button type="button" class="step-2 btn-1 bg-accent-regular w-full   text-white whitespace-nowrap uppercase">Reserve this car</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="form-step step-two hidden">
                <div class="flex justify-between p-4 rounded-t border-b relative">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Customer Details
                    </h3>
                    <button data-modal-toggle="{{'view-car'.$car['id']}}" type="button" before="Close" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:top-0 before:right-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>

            

                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="fullname" value="{{Auth::user()->first_name .' '.Auth::user()->last_name}}" class="fullname block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label class="fullname-error pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Full Name</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="contact" value="{{Auth::user()->contact}}" class="contact block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label class="contact-error pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Contact</label>
                        </div>
                        <div class="col-span-6 license-container">
                            <label class="license-error block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Driver's License</label>
                            <input type="file" name="license"  class="license block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help">
                            
                        </div>
                        <div class="col-span-6">
                            <label class="valid-id-error block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Valid ID</label>
                            <input type="file" name="valid-id" class="valid-id block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"  aria-describedby="file_input_help">
                        </div>
                        <div class="col-span-6">
                            <label class="valid-id-error block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Another Valid ID</label>
                            <input type="file" name="valid-id-2" class="valid-id-2 block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help">
                        </div>
                        <div class="col-span-6">
                            <label class="utility-error block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Latest Electric/Water Bill</label>
                            <input type="file" name="utility" class="utility block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help">
                        </div>
                        <div class="col-span-6  relative">
                            <input type="text" name="address" value="{{Auth::user()->address}}" class="address block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label class="address-error pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Address</label>
                        </div>
                    </div>
                </div>
                <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b border-t border-gray-200 ">   
                    <button type="button" class="step-1 btn-1 bg-accent-regular uppercase w-full  sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="button" class="step-3 btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Next</button> 
                </div>
            </div>

            <!-- Step 3 -->
            <div class="form-step step-three hidden">
                <div class="flex justify-between p-4 rounded-t relative">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Confirm Reservation
                    </h3>
                    <button data-modal-toggle="{{'view-car'.$car['id']}}" type="button" before="Close" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:top-0 before:right-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="px-6">
                    @include('message.ajax-error')
                    @include('message.ajax-success')
                </div>

                <div class="px-6 space-y-6">
                    <div class="grid grid-cols-6 gap-2 md:gap-4 font-semibold">
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <h3 class="col-span-6 sm:col-span-1">Destination:</h3>
                            <p class="col-span-6 sm:col-span-5 bg-[#f5f5f5]  py-2 px-3 capitalize confirm-destination">Lorem </p>
                        </div>
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <h3 class="col-span-6 sm:col-span-1">Car Fee:</h3>
                            <p class="bg-[#f5f5f5]  py-2 px-3 col-span-6 sm:col-span-5 confirm-days-count">1500</p>
                        </div>  
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <h3 class="col-span-6 sm:col-span-1">Rent Option:</h3>
                            <p class="col-span-6 sm:col-span-5 bg-[#f5f5f5] py-2 px-3 confirm-driver ">With Driver</p>
                        </div>
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <h3 class="col-span-6 sm:col-span-1">Start Date:</h3>
                            <p class="bg-[#f5f5f5]  py-2 px-3 col-span-6 sm:col-span-5 confirm-start-date">dd-mm-yyyy</p>
                        </div>
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <h3 class="col-span-6 sm:col-span-1">End Date:</h3>
                            <p class="bg-[#f5f5f5]  py-2 px-3 col-span-6 sm:col-span-5 confirm-end-date">dd-mm-yyyy</p>
                        </div> 
                        <div class="bg-accent-regular rounded-full h-1 col-span-6"></div>
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <h3 class="col-span-3 sm:col-span-1">Total Car Fee:</h3>
                            <p class="col-span-3 sm:col-span-5 confirm-car-fee">P 1000</p>
                        </div>
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <h3 class="col-span-3 sm:col-span-1">Driver Fee:</h3>
                            <p class="col-span-3 sm:col-span-5 confirm-driver-fee">P 1000</p>
                        </div>
                        <div class="col-span-6 gap-2 grid grid-cols-6">
                            <input type="hidden" value="" name="total-price" class="total-price">
                            <h3 class="col-span-3 sm:col-span-1">Grand Total:</h3>
                            <p class="col-span-3 sm:col-span-5 confirm-total">P 1000</p>
                        </div>
                        <div class="flex items-center mt-4 col-span-6">
                            <input  name="booking-terms" value="agree" type="checkbox" class="booking-terms w-4 h-4 text-accent-regular bg-gray-100 rounded border-gray-300 focus:ring-0  ">
                            <label  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="javascript:void(0)" data-modal-toggle="terms-and-conditions" class="text-accent-regular  hover:underline">terms and conditions</a>.</label> 
                        </div>
                        <label class="booking-form-error hidden col-span-6 pb-1 text-sm font-semibold lg:pl-2 text-[lightcoral]">Please check the Terms and Conditions</label>
                        <div class="bg-accent-regular rounded-full h-1 col-span-6"></div>
                    </div>
                </div>
                <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b">
                    <button type="button" class="step-2 btn-1 bg-accent-regular uppercase w-full  sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="submit" class="edit-step-3 btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

