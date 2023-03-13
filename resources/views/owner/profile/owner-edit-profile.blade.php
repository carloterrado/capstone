<?php
   
    $inputDate = explode('-', $owner[0]['birthdate'] ); 
    $birthdate = $inputDate[2].'/'.$inputDate[1].'/'.$inputDate[0];
?>
<div id="edit-profile" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg  ">
    <div class="relative w-full max-w-3xl m-auto">
        @include('message.loading')
        
        <form id="edit-profile-form" method="POST"  enctype="multipart/form-data" class="relative bg-white rounded-lg shadow ">
            @csrf
            
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600 relative">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Edit Profile
                </h3>
                <button data-modal-toggle="edit-profile" type="button" before="Close" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:top-1/2 before:-translate-y-1/2 before:right-[102%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold" >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="px-6">
                
            @include('message.ajax-error')
            @include('message.ajax-success')
          
            </div>
            
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3 relative">
                        <input type="text" name="edit-first-name" id="edit-first-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " value="{{Auth::guard('admin')->user()->first_name}}" >
                        <label id="edit-first-name-error" for="edit-first-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">First Name</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">
                        <input type="text" id="edit-last-name" name="edit-last-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " value="{{Auth::guard('admin')->user()->last_name}}" />
                        <label id="edit-last-name-error" for="edit-last-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Last Name</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative ">
                        <input  type="text" id="edit-birthdate" name="edit-birthdate" value="{{$birthdate}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="edit-birthdate-error" for="edit-birthdate" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Birthdate (dd/mm/yyyy)</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 relative">
                        <input type="text" id="edit-contact" name="edit-contact" value="{{$owner[0]['contact']}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="edit-contact-error" for="edit-contact" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Contact Number</label>
                    </div>
                    <div class="col-span-6 relative">
                        <input type="text" id="edit-address" name="edit-address" value="{{$owner[0]['address']}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="edit-address-error" for="edit-address" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Address</label>
                    </div>
                  
             
                </div>
                <label id="edit-submit-form-error" class=" hidden py-4 text-sm  font-semibold lg:pl-2 text-[lightcoral]"></label>
            </div>
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                 
                <button type="submit" class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">Submit</button>
            </div>
        </form>
    </div>
</div>