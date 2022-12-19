<div class="p-4 sm:p-6 lg:p-14 lg:pt-7 min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]">
    <div class="flex justify-end sm:justify-between">
        <nav class="hidden sm:flex mb-4 sm:mb-6 lg:mb-7" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
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
            
                <a href="{{url('admin/car-types')}}" class="ml-1 text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular md:ml-2">Car Types</a>
            </div>
            </li>
        </ol>
        </nav>
        <i data-modal-toggle="add-cartype"  class=' cursor-pointer bx bxs-plus-circle text-accent-regular text-4xl mb-4 sm:mb-6 lg:mb-7'></i>
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
        
        <table id="arkilla-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
           
            <thead class=" text-gray-700 uppercase ">
                <tr class="border-y">
                    <th scope="col" class="py-3 px-6 whitespace-nowrap">
                        Car Types ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Car Types  
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
        
                   
              @foreach($cartypes as $cartype)
                <tr class="bg-white border-b  hover:bg-gray-50  ">
                    <td class="py-4  font-semibold text-gray-900 ">
                       {{'# '. $cartype['id'] }}
                    </td>
                    <td class="p-4 font-semibold text-gray-900">
                        {{ $cartype['name'] }}
                    </td>
                   
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                        <div class="py-6">
                            @if ($cartype['status'] === 1) 
                            <a id="cartype-{{$cartype['id']}}" cartype_id="{{$cartype['id']}}" class="updateCarTypeStatus"><i status="Active" class='bx bxs-check-circle text-4xl text-accent-regular cursor-pointer'></i></a>    
                            @else 
                            <a id="cartype-{{$cartype['id']}}" cartype_id="{{$cartype['id']}}" class="updateCarTypeStatus"><i status="Inactive"  class='bx bxs-x-circle text-4xl text-accent-regular cursor-pointer'></i></a>
                            @endif
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <a cartype="{{ $cartype['name'] }}" moduleid="{{$cartype['id']}}" class="confirmDeleteCartype">
                            <i class='bx bxs-trash text-4xl cursor-pointer text-accent-regular '></i>
                            </a>
                            <i id="{{ $cartype['id'] }}" cartype="{{$cartype['name']}}" data-modal-toggle="edit-cartype" class='edit-car-type bx bxs-edit ml-4 text-4xl cursor-pointer text-accent-regular'></i>
                        </div>
                    </td>
                </tr>
               
             @endforeach   
               
                
            </tbody>
        </table>
    </div>
</div>
@include('admin.cars.admin-edit-car-types')
@include('admin.cars.admin-add-car-types')




