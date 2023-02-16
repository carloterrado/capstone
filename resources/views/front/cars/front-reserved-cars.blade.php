<?php  use Carbon\Carbon; ?>
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
   
     <!-- Tab link -->
    <div class="mb-6 ">
        <ul class="flex -mb-px text-sm font-medium text-center" id="transaction-link" data-tabs-toggle="transaction" role="tablist">
            
            <li class="mr-2 col-span-3 md:col-span-1" role="presentation">
                <button class="transaction-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg sm:text-lg lg:text-2xl font-bold" id="ongoing" data-tabs-target="#ongoing-details" type="button" role="tab" aria-controls="ongoing-details" aria-selected="false">On Going</button>
            </li>
            <li class="mr-2 col-span-3 md:col-span-1" role="presentation">
                <button class="transaction-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg sm:text-lg lg:text-2xl font-bold" id="history" data-tabs-target="#history-detail" type="button" role="tab" aria-controls="history-details" aria-selected="false">History</button>
            </li> 
        </ul>
    </div>

    <!-- Tab content -->
    <div id="transaction">
        
        <div class="hidden p-4" id="ongoing-details" role="tabpanel" aria-labelledby="ongoing">
            
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
                                <span class="block text-center">View details</span>  
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
                                    <button type="button" data-modal-toggle="{{'view-booking'.$book['id']}}"  class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                                </div>
                                @include('front.cars.front-view-booking-details') 
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <div class="py-6 flex justify-center ">
                                    <div class="btn-1 pointer-events-none
                                    @if ($book['status'] === 'approved' || $book['status'] === 'ongoing')
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
                                        <button data-modal-toggle="{{'view-checklist'.$book['id']}}"   class="btn-1 bg-accent-green w-[fit-content]   text-white whitespace-nowrap">view checklist</button>
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

                                </div>
                            </td>
                            
                        </tr>
                        
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
  
        <div class="hidden p-4" id="history-detail" role="tabpanel" aria-labelledby="history">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
                <table id="history-transaction-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
                
                    <thead class=" text-gray-700 uppercase ">
                        <tr class="border-y">
                            <th scope="col" class="py-3 px-6 ">
                            Reference No.
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">View details</span>  
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Date started</span>   
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Date ended</span>   
                            </th>
                          
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Download</span>  
                            </th>
                          
                            
                            
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
                                    <button type="button" data-modal-toggle="{{'view-booking'.$history['id']}}"   class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                                    @include('front.cars.front-view-booking-history-details')
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
                           
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <a href="{{url('download-booking-history/'.$history['id'])}}">
                                <button historyid="{{$history['id']}}" class="flex justify-center w-full text-accent-regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="currentColor" d="M9 16a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H9Zm1.5 3H10v-1h.5a.5.5 0 0 1 0 1Zm3.5-2a1 1 0 0 1 1-1h.5a3.5 3.5 0 1 1 0 7H15a1 1 0 0 1-1-1v-5Zm2 3.915a1.5 1.5 0 0 0 0-2.83v2.83ZM20 22v-5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-2v1h2a1 1 0 1 1 0 2h-2v1a1 1 0 1 1-2 0ZM17 9V2H8a3 3 0 0 0-3 3v8a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2v1a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3v-1a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2v-1h-7a3 3 0 0 1-3-3Zm10 6v9H5v-9h22Zm-8-6V2.117a3 3 0 0 1 1.293.762l5.828 5.828A3 3 0 0 1 26.883 10H20a1 1 0 0 1-1-1Z"/></svg></a>
                                </button>
                            </td>
                            
                        </tr>
                        
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </main> 
