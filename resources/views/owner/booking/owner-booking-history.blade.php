<?php use Carbon\Carbon; ?>
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
    <div class="relative md:w-1/2 mx-auto">
    @include('message.ajax-success')
    @include('message.ajax-error')
    @include('message.commission-error')
    </div>
    
     <!-- Tab link -->
    <div class="mb-6 ">
        <h2 class="inline-block p-4 border-b-2 border-accent-regular text-accent-regular rounded-t-lg sm:text-lg lg:text-2xl font-bold">Booking History</h2>
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
                                Renter Name
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
                                <span class="block text-center">Download</span>  
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
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        {{$history['name']}}
                                    </td>
                                   
                                    <td class="py-4 px-6">
                                        <div class="flex justify-center">
                                            <button type="button" data-modal-toggle="{{'view-history'.$history['id']}}" class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                                        </div>
                                        @include('owner.booking.owner-view-booking-history-details')
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <span class="block text-center">{{$history['start_date']}}</span>    
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <span class="block text-center">{{$history['end_date']}}</span>    
                                        
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <div class="flex justify-center">
                                            @if ($history['commission'] === 'unpaid')
                                                <button  class=" btn-1 pointer-events-none bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">{{$history['commission']}}</button>
                                            @else
                                                <button  class=" btn-1 pointer-events-none bg-accent-green uppercase  w-[fit-content]   text-white whitespace-nowrap">{{$history['commission']}}</button>
                                            @endif
                                            
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <a href="{{url('/admin/download-booking-history/'.$history['id'])}}">
                                        <button historyid="{{$history['id']}}" class="downloadPD flex justify-center w-full text-accent-regular">
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
