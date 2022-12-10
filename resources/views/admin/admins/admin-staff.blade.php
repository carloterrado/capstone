<div class="p-4 sm:p-6 lg:p-14 lg:pt-7 min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]">

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
            <span class="ml-1 text-xs sm:text-base  font-bold text-gray-500 md:ml-2">Admin Management</span>
        </div>
        </li>
        <li aria-current="page">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
           
            <a href="{{url('admin/staff')}}" class="ml-1 text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular md:ml-2">Staff</a>
        </div>
        </li>
    </ol>
    </nav>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
        
        <table id="arkilla-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
           
            <thead class=" text-gray-700 uppercase ">
                <tr class="border-y">
                   
                    <th scope="col" class="py-3 px-6 whitespace-nowrap">
                        Staff name
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
            @foreach ($admins as $admin)
                   
                   <tr class="bg-white border-b  hover:bg-gray-50  ">
                       <td class="p-4 px-6  font-semibold text-gray-900">
                       {{$admin['first_name'].' '.$admin['last_name']}}
                       </td>
                      
                       <td class="py-4 px-6 font-semibold text-gray-900 ">
                            @if ($admin['status'] === 1) 
                            <a id="admin-{{$admin['id']}}" admin_id="{{$admin['id']}}" class="updateAdminStatus"><i status="Active" class='bx bxs-user-check text-4xl text-accent-regular cursor-pointer'></i></a>    
                            @else 
                            <a id="admin-{{$admin['id']}}" admin_id="{{$admin['id']}}" class="updateAdminStatus"><i status="Inactive"  class='bx bxs-user-x text-4xl text-accent-regular cursor-pointer'></i></a>
                            @endif
                       </td>
                       <td class="py-4 px-6">
                           <div class="flex items-center space-x-3 py-6">
                           <a module="admin" admin-type="{{$admin['type']}}"  moduleid="{{$admin['id']}}" class="confirmDelete"><i  class='bx bxs-trash text-3xl text-accent-regular cursor-pointer '></i></a>
                           </div>
                       </td>
                   </tr>
                   
                  
                   @endforeach 
            </tbody>
        </table>
    </div>
</div>




