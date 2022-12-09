 <!-- Navbar -->
<nav id="header" class="relative px-4 md:px-12 flex justify-between items-center bg-white shadow-sm">
    <a class="home flex items-center text-3xl font-bold leading-none"  href="javascript:void(0)">
        <img src="{{url('front/images/Chesca_logo.svg')}}" class="h-20 md:h-[5.5rem]" alt="Chesca Logo">
    </a>
    <!-- menu icon -->
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center p-3 focus:outline-none focus:text-gray-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-justified" width="30" height="30" 
        viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="12" x2="20" y2="12" />
            <line x1="4" y1="18" x2="16" y2="18" />
        </svg>
        </button>
    </div>
    <!-- Nav List -->
    <ul class="nav-list-container">
        <li>
        <a class="home nav-list hover-nav" href="{{url('/')}}">Home</a>
        </li>
        <li>
        <a class="cars nav-list hover-nav" href="{{url('/cars')}}">Cars</a>    
        </li>
        <li>
        <a class="about nav-list hover-nav" href="{{url('/about')}}">About Us</a>
        </li>
        <li>
        <a class="contact nav-list hover-nav" href="{{url('/contact')}}">Contacts</a>
        </li>
    </ul>
    <!-- Login and sign up button -->
    <div class="hidden lg:flex justify-between">
        
        @if (!empty(Auth::user()->email))     
        <!-- Profile -->
        <div class="flex items-center md:order-2 mr-[1rem]">
            <button type="button" class="transform active:scale-75 transition-transform duration-500 text-sm " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <div class="inline-flex overflow-hidden relative justify-center items-center w-10 h-10 bg-gray-200 ring-2 ring-gray-300 rounded-full">
                <span class="font-medium text-gray-600">{{Session::get('initials')}}</span>
            </div>

            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-200 px-2 rounded shadow-md" id="user-dropdown">
            <div class="px-3 py-5">
                <span class="block text-xl font-semibold text-gray-900 capitalize">{{Session::get('fullname')}}</span>
            </div>
            <ul class="pt-4 pb-2" aria-labelledby="user-menu-button">
                <li>
                    <a href="#" class="user-menu-list flex justify-between items-center">
                        <span class="flex-1 whitespace-nowrap">
                        <i class='bx bx-car text-xl align-bottom text-accent-regular'></i>
                            Reserved Car</span>
                        <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-accent-regular bg-accent-verylight rounded-full">3</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('profile')}}" class="user-menu-list flex items-center ">
                    <i class='bx bx-user-circle mr-1 text-xl align-bottom text-accent-regular'></i>
                    <span class="whitespace-nowrap">Profile</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        <a href="{{url('arkilla-logout')}}" class="user-menu-list flex items-center">
                        <i class='bx bx-power-off mr-1 text-xl align-bottom text-accent-regular'></i>
                        <span class="whitespace-nowrap ">Log out</span>
                        </a>
                    </form>
                </li>
            </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @else
        <div class="flex justify-between gap-3">
            <a href="{{url('/login')}}"><button class="front-login btn-1 btn-non-orange" >Login</button></a>
            <a href="{{url('/signup')}}"><button class="front-signup btn-1 btn-orange-1" >Sign up</button></a>
        </div>
        @endif
    </div>
</nav>
