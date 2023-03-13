
    <div   class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  overflow-y-auto overflow-x-hidden flex justify-center items-center p-4 lg:p-16 w-full  ">
        <div class="relative w-full max-w-3xl m-auto bg-white rounded-lg shadow-lg border border-gray-100">
                
                <div class="flex  items-center justify-end gap-1 sm:gap-4 px-4 pt-4 pb-0 rounded-t  ">
                    
                    <button data-modal-toggle="edit-profile" type="button" class="text-xs whitespace-nowrap btn-orange-sidebar   w-[fit-content]">
                    Edit Profile
                    </button>
                    <button data-modal-toggle="update-password" type="button" class="text-xs whitespace-nowrap btn-change-password ">
                    Edit Password
                    </button>
                </div>
            
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-8 gap-6">
                        <div class="col-span-8 ">
                            <h2  class="block mb-2 text-lg font-bold text-accent-regular "> {{Auth::guard('admin')->user()->first_name.' '.Auth::guard('admin')->user()->last_name}}</h2>
                        </div>
                       
                        <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Email: <span class="font-semibold">{{Auth::guard('admin')->user()->email}}</span></p>
                        </div>
                        <div class="col-span-8 sm:col-span-4">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Address: <span class="font-semibold">{{ $owner[0]['address'] }}</span></p>
                        </div>  
                        <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Contact: <span class="font-semibold">{{ $owner[0]['contact'] }}</span></p>
                        </div>
                        <div class="col-span-8 sm:col-span-4">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Birthdate: <span class="font-semibold">{{ $owner[0]['birthdate'] }}</span></p>
                        </div>
                      
                        <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">License</p>
                           <a class="zoomable-image" href="data:image/jpeg;base64,{{$owner[0]['license']}}" target="_blank"> <img src="data:image/jpeg;base64,{{$owner[0]['license']}}" alt="license"> </a>
                        </div> 
                   
                        
                        <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Valid ID: <span class="font-semibold">{{ $owner[0]['valid_id'] }}</span></p>
                           <a class="zoomable-image" href="data:image/jpeg;base64,{{$owner[0]['valid_id_file']}}" target="_blank"> <img src="data:image/jpeg;base64,{{$owner[0]['valid_id_file']}}" alt="ID"> </a>
                        </div>  
                    </div>
                </div>
                
                <div class="flex items-center  space-x-2 rounded-b ">
                    
                </div>
    
        </div>
    </div>
    @include('owner.profile.owner-edit-profile')
    @include('owner.profile.owner-change-password')
