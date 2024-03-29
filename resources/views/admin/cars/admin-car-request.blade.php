<div class="p-4 sm:p-6 lg:p-14 lg:pt-7 min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]">

    <div class="flex justify-end sm:justify-between">
        <nav class="hidden sm:flex mb-4 sm:mb-6 lg:mb-7" aria-label="Breadcrumb">
            <ul class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                <a href="{{url('admin/dashboard')}}" class="inline-flex items-center text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1 mr-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z"/></svg>
                    Dashboard
                </a>
                </li>
                <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-xs sm:text-base  font-bold text-gray-500 md:ml-2">Car Management</span>
                </div>
                </li>
                <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                
                    <a href="{{url('admin/car-request')}}" class="ml-1 text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular md:ml-2">Owner car requests</a>
                </div>
                </li>
            </ul>
        </nav>
      
    </div>
    <div class="md:w-1/2 mx-auto">
        @include('message.ajax-error')
        @include('message.ajax-success')
        @include('message.loading')
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
        
        <table id="arkilla-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
           
            <thead class=" text-gray-700 uppercase ">
                <tr class="border-y">
                    <th scope="col" class="py-3 px-6">
                       Car ID
                    </th>
                    <th scope="col" class="py-3 ">
                        <span class="block text-center">Brand and Model</span>   
                    </th>
                    <th scope="col" class="py-3 ">
                        <span class="block text-center">Car image</span>   
                    </th>
                    <th scope="col" class="py-3 ">
                    <span class="block text-center">Owner</span>  
                    </th>
                    <th scope="col" class="py-3 ">
                        <span class="block text-center">Details</span>  
                    </th>
                    <th scope="col" class="py-3">
                        <h2 class="block text-center">Status</h2> 
                    </th>
                    <th scope="col" class="py-3 ">
                        <span class="block text-center">Action</span> 
                    </th>
                </tr>
            </thead>
            <tbody>
             
               @foreach($cars as $car)    
              
                <tr class="bg-white border-b  hover:bg-gray-50  ">
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                        {{'#'.$car['id']}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-center text-gray-900 ">
                        {{$car['name']}}
                    </td>
                    <td class="p-4">
                        <div class="w-32 h-24 mx-auto overflow-hidden rounded-lg">
                        <img src="data:image/jpeg;base64,{{$car['main_photo']}}" alt="Car photo">
                        </div>
                      
                    </td>
                    <td class="py-4 px-6 font-semibold text-center text-gray-900 ">
                        {{$car['car_owner']['first_name']}}
                        {{$car['car_owner']['last_name']}}
                        <br>
                        {{$car['car_owner']['email']}} 

                    </td>
                    <td class="py-4 px-6">
                        <div class="flex justify-center">
                           
                            <button  data-modal-toggle="{{'view-car'.$car['id']}}" class="details btn-1 bg-accent-regular w-[fit-content]   text-white whitespace-nowrap">View Details</button>
                        </div>
                        @include('admin.cars.admin-view-owner-car-details')
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                        <div class="py-6 flex justify-center">
                            @if ($car['status'] === 1) 
                            <a before="Active" id="car-{{$car['id']}}" car_id="{{$car['id']}}" class="updateCarStatus cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative"><svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg></a>    
                            @else 
                            <a before="Inactive" id="car-{{$car['id']}}" car_id="{{$car['id']}}" class="updateCarStatus cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative"><svg status="Inactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#e84949" fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94L8.28 7.22Z" clip-rule="evenodd"/></svg></a>
                            @endif
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center justify-center">
                            <div class="flex gap-4 py-6">  
                                <a class="updateCarAccount" owner_email="{{$car['car_owner']['email']}}" owner_name="{{$car['car_owner']['first_name'].' '.$car['car_owner']['last_name']}}" car_account_id="{{$car['id']}}">
                                <button account="verified"  class="btn-1 bg-accent-green w-[fit-content]   text-white whitespace-nowrap">Approve</button></a>
                                <a class="updateCarAccount" owner_email="{{$car['car_owner']['email']}}" owner_name="{{$car['car_owner']['first_name'].' '.$car['car_owner']['last_name']}}"  car_account_id="{{$car['id']}}">
                                <button account="declined"  class="btn-1 bg-accent-regular w-[fit-content]   text-white whitespace-nowrap">Decline</button></a>
                            </div>   
                           
                        </div>
                    </td>
                </tr>
               
            @endforeach
                
            </tbody>
        </table>
    </div>
</div>








