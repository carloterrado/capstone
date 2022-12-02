

  <div class="navbar-menu hidden relative z-50 w-[20rem] " aria-label="Sidebar">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 overflow-y-auto flex flex-col w-[18rem] max-w-s py-4 px-3 bg-white rounded shadow-xl">
          <ul class="space-y-1">
          
            <div class="navbar-close flex justify-end mb-4 px-3">
              <button type="button" class="text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </div>
          
            <div class="">
              <li class="flex justify-evenly items-center">
                  <div class="inline-flex overflow-hidden relative justify-center items-center w-12 h-12 bg-gray-200 ring-2 ring-gray-300 rounded-full">
                    <span class="font-medium text-gray-600 ">{{Session::get('initials')}}</span>
                  </div>
                  <div  class="p-2 text-base font-semibold text-gray-900 rounded-lg capitalize">{{Session::get('fullname')}}</div>
                </li>
                <li>
                  <a href="#" class="sidebar-hover mt-8 ">
                      <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                  </a>
                </li>
            </div>
          </ul>
       
    
          <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
              <li>
                <a href="{{url('admin/dashboard')}}" class="sidebar-list sidebar-hover">
                    <span class="ml-3"><i class='bx bx-grid-alt mr-1 text-xl align-bottom'></i>Dashboard</span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><i class='bx bx-car mr-1 text-xl align-bottom'></i>Car Management</span>
                    <i class='bx bx-chevron-right text-2xl font-light rotate-90'></i>
                </a>
                <ul class="sub-menu hidden">
                  <li>
                    <a href="#" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">car types</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/cars')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">cars</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/owner-cars')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">owner cars</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/car-request')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">car request</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/car-declined')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">decline cars</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><i class='bx bx-group mr-1 text-xl align-bottom'></i>Admin Management</span>
                    <i class='bx bx-chevron-right rotate-90 text-2xl font-light'></i>
                </a>
                <ul class="sub-menu hidden">
                  <li>
                    <a href="{{url('admin/all-admins')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">all admins</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/admins')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">admins</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/staff')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">staff</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/owners')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">owners</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/new-owners')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">new owners</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/declined-owners')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">declined owners</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><i class='bx bx-user mr-1 text-xl align-bottom'></i>User Management</span>
                    <i class='bx bx-chevron-right rotate-90 text-2xl font-light'></i>
                </a>
                <ul class="sub-menu hidden">
                  <li>
                    <a href="{{url('admin/users')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">users</span>
                    </a>
                  </li>

                </ul>
              </li>
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><i class='bx bx-cog mr-1 text-xl align-bottom'></i>Settings</span>
                    <i class='bx bx-chevron-right rotate-90 text-2xl font-light'></i>
                </a>
                <ul class="sub-menu hidden">
                  <li>
                    <a href="javascript:void(0)" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">update details</span>
                    </a>
                  </li>
                  <li data-modal-toggle="update-password">
                    <a href="javascript:void(0)" class="sidebar-list sidebar-hover flex justify-between" >
                      <span class="ml-12">update password</span>
                    </a>
                  </li>
                </ul>
              </li>
             
          </ul>
        
          <div class=" mt-12 px-3">
            <div class="pt-6">
              <a href="{{url('admin/logout')}}">
              <button class="btn-orange-sidebar">Log out</button>
              </a>
            </div>
          </div>
          
        </nav>
  </div>
    


@include('admin.admin-change-password')
