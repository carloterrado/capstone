<div class="flex justify-center h-max relative p-4 lg:p-0">
    <div class="absolute inset-0 -z-10 lg:relative  lg:w-2/3">
        <img src="{{ url('front/images/resized-road.jpg') }}" class="absolute inset-0 w-full h-full object-cover -z-10"
            alt="">
        <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40 ">
            <div>
                <h2 class="text-4xl font-bold text-white">Welcome to CCH Car Rentals</h2>


            </div>
        </div>
    </div>



    <div class="relative bg-white flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
        @include('message.loading')
        <div class="flex-1">
            <div class="text-center">
                @include('message.session-error')
                @include('message.session-success')
                @include('message.ajax-error')
                @include('message.ajax-success')

                <h2 class="text-4xl font-bold text-center mt-6"><img class="mx-auto"
                        src="{{ url('front/images/Chesca_logo.svg') }}" alt=""></h2>
                <p class="mt-3 text-gray-500">Create your car owner account now, it's free.</p>

                <div id="error-container" class="hidden">
                    <div class="flex p-4 mb-2 mt-4 bg-red-100 rounded-lg " role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Error</span>
                        <div id="error-message" class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
                            data-dismiss-target="#error-container" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="success-container" class="hidden">
                    <div class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Hi, </span>
                        <div id="success-message" class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                            data-dismiss-target="#success-container" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <form id="owner-signup-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="sm:flex justify-between">
                        <div class="relative mt-4">
                            <input type="text" id="owner-signup-first-name" name="owner-signup-first-name"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                                placeholder=" " />
                            <label id="owner-signup-first-name-error" for="owner-signup-first-name"
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">First
                                Name</label>
                        </div>
                        <div class="relative mt-4">
                            <input type="text" id="owner-signup-last-name" name="owner-signup-last-name"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                                placeholder=" " />
                            <label id="owner-signup-last-name-error" for="owner-signup-last-name"
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Last
                                Name</label>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="relative mt-4">
                        <input type="text" id="owner-signup-email" name="owner-signup-email"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                            placeholder=" " />
                        <label id="owner-signup-email-error" for="owner-signup-email"
                            class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                          peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                    </div>


                    <!-- Birthdate & contact num -->
                    <div class="sm:flex justify-between">
                        <div class="relative mt-4">
                            <input type="text" id="owner-signup-birthdate" name="owner-signup-birthdate"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                                placeholder=" " />
                            <label id="owner-signup-birthdate-error" for="owner-signup-birthdate"
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Birthdate
                                (dd/mm/yyyy)</label>
                        </div>

                        <div class="relative mt-4">
                            <input type="text" id="owner-signup-contact" name="owner-signup-contact"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                                placeholder=" " />
                            <label id="owner-signup-contact-error" for="owner-signup-contact"
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Contact
                                Number</label>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="relative mt-4">
                        <input type="text" id="owner-signup-address" name="owner-signup-address"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                            placeholder=" " />
                        <label id="owner-signup-address-error" for="owner-signup-address"
                            class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                          peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Address</label>
                    </div>

                    <!-- Password -->
                    <div class="sm:flex justify-between">
                        <div class="relative mt-4">
                            <input type="password" id="owner-signup-password" name="owner-signup-password"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                                placeholder=" " />
                            <label id="owner-signup-password-error" for="owner-signup-password"
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Password</label>
                        </div>
                        <div class="relative mt-4">
                            <input type="password" id="owner-signup-confirm-password"
                                name="owner-signup-confirm-password"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer"
                                placeholder=" " />
                            <label id="owner-signup-confirm-password-error" for="owner-signup-confirm-password"
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Confirm
                                Password</label>
                        </div>
                    </div>

                    <!-- Driver's License Input File -->
                    <div class="block mt-6">
                        <label id="owner-signup-license-error" for="owner-signup-license"
                            class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500">Driver's License</label>
                        <input id="owner-signup-license" name="owner-signup-license" type="file"
                            class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="file_input_help">
                    </div>

                    <!-- Valid id Input File -->
                    <!-- Dropdown -->
                    <div class="block mt-4">
                        <div class="relative mb-2">
                            <select id="owner-signup-valid-id" name="owner-signup-valid-id"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option disabled selected></option>
                                <option value="SSS ID" class=" cursor-pointer">SSS ID</option>
                                <option value="PhilHealth ID" class="cursor-pointer">PhilHealth ID</option>
                                <option value="PRC ID" class=" cursor-pointer">PRC ID</option>
                                <option value="Passport" class=cursor-pointer">Passport</option>
                            </select>
                            <label id="owner-signup-valid-id-error" for="owner-signup-valid-id"
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Choose
                                one valid id</label>
                        </div>

                        <div class="block w-full ">
                            <label id="owner-signup-id-file-error" for="owner-signup-id-file"
                                class=" hidden pb-1 text-sm font-semibold lg:pl-2 text-gray-500"></label>
                            <input id="owner-signup-id-file" name="owner-signup-id-file"
                                class="w-full mt-2 text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                aria-describedby="file_input_help" type="file">
                        </div>
                    </div>


                    <label id="owner-signup-terms-error" for="owner-signup-terms"
                        class=" hidden pb-1 text-sm font-semibold lg:pl-2 text-[lightcoral]"></label>
                    <div class="flex items-center mt-4">
                        <input id="owner-signup-terms" name="owner-signup-terms" value="agree" type="checkbox"
                            class="w-4 h-4 text-accent-regular bg-gray-100 rounded border-gray-300 focus:ring-0">
                        <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a
                                href="javascript:void(0)" data-modal-toggle="terms-and-conditions"
                                class="text-accent-regular  hover:underline">terms and conditions</a>.</label>
                    </div>

                    <div class="mt-4 mb-6">
                        <label id="owner-signup-submit-form-error" for="owner-signup-id-file"
                            class=" hidden pb-1 text-sm font-semibold lg:pl-2 text-[lightcoral]"></label>
                        <button type="submit" class="btn-orange-login mt-4 scale-100">
                            Submit
                        </button>
                    </div>

                </form>
                <p class="mt-4 text-sm text-center text-gray-400 mb-6">Have an account already? <a
                        href="{{ url('admin/login') }}"
                        class="text-accent-regular focus:outline-none focus:underline hover:underline">Login</a>.</p>

            </div>
        </div>
    </div>
</div>
@include('front.terms-and-conditions')
