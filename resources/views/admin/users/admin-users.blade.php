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
                <span class="ml-1 text-xs sm:text-base  font-bold text-gray-500 md:ml-2">User Management</span>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            
                <a href="{{url('admin/users')}}" class="ml-1 text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular md:ml-2">Users</a>
            </div>
        </li>
    </ol>
    </nav>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
        
        <table id="arkilla-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
           
            <thead class=" text-gray-700 uppercase ">
                <tr class="border-y">
                   
                    <th scope="col" class="py-3 px-6 ">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6 ">
                        User name
                    </th>
                    
                    <th scope="col" class="py-3 px-6">
                        <span class="block text-center">Details</span>  
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
             
                @foreach($users as $user) 
                
                    <tr class="bg-white border-b  hover:bg-gray-50  ">
                        
                        <td class="p-4 px-6  font-semibold text-gray-900">
                        {{'#'.$user['id']}}
                        </td>
                        <td class="p-4 px-6  font-semibold text-gray-900">
                        {{$user['first_name'].' '.$user['last_name']}}
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex justify-center py-6">
                                
                                <button data-modal-toggle="{{'user'.$user['id']}}"   class="details btn-1 bg-accent-regular  w-[fit-content]   text-white whitespace-nowrap">View Details</button>
                            </div>
                        </td>
                        <td class="py-4 px-6 font-semibold text-gray-900 ">
                            @if ($user['status'] === 1) 
                            <a before="Active"  user_id="{{$user['id']}}" class="updateUserStatus block  w-fit cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative"><svg status="Active" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"/></svg></a>    
                            @else 
                            <a before="Inactive" user_id="{{$user['id']}}" class="updateUserStatus block  w-fit cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative"><svg status="Inactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#e84949" fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94L8.28 7.22Z" clip-rule="evenodd"/></svg></a>
                            @endif
                        </td>
                       
                        <td class="py-4 px-6">
                        <div class="flex items-center space-x-3 py-6">
                        <a before="Delete" module="user" admin-type="user"  moduleid="{{$user['id']}}" class="confirmDelete cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[102%]  before:right-1/2 before:translate-x-1/2  before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413Q17.825 21 17 21Zm2-4h2V8H9Zm4 0h2V8h-2Z"/></svg></a>
                        </div>
                        </td>
                    </tr>

                    
                    <div id="{{'user'.$user['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full  rounded-lg">
                        <div class="relative w-full max-w-2xl m-auto bg-white rounded-lg">
                            
                            <form  class="relative bg-white rounded-lg shadow">
                                
                                <div class="flex justify-between items-start p-4 rounded-t ">
                                    <h3 class="text-xl font-semibold text-gray-900 ">
                                        User details
                                    </h3>
                                    <button before="Close" data-modal-toggle="{{'user'.$user['id']}}"  type="button" class="close text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center font-semibold before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:top-1/2 before:-translate-y-1/2  before:right-[102%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative" >
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                    </button>
                                </div>
                            
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Name: <span class="font-semibold">{{$user['first_name'].' '.$user['last_name']}}</span></p>
                                        </div>
                                    
                                        <div class="col-span-6 sm:col-span-3">
                                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Email: <span class="font-semibold">{{$user['email']}}</span></p>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Contact: <span class="font-semibold">{{$user['contact']}}</span></p>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Birthdate: <span class="font-semibold">{{$user['birthdate']}}</span></p>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Address: <span class="font-semibold">{{$user['address']}}</span></p>
                                        </div>  
                                        <div class="col-span-6 sm:col-span-3">
                                        
                                        </div> 
                                       
                                    </div>
                                </div>
                                
                                <div class="flex items-center p-6 space-x-2 rounded-b ">
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                        
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>




