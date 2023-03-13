<div class="p-4 sm:p-6 lg:p-14 lg:pt-7 min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]">

    <nav class="hidden sm:flex mb-4 sm:mb-6 lg:mb-7" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
        <a href="{{url('admin/dashboard')}}" class="inline-flex items-center text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1 mr-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z"/></svg>
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
           
            <a href="{{url('admin/admins')}}" class="ml-1 text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular md:ml-2">Admins</a>
        </div>
        </li>
    </ol>
    </nav>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
        
        <table id="arkilla-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
           
            <thead class=" text-gray-700 uppercase ">
                <tr class="border-y">
                    
                    <th scope="col" class="py-3 px-6 whitespace-nowrap">
                        Admin name
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
                        <a before="Active" id="admin-{{$admin['id']}}" admin_id="{{$admin['id']}}" class="updateAdminStatus block  w-fit cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative "><svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg></a>    
                        @else 
                        <a before="Inactive" id="admin-{{$admin['id']}}" admin_id="{{$admin['id']}}" class="updateAdminStatus block  w-fit cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative "><svg status="Inactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#e84949" fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94L8.28 7.22Z" clip-rule="evenodd"/></svg></a>
                        @endif
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center space-x-3 py-6">
                            <a before="Delete" module="admin" admin-type="{{$admin['type']}}"  moduleid="{{$admin['id']}}" class="confirmDelete cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413Q17.825 21 17 21Zm2-4h2V8H9Zm4 0h2V8h-2Z"/></svg></a>
                            
                            <a before="Edit" id="{{ $admin['id'] }}" admin="{{$admin['first_name'].' '.$admin['last_name']}}" data-info="{{json_encode($admin)}}" data-modal-toggle="edit-admins"  class="edit-admin ml-4  cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" class="mb-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M5 23.7q-.825 0-1.413-.588Q3 22.525 3 21.7v-14q0-.825.587-1.413Q4.175 5.7 5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.587 1.412q-.588.588-1.413.588Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.637.438q-.363.162-.763.162H10q-.425 0-.712-.287Q9 17.125 9 16.7v-2.425q0-.4.15-.763q.15-.362.425-.637Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6q.837 0 1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8Z"/></svg></a>
                        </div>
                    </td>
                </tr>
                
               
                @endforeach
              

            
                
            </tbody>
        </table>
    </div>
</div>
@include('admin.admins.admin-edit-admins')




