
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
     <!-- Tab link -->
     <div class="mb-6 ">
        <h2 class="inline-block p-4 border-b-2 border-accent-regular text-accent-regular rounded-t-lg sm:text-lg lg:text-2xl font-bold">On going</h2>
    </div>

    <!-- Tab content -->
    <div id="transaction">
        <div class=" p-4" id="ongoing-details" role="tabpanel" aria-labelledby="ongoing">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
                <div class=" mx-2 sm:w-1/2 sm:mx-auto">
                    @include('message.ajax-error')
                    @include('message.ajax-success')
                </div>
                @include('message.loading')
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
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Status</span>  
                            </th> 
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Action</span>  
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                    
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
                                        <button type="button" data-modal-toggle="{{'view-booking'.$book['id']}}"  class="details btn-1 bg-accent-regular  w-[fit-content]   text-white whitespace-nowrap">View Details</button>
                                    </div>
                                    @include('owner.booking.owner-view-booking-details') 
                                </td>
                                <td class="py-4 px-6 font-semibold text-gray-900 capitalize">
                                    <div class="py-6 flex justify-center ">
                                        <div class="btn-1 pointer-events-none bg-accent-green w-[fit-content]   text-white whitespace-nowrap">
                                            {{$book['status']}}
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex justify-center">
                                        @if ($book['status'] === 'returned')
                                            <button bookingid="{{$book['id']}}" type="button"   class="confirmReturn btn-1 bg-accent-regular  w-[fit-content]   text-white whitespace-nowrap">Return</button>
                                        @endif
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
