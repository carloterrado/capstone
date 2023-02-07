
    <div   class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)] overflow-y-auto overflow-x-hidden flex justify-center items-center p-4 lg:p-16 w-full  ">
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
                        <div class="col-span-8">
                            <h2  class="block mb-2 text-lg font-bold text-accent-regular "> {{Auth::user()->first_name.' '.Auth::user()->last_name}}</h2>
                        </div>
                         
                       
                        <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Email: <span class="font-semibold">{{Auth::user()->email}}</span></p>
                        </div>
                        <div class="col-span-8 sm:col-span-4">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Address: <span class="font-semibold">{{Auth::user()->address}}</span></p>
                        </div>  
                        <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Contact: <span class="font-semibold">{{Auth::user()->contact}}</span></p>
                        </div>
                        <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Birthdate: <span class="font-semibold">{{Auth::user()->birthdate}}</span></p>
                        </div>
                        <!-- <div class="col-span-8 sm:col-span-4">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Valid ID: <span class="font-semibold">{{Auth::user()->valid_id}}</span></p>
                           <a href="{{url('front/images/users/id/'.Auth::user()->valid_id_file)}}" target="_blank"> <img src="{{url('front/images/users/id/'.Auth::user()->valid_id_file)}}" alt="license"> </a>
                        </div> -->
                        
                        
                    </div>
                </div>
                
                <div class="flex items-center  space-x-2 rounded-b ">
                    
                </div>
    
        </div>
    </div>
    @include('front.profile.front-edit-profile')
    @include('front.profile.front-change-password')
