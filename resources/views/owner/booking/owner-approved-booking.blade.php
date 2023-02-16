<?php use Carbon\Carbon; ?>
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
    <div class="relative md:w-1/2 mx-auto">
    @include('message.ajax-success')
    @include('message.ajax-error')
    </div>
    
     <!-- Tab link -->
    <div class="mb-6 ">
        <h2 class="inline-block p-4 border-b-2 border-accent-regular text-accent-regular rounded-t-lg sm:text-lg lg:text-2xl font-bold">Approved Booking</h2>
    </div>

    <!-- Tab content -->
    <div id="transaction">
       
        <div class=" p-4" id="approved-booking" role="tabpanel" aria-labelledby="history">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
                <table id="ongoing-transaction-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
                
                    <thead class=" text-gray-700 uppercase ">
                        <tr class="border-y">
                            <th scope="col" class="py-3 px-6 ">
                            Reference No.
                            </th>
                            <th scope="col" class="py-3 px-6 whitespace-nowrap">
                                Car ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Car image</span>   
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">View details</span>  
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Status</span>  
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Action</span>  
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @include('message.loading')
                    
                        @foreach($booking as $book)  
                           
                                <tr class="bg-white border-b  hover:bg-gray-50  ">
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        {{'#'.$book['id']}}
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        {{'#'.$book['car_id']}}
                                    </td>
                                    <td class="p-4">
                                        <div class="w-32 mx-auto overflow-hidden rounded-lg">
                                        <img src="
                                        @if ($book['car_info']['owner_id'] === 0)
                                        {{url('admins/images/cars/main/'.$book['car_info']['main_photo'])}} 
                                        @else
                                        {{url('owner/images/cars/main/'.$book['car_info']['main_photo'])}}  
                                        @endif
                                        " alt="Car photo">
                                        </div> 
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex justify-center">
                                            <button type="button" data-modal-toggle="{{'view-booking-page2'.$book['id']}}"  class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <div class="py-6 flex justify-center ">
                                            <div class="btn-1 pointer-events-none bg-accent-green w-[fit-content]  text-white whitespace-nowrap">
                                                {{$book['status']}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <?php
                                        $start_date = Carbon::createFromFormat('Y-m-d H:i A',$book['start_date'].' '. $book['time']);
                                        ?>
                                        <div class="py-6 flex justify-center ">
                                            @if (Carbon::now() < $start_date->subDay())
                                                <a class="cancelBooking"  booking_id="{{$book['id']}}" user_id="{{$book['user_id']}}">
                                                <button account="cancelled"  class="btn-1 bg-accent-regular w-[fit-content]   text-white whitespace-nowrap">Cancel</button></a>
                                            @elseif (Carbon::now() >= $start_date)
                                            
                                                <a module="booking"   moduleid="{{$book['id']}}" class="confirmDeleteBooking cursor-pointer">
                                                    <button class="btn-1 bg-accent-regular w-[fit-content]  text-white whitespace-nowrap">Delete
                                                </button></a>
                                     
                                            @endif
                                        </div>
                                    </td>
                                            @include('owner.booking.owner-view-booking-details-second-page') 
                                </tr>
                          
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main> 
