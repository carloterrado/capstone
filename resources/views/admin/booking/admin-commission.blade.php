<?php use Carbon\Carbon; ?>
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
    <div class="relative md:w-1/2 mx-auto">
    @include('message.ajax-success')
    @include('message.ajax-error')
    </div>
    
     <!-- Tab link -->
    <div class="mb-6 ">
        <h2 class="inline-block p-4 border-b-2 border-accent-regular text-accent-regular rounded-t-lg sm:text-lg lg:text-2xl font-bold">Commission</h2>
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
                           
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Details</span>  
                            </th>
                            <th scope="col" class="py-3 px-6 ">
                                <span class="block text-center">Start date</span>  
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">End date</span>  
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Commission</span>  
                            </th>
                            
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Payment</span>  
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Action</span>  
                            </th>
                         
                            
                        </tr>
                    </thead>
                    <tbody>
                    @include('message.loading')
                    
                        @foreach($histories as $history)  
                           
                                <tr class="bg-white border-b  hover:bg-gray-50  ">
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        {{'#'.$history['booking_id']}}
                                    </td>
                                   
                                    <td class="py-4 px-6">
                                        <div class="flex justify-center">
                                            <button type="button" data-modal-toggle="{{'view-history'.$history['id']}}" class="details btn-1 bg-accent-regular  w-[fit-content]   text-white whitespace-nowrap">View Details</button>
                                        </div>
                                        @include('admin.booking.admin-view-booking-details-commissions')
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <span class="block text-center">{{$history['start_date']}}</span>    
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <span class="block text-center">{{$history['end_date']}}</span>    
                                    </td>
                                   
                                    <td class="py-4 px-6 font-semibold text-gray-900 capitalize ">
                                        @if ($history['commission'] === "paid") 
                                        <span class="block text-center bg-accent-green btn-1 pointer-events-none text-white">{{$history['commission']}}</span>    
                                       @else
                                        <span class="block text-center bg-[#F28123] btn-1 pointer-events-none text-white">{{$history['commission']}}</span>  
                                        @endif  
                                    </td>
                                  
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <div class="flex justify-center">
                                            @if ($history['commission'] === "unpaid") 
                                            <button historyid="{{$history['id']}}" type="button"   class="confirmCommissionFee btn-1 bg-accent-green   w-[fit-content]   text-white whitespace-nowrap">Confirm</button>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <div class="flex justify-center">
                                            <a historyid="{{$history['id']}}" before="Delete" class="confirmDeleteHistory cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:left-1/2 before:-translate-x-1/2 before:bottom-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413Q17.825 21 17 21Zm2-4h2V8H9Zm4 0h2V8h-2Z"/></svg></a>
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
