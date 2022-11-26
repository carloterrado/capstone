<!-- Login Form -->

<div class="flex justify-center lg:min-h-[90vh] relative p-4 lg:p-0">
    
    <div class="absolute lg:relative -z-10  inset-0 bg-cover  lg:w-2/3" >
    <img src="{{url('front/images/road.jpg')}}" class="absolute w-full h-full object-cover inset-0 -z-10" alt="">
        <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
            <div>
                <h2 class="text-4xl font-bold text-white">Brand</h2>

                <p class="max-w-xl mt-3 text-gray-300">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In
                    autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus
                    molestiae
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white flex items-center w-full max-w-md px-6 m-auto lg:w-2/6">
        <div class="flex-1">
            <div class="text-center">
                @if (Session::has('error_message'))
                <div id="alert-2" class="flex p-4 mb-2 mt-4 bg-red-100 rounded-lg " role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Error</span>
                    <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                    {{Session::get('error_message')}}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                @endif
               
                <h2 class="text-4xl font-bold text-center"><img class="mx-auto" src="{{url('front/images/Chesca_logo.svg')}}" alt=""></h2>
                <p class="mt-3 text-gray-500">Welcome back, please sign to your account</p>
            </div>

            <div class="mt-8">
                <form id="front-login-form"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                    <div class="relative">
                        <input type="email" id="front-login-email" name="front-login-email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="front-login-email-error" for="front-login-email" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Email Address</label>
                    </div>
                    </div>

                    <div class="mt-6">  
                    <div class="relative">
                        <input type="password" id="front-login-password" name="front-login-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="front-login-password-error" for="front-login-password" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                    </div>
                    <a href="#" class="text-xs ml-2 text-gray-400 focus:text-accent-regular hover:text-accent-regular hover:underline">Forgot password?</a>
                    </div>
                    </div>

                    <div class="my-6 ">
                        <button type="submit" class="btn-orange-login">
                            Submit
                        </button>
                    </div>

                </form>
               
              
        </div>
    </div>
    </div>
</div>

