 <!-- Navbar -->
<nav id="header" class="relative px-4 md:px-12 flex justify-between items-center bg-white shadow-sm">
    <a class="home flex items-center text-3xl font-bold leading-none"  href="{{url('/')}}">
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
        <a class="home nav-list hover-nav " href="{{url('/')}}">Home</a>
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
                        <a href="{{url('reserved-car')}}" class="user-menu-list flex justify-between items-center">
                            <span class="flex-1 whitespace-nowrap flex gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M6 19v1q0 .425-.287.712Q5.425 21 5 21H4q-.425 0-.712-.288Q3 20.425 3 20v-8l2.1-6q.15-.45.538-.725Q6.025 5 6.5 5h11q.475 0 .863.275q.387.275.537.725l2.1 6v8q0 .425-.288.712Q20.425 21 20 21h-1q-.425 0-.712-.288Q18 20.425 18 20v-1Zm-.2-9h12.4l-1.05-3H6.85Zm1.7 6q.625 0 1.062-.438Q9 15.125 9 14.5t-.438-1.062Q8.125 13 7.5 13t-1.062.438Q6 13.875 6 14.5t.438 1.062Q6.875 16 7.5 16Zm9 0q.625 0 1.062-.438Q18 15.125 18 14.5t-.438-1.062Q17.125 13 16.5 13t-1.062.438Q15 13.875 15 14.5t.438 1.062Q15.875 16 16.5 16Z"/></svg>
                                Reserved Car</span>
                                @if (Session::get('carBooked') > 0)
                                    
                                <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-accent-regular bg-accent-verylight rounded-full">{{Session::get('carBooked')}}</span>
                                
                                @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{url('profile')}}" class="user-menu-list flex items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="#e84949"><path fill-rule="evenodd" d="M24 42c9.941 0 18-8.059 18-18S33.941 6 24 6S6 14.059 6 24s8.059 18 18 18Zm0 2c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" clip-rule="evenodd"/><path d="M12 35.63c0-1.033.772-1.906 1.8-2.02c7.715-.854 12.72-.777 20.418.019a1.99 1.99 0 0 1 1.108 3.472c-9.085 7.919-14.277 7.81-22.686.008c-.41-.38-.64-.92-.64-1.478Z"/><path fill-rule="evenodd" d="M34.115 34.623c-7.637-.79-12.57-.864-20.206-.019A1.028 1.028 0 0 0 13 35.631c0 .286.119.557.32.745c4.168 3.866 7.326 5.613 10.413 5.624c3.098.011 6.426-1.722 10.936-5.652a.99.99 0 0 0-.554-1.724ZM13.69 32.616c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 1.662 5.221c-4.575 3.988-8.385 6.16-12.257 6.145c-3.883-.014-7.525-2.223-11.766-6.158A3.018 3.018 0 0 1 11 35.63a3.028 3.028 0 0 1 2.69-3.015Z" clip-rule="evenodd"/><path d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0Z"/><path fill-rule="evenodd" d="M24 26a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm0 2a8 8 0 1 0 0-16a8 8 0 0 0 0 16Z" clip-rule="evenodd"/></g></svg>
                        <span class="whitespace-nowrap ml-1">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('frequently-asked-questions')}}" class="user-menu-list flex items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#e84949" d="M18 15H6l-4 4V3a1 1 0 0 1 1-1h15a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1m5-6v14l-4-4H8a1 1 0 0 1-1-1v-1h14V8h1a1 1 0 0 1 1 1M8.19 4c-.87 0-1.57.2-2.11.59c-.52.41-.78.98-.77 1.77l.01.03h1.93c.01-.3.1-.53.28-.69a1 1 0 0 1 .66-.23c.31 0 .57.1.75.28c.18.19.26.45.26.75c0 .32-.07.59-.23.82c-.14.23-.35.43-.61.59c-.51.34-.86.64-1.05.91C7.11 9.08 7 9.5 7 10h2c0-.31.04-.56.13-.74c.09-.18.26-.36.51-.52c.45-.24.82-.53 1.11-.93c.29-.4.44-.81.44-1.31c0-.76-.27-1.37-.81-1.82C9.85 4.23 9.12 4 8.19 4M7 11v2h2v-2H7m6 2h2v-2h-2v2m0-9v6h2V4h-2Z"/></svg>
                        <span class="whitespace-nowrap ml-1">FAQs</span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            <a href="{{url('arkilla-logout')}}" class="user-menu-list flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2a9.985 9.985 0 0 1 8 4h-2.71a8 8 0 1 0 .001 12h2.71A9.985 9.985 0 0 1 12 22zm7-6v-3h-8v-2h8V8l5 4l-5 4z"/></svg>
                            <span class="whitespace-nowrap ml-1">Log out</span>
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
