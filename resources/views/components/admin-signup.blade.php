<!-- Main modal for change password -->
<div id="user-signup" tabindex="-1" aria-hidden="true" class="hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-full">
    <div class="relative w-full max-w-md h-auto m-auto">
      
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button  type="button" class="close-btn absolute top-3 right-2.5 text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center" data-modal-toggle="user-signup">
                <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close User Signup</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base text-gray-900 dark:text-white">Signup</h3>

                <!-- Alert danger -->
                <div id="error-message" class="hidden p-4 mb-4 bg-red-100 rounded-lg " role="alert">
                  <div id="error-text" class="ml-3 text-sm font-medium text-red-700 text-center ">error</div>
                </div>

                <!-- Alert Succes -->
                <div id="success-message" class="hidden p-4 mb-4 bg-green-100 rounded-lg" role="alert">
                  <div id="success-text" class="ml-3 text-sm font-medium text-green-700 text-center">succes</div>
                </div>


                <!-- Form  -->
                <form class="space-y-6" method="POST" id="front-signup-form">
                  @csrf
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                        <input type="text" name="front-signup-name" id="front-signup-name" placeholder="Enter name " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                        <label id="front-signup-name-error" class=" mb-2 text-sm font-medium text-red-700"></label>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="front-signup-email" id="front-signup-email" placeholder="Enter new password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                        <label id="front-signup-email-error" class=" mb-2 text-sm font-medium text-red-700"></label>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="front-signup-password" id="front-signup-password" placeholder="Enter password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                        <label id="front-signup-password-error" class=" mb-2 text-sm font-medium text-red-700"></label>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                        <input type="password" name="front-signup-confirm-password" id="front-signup-confirm-password" placeholder="Enter confirm password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                        <label id="front-signup-confirm-password-error" class=" mb-2 text-sm font-medium text-red-700"></label>
                    </div>
                    <label id="front-signup-submit-error" class=" mb-2 text-sm font-medium text-red-700"></label>
                  
                    <button type="submit" class="btn-orange-sidebar">submit</button>
                </form>
            </div>
        </div>
    </div>
</div> 