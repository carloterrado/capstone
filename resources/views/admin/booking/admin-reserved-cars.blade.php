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
                                Status
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
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <div class="py-6">
                                        {{$book['status']}}
                                </div>
                            </td>
                        </tr>
                        @include('admin.booking.admin-view-booking-details') 
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
                                Status
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
                                
                                    <button type="button"   class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <div class="py-6">
                                        {{$book['status']}}
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
