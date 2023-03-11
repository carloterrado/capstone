<?php  use Carbon\Carbon; ?>
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
   
     <!-- Tab link -->
    <div class="mb-6 ">
        <ul class="flex -mb-px text-sm font-medium text-center" id="transaction-link" data-tabs-toggle="transaction" role="tablist">
            
            <li class="mr-2 col-span-3 md:col-span-1">
                <button class="booking-btn inline-block hover:text-accent-regular hover:border-accent-regular text-accent-regular p-4 border-b-2 border-accent-regular rounded-t-lg sm:text-lg lg:text-2xl font-bold" id="ongoing"  type="button" >On Going</button>
            </li>
            <li class="mr-2 col-span-3 md:col-span-1">
                <button class="booking-btn inline-block hover:text-accent-regular hover:border-accent-regular p-4 border-b-2 border-transparent rounded-t-lg sm:text-lg lg:text-2xl font-bold" id="history"  type="button" >History</button>
            </li> 
        </ul>
    </div>

    <!-- Tab content -->
    <div id="transaction">
        
        <div class="tables  p-4" id="ongoing-details" >
            
            <div class="mx-auto md:w-1/2">
                @include('message.ajax-error')
                @include('message.ajax-success')
            </div>
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
                                <span class="block text-center">Details</span>  
                            </th>
                            <th scope="col" class="py-3 px-6 ">
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
                                <img src="data:image/jpeg;base64,{{$book['car_info']['main_photo']}}" alt="Car photo">
                                </div>
                            
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex justify-center">
                                    <button type="button" data-modal-toggle="{{'view-booking'.$book['id']}}"  class="details btn-1 bg-accent-regular w-[fit-content]   text-white whitespace-nowrap">View Details</button>
                                </div>
                                @include('front.cars.front-view-booking-details') 
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <div class="py-6 flex justify-center ">
                                    <div class="btn-1 pointer-events-none capitalize
                                    @if ($book['status'] === 'approved' || $book['status'] === 'ongoing' || $book['status'] === 'returned')
                                        bg-accent-green
                                    @elseif ($book['status'] === 'pending')
                                        bg-[#F28123]
                                    @elseif ($book['status'] === 'cancelled' || $book['status'] === 'declined')
                                        bg-accent-regular
                                    @endif
                                      w-[fit-content]    text-white whitespace-nowrap">
                                        {{$book['status']}}
                                    </div>
                                    
                                </div>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <?php
                                 $start_date = Carbon::createFromFormat('Y-m-d H:i A',$book['start_date'].' '. $book['time']);
                                ?>
                                <div class="py-6 flex justify-center ">
                                    @if ($book['status'] === 'cancelled') 
                                        <a module="booking"   moduleid="{{$book['id']}}" class="confirmDelete cursor-pointer"><div class="btn-1 bg-accent-regular w-[fit-content]  text-white whitespace-nowrap">
                                            Delete
                                        </div></a>
                                        <!-- CHECK IF THE STATUS IS APPROVED AND THE DATE TODAY IS LESS THAN A DAY BEFORE START DATE -->
                                    @elseif ($book['status'] === 'approved' && Carbon::now() < $start_date->subDay())
                                        <a class="cancelBooking"  booking_id="{{$book['id']}}" user_id="{{$book['user_id']}}">
                                        <button account="cancelled"  class="btn-1 bg-accent-regular w-[fit-content]   text-white whitespace-nowrap">Cancel</button></a>
                                        <!-- CHECK IF THE STATUS IS APPROVED AND THE DATE TODAY IS EQUAL OR GREATER THAN THE DAY BEFORE START DATE -->
                                    @elseif (($book['status'] === 'approved' && Carbon::now() >= $start_date->subDay()) || $book['status'] === 'ongoing' )
                                        <button data-modal-toggle="{{'view-checklist'.$book['id']}}"   class="btn-1 bg-accent-green w-[fit-content]   text-white whitespace-nowrap">
                                            @if ($book['status'] === 'approved')
                                                Confirm Checklist
                                            @else
                                                View Checklist
                                            @endif
                                        </button>
                                        @include('front.cars.front-car-view-checklist')
                                        <!-- CHECK IF THE STATUS IS PENDING AND THE DATE TODAY IS LESS THAN A DAY BEFORE START DATE -->   
                                    @elseif ( $book['status'] === 'pending' && Carbon::now() < $start_date )
                                            <a class="cancelBooking"  booking_id="{{$book['id']}}" user_id="{{$book['user_id']}}">
                                            <button account="cancelled"  class="btn-1 bg-accent-regular w-[fit-content]   text-white whitespace-nowrap">Cancel</button></a>
                                        <!-- CHECK IF THE STATUS IS PENDING AND THE DATE TODAY IS EQUAL OR GREATER THAN THE DAY BEFORE START DATE -->
                                    @elseif ($book['status'] === 'pending' && Carbon::now() >= $start_date)
                                            <a module="booking"   moduleid="{{$book['id']}}" class="confirmDelete cursor-pointer"><div class="btn-1 bg-accent-regular w-[fit-content]  text-white whitespace-nowrap">
                                            Delete
                                            </div></a>
                                    @endif

                                    @if ($book['status'] === 'ongoing')
                                        <a module="booking"   moduleid="{{$book['id']}}" class="confirmReturn cursor-pointer ml-4"><div class="btn-1 bg-accent-green w-[fit-content]  text-white whitespace-nowrap">
                                            Return
                                            </div></a>
                                    @endif

                                </div>
                            </td>
                            
                        </tr>
                        
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
  
        <div class="tables hidden p-4" id="history-details" >
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
                <table id="history-transaction-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
                
                    <thead class=" text-gray-700  uppercase">
                        <tr class="border-y">
                            <th scope="col" class="py-3 px-6 ">
                            Reference No.
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Details</span>  
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Date Started</span>   
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Date Ended</span>   
                            </th>
                          
                            <!-- <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Download</span>  
                            </th> -->
                          
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($histories as $history)    
                    
                        <tr class="bg-white border-b  hover:bg-gray-50  ">
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                               {{'#'.$history['id']}}
                            </td>
                           
                           
                            <td class="py-4 px-6">
                                <div class="flex justify-center">
                                    <button type="button" data-modal-toggle="{{'view-booking'.$history['id']}}"   class="details btn-1 bg-accent-regular  w-[fit-content]   text-white whitespace-nowrap">View Details</button>
                                    @include('front.cars.booking-details')
                                </div>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <div class="py-6 text-center ">
                                      {{$history['start_date']}}
                                </div>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <div class="py-6 text-center">
                                      {{$history['end_date']}}
                                </div>
                            </td>
                            
                        </tr>
                        
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </main> 


