 <!-- Side navbar -->
 <div class="navbar-menu  relative z-50 w-[20rem] hidden lg:hidden" aria-label="Sidebar">
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 overflow-y-auto flex flex-col w-[18rem] max-w-s py-4 px-3 bg-white rounded shadow-xl">
      <!-- Logo & Exit Button -->
      <div class="navbar-close flex justify-end mb-4 px-3">
          <button type="button" class="text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
            <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
      </div>
      @if (!empty(Auth::user()->email))  
      <ul class="space-y-1">
        <!-- Username and profile picture -->
          <li class="flex justify-evenly items-center">
            <div class="inline-flex overflow-hidden relative justify-center items-center w-12 h-12 bg-gray-200 ring-2 ring-gray-300 rounded-full">
              <span class="font-medium text-gray-600">{{Session::get('initials')}}</span>
            </div>
            <div href="#" class="p-2 text-base font-semibold text-gray-900 rounded-lg capitalize">{{Session::get('fullname')}}</div>
          </li>
          <li>
            <a href="{{url('profile')}}" class="sidebar-hover mt-8 ">
                <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
            </a>
          </li>
          <li>
            <a href="{{url('reserved-car')}}" class="sidebar-hover">
                <span class="flex-1 ml-3 whitespace-nowrap">Reserved Car</span>
                @if (Session::get('carBooked') > 0)
                <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-accent-regular bg-accent-verylight rounded-full">{{Session::get('carBooked')}}</span>
                @endif
            </a>
          </li>
      </ul>
      @endif
      
      <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
          <li>
            <a href="{{url('/')}}" class="home navbar-close sidebar-list sidebar-hover">
                <span class="ml-3">Home</span>
            </a>
          </li>
          <li>
            <a href="{{url('/cars')}}" class="cars navbar-close sidebar-list sidebar-hover">
                <span class="ml-3">Cars</span>
            </a>
          </li>
          <li>
            <a href="{{url('/about')}}" class="about navbar-close sidebar-list sidebar-hover">
                <span class="ml-3">About</span>
            </a>
          </li>
          <li>
            <a href="{{url('/contact')}}" class="contact navbar-close sidebar-list sidebar-hover">
                <span class="ml-3">Contacts</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)" class="navbar-close sidebar-list sidebar-hover">
                <span class="ml-3">FAQs</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)" class="navbar-close sidebar-list sidebar-hover">
                <span class="ml-3">Terms & Conditions</span>
            </a>
          </li>
      </ul>
      <!-- Side Nav Bar Login Button -->
      <div class=" mt-12 px-3">
        @if (!empty(Auth::user()->email))   
        <div class="pt-6">
          <a href="{{url('/arkilla-logout')}}"><button class="btn-orange-sidebar">Log out</button></a>
        </div>
        @else
        <div class="flex flex-col justify-between gap-3">
          <a href="{{url('/login')}}"><button class="front-login w-full navbar-close btn-1 btn-non-orange">Login</button></a>
          <a href="{{url('/signup')}}"><button class="front-signup w-full navbar-close btn-1 btn-orange-1">Sign up</button></a>
        </div>
        @endif
      </div>  
    </nav>
  </div>
</div>