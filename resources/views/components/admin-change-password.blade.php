<div id="update-password" tabindex="-1" aria-hidden="true" class="hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-full">
    <div class="relative w-full max-w-md h-auto m-auto">
    
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button  type="button" class="close-btn absolute top-3 right-2.5 text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center" data-modal-toggle="update-password">
                <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close Change Password</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base text-gray-900 dark:text-white">Change password</h3>

            
                <div id="error-message" class="hidden p-4 mb-4 bg-red-100 rounded-lg " role="alert">
                <div id="error-text" class="ml-3 text-sm font-medium text-red-700 text-center ">error</div>
                </div>

            
                <div id="success-message" class="hidden p-4 mb-4 bg-green-100 rounded-lg" role="alert">
                <div id="success-text" class="ml-3 text-sm font-medium text-green-700 text-center">succes</div>
                </div>


            
                <form class="space-y-6" method="POST" id="change-pass-form">
                @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{Auth::guard('admin')->user()->email}}</label>
                    </div>
                    <div class="relative">
                        <input type="password" id="current-password" name="current-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="current-password-error" for="current-password" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Current password</label>
                    </div>
                    <div class="relative">
                        <input type="password" id="new-password" name="new-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="new-password-error" for="new-password" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">New password</label>
                    </div>
                    <div class="relative">
                        <input type="password" id="confirm-password" name="confirm-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="confirm-password-error" for="confirm-password" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Confirm password</label>
                    </div>
                    <label id="submit-error" class=" mb-2 text-sm font-medium text-red-700"></label>
                
                    <button type="submit" class="btn-orange-sidebar">submit</button>
                </form>
            </div>
        </div>
    </div>
</div> 