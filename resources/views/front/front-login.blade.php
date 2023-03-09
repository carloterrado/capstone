<!-- Login Form -->

<div class="flex justify-center min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)] relative p-4 lg:p-0">
    
    <div class="absolute lg:relative -z-10  inset-0 bg-cover  lg:w-2/3" >
        <img src="{{url('front/images/resized-road.jpg')}}" class="absolute w-full h-full object-cover inset-0 -z-10" alt="">
        <div class="flex items-center h-full px-20">
            <div>
                <h2 class="text-4xl font-bold text-white">Welcome to CCH Car Rentals</h2>

            </div>
        </div>
    </div>

    <div class="relative bg-white flex items-center w-full max-w-md px-6 m-auto lg:w-2/6">
        @include('message.loading')
        <div class="flex-1">
            <div class="text-center">
                
                @include('message.ajax-success')
                @include('message.ajax-error')
                @include('message.session-success')
                @include('message.session-error')
                @include('message.login-session-error')
               
                <h2 class="text-xl font-bold text-center"><img class="mx-auto h-20" src="{{url('front/images/Chesca_logo.svg')}}" alt=""></h2>
                <p class="mt-3 text-gray-500">Welcome back, please sign to your account</p>
            </div>

            <div class="mt-8">
                <form id="front-login-form"  method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="relative">
                        <input  type="email" id="front-login-email" name="front-login-email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " autocomplete="true"/>
                        <label id="front-login-email-error" for="front-login-email" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Email Address</label>
                    </div>
                  

                    <div class="mt-6">  
                        <div class="relative">
                            <input type="password" id="front-login-password" name="front-login-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " autocomplete=""/>
                            <label id="front-login-password-error" for="front-login-password" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                        </div>
                        <a href="{{url('forgot-password')}}" class="text-xs ml-2 text-gray-400 focus:text-accent-regular hover:text-accent-regular hover:underline">Forgot password?</a>
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

