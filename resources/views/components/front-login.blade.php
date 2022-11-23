<!-- Login Form -->

<div class="flex justify-center h-[90vh] relative sm:py-6 lg:py-0">
    
    <div class="absolute lg:relative -z-10  inset-0 bg-cover  lg:w-2/3" style="background-image: url(front/images/road.jpg)">
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

    <div class="bg-white flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
        <div class="flex-1">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-center"><img class="mx-auto" src="front/images/Chesca_logo.svg" alt=""></h2>
                <p class="mt-3 text-gray-500">Welcome back, please sign to your account</p>
            </div>

            <div class="mt-8">
                <form>
                    <div>
                    <div class="relative">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label for="floating_outlined" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email Address</label>
                    </div>
                    </div>

                    <div class="mt-6">  
                    <div class="relative">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label for="floating_outlined" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                    </div>
                    <a href="#" class="text-xs ml-2 text-gray-400 focus:text-accent-regular hover:text-accent-regular hover:underline">Forgot password?</a>
                    </div>
            </div>

                    <div class="my-6 ">
                        <!-- <button class="w-full px-4 py-2 tracking-wide btn-orange-login"> -->
                        <button class="btn-orange-login scale-75 sm:scale-100">
                            Submit
                        </button>
                    </div>

                </form>
              
        </div>
    </div>
    </div>
</div>

<div class="min-h-[100vh] grid place-items-center">   
    <form action="{{url('admin/login')}}" method="POST" class="w-[400px] border p-6 rounded-xl">
        @csrf
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        
        <button type="submit" class="btn-1 btn-non-orange">Login</button>
    </form>
</div>
