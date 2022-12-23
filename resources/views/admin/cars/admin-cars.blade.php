<div class="p-4 sm:p-6 lg:p-14 lg:pt-7 min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]">
    <div class="flex justify-end sm:justify-between">
        <nav class="hidden sm:flex mb-4 sm:mb-6 lg:mb-7" aria-label="Breadcrumb">
            <ul class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                <a href="{{url('admin/dashboard')}}" class="inline-flex items-center text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular"><i class='bx bx-grid-alt mr-1 text-xl'></i>
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
                
                    <a href="{{url('admin/cars')}}" class="ml-1 text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular md:ml-2">Cars</a>
                </div>
                </li>
            </ul>
        </nav>
        <i data-modal-toggle="add-car"  class=' cursor-pointer bx bxs-plus-circle text-accent-regular text-4xl mb-4 sm:mb-6 lg:mb-7'></i>
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
        
        <table id="arkilla-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
           
            <thead class=" text-gray-700 uppercase ">
                <tr class="border-y">
                    <th scope="col" class="py-3 px-6 ">
                       Car ID
                    </th>
                    <th scope="col" class="py-3 px-6 whitespace-nowrap">
                        Name of car
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Car image</span>   
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">View details</span>  
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
             
               @foreach($cars as $car)    
              
                <tr class="bg-white border-b  hover:bg-gray-50  ">
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                        {{'#'.$car['id']}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                        {{$car['name']}}
                    </td>
                    <td class="p-4">
                        <div class="w-32 mx-auto overflow-hidden rounded-lg">
                        <img src="{{url('admins/images/cars/main/'.$car['main_photo'])}}" alt="Car photo">
                        </div>
                      
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex justify-center">
                           
                            <button  data-modal-toggle="{{'view-car'.$car['id']}}" class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                        </div>
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                    <div class="py-6">
                            @if ($car['status'] === 1) 
                            <a id="car-{{$car['id']}}" car_id="{{$car['id']}}" class="updateCarStatus"><i status="Active" class='bx bxs-check-circle text-4xl text-accent-regular cursor-pointer'></i></a>    
                            @else 
                            <a id="car-{{$car['id']}}" car_id="{{$car['id']}}" class="updateCarStatus"><i status="Inactive"  class='bx bxs-x-circle text-4xl text-accent-regular cursor-pointer'></i></a>
                            @endif
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <a car="{{ $car['name'] }}" moduleid="{{$car['id']}}" class="confirmDeleteCar">
                            <i class='bx bxs-trash text-4xl cursor-pointer text-accent-regular '></i>
                            </a>
                            <i id="{{ $car['id'] }}" car="{{$car['name']}}" data-info="{{json_encode($car)}}" data-modal-toggle="edit-car"  class='edit bx bxs-edit ml-4 text-4xl cursor-pointer text-accent-regular'></i>
                        </div>
                    </td>
                </tr>
                @include('admin.cars.admin-view-car-details')
            @endforeach
                
            </tbody>
        </table>
    </div>
</div>

@include('admin.cars.admin-add-car')
@include('admin.cars.admin-edit-car')





