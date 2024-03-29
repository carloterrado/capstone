

  <div class="navbar-menu hidden relative z-50 w-[20rem] " aria-label="Sidebar">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 overflow-y-auto flex flex-col w-[18rem] max-w-s py-4 px-3 bg-white rounded shadow-xl">
          <ul class="space-y-1">
          
            <div class="navbar-close flex justify-end mb-4 px-3">
              <button type="button" class="text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center"> <span class="sr-only">close</span>
                <svg aria-hidden="true" class="w-3 h-3 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
                  <a href="{{url('admin/profile')}}" class="sidebar-hover mt-8 ml-3 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="mb-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="currentColor"><path fill-rule="evenodd" d="M24 42c9.941 0 18-8.059 18-18S33.941 6 24 6S6 14.059 6 24s8.059 18 18 18Zm0 2c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" clip-rule="evenodd"/><path d="M12 35.63c0-1.033.772-1.906 1.8-2.02c7.715-.854 12.72-.777 20.418.019a1.99 1.99 0 0 1 1.108 3.472c-9.085 7.919-14.277 7.81-22.686.008c-.41-.38-.64-.92-.64-1.478Z"/><path fill-rule="evenodd" d="M34.115 34.623c-7.637-.79-12.57-.864-20.206-.019A1.028 1.028 0 0 0 13 35.631c0 .286.119.557.32.745c4.168 3.866 7.326 5.613 10.413 5.624c3.098.011 6.426-1.722 10.936-5.652a.99.99 0 0 0-.554-1.724ZM13.69 32.616c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 1.662 5.221c-4.575 3.988-8.385 6.16-12.257 6.145c-3.883-.014-7.525-2.223-11.766-6.158A3.018 3.018 0 0 1 11 35.63a3.028 3.028 0 0 1 2.69-3.015Z" clip-rule="evenodd"/><path d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0Z"/><path fill-rule="evenodd" d="M24 26a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm0 2a8 8 0 1 0 0-16a8 8 0 0 0 0 16Z" clip-rule="evenodd"/></g></svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                  </a>
                </li>
            </div>
          </ul>
       
    
          <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <!-- DASH BOARD -->
              <li>
                <a href="{{url('admin/dashboard')}}" class="sidebar-list sidebar-hover">
                    <span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z"/></svg>
                      Dashboard</span>
                </a>
              </li>
            <!-- TRANSACTION MANAGEMENT -->
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" viewBox="0 0 15 15"><path fill="currentColor" d="M10.5 1a1 1 0 0 0-1 1H2v1l1 1l1-1l1 1l1-1l1 1h2.5a1 1 0 0 0 1 1h2a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-2Zm.5 1.5a.5.5 0 0 1 1 0v1a.5.5 0 0 1-1 0v-1ZM2.146 9.354A.5.5 0 0 0 2 9.707V13.5a.5.5 0 0 0 .5.5H4a.5.5 0 0 0 .5-.5V13h6v.5a.5.5 0 0 0 .5.5h1.5a.5.5 0 0 0 .5-.5V9.707a.5.5 0 0 0-.146-.353L12 8.5l-1.354-2.257a.5.5 0 0 0-.43-.243H4.784a.5.5 0 0 0-.429.243L3 8.5l-.854.854ZM11.134 9H3.866l1.2-2h4.868l1.2 2ZM5.5 10.828v.372a.3.3 0 0 1-.3.3H3.3a.3.3 0 0 1-.3-.3v-.834a.3.3 0 0 1 .359-.294l1.82.364a.4.4 0 0 1 .321.392Zm6.5-.34v.712a.3.3 0 0 1-.3.3H9.8a.3.3 0 0 1-.3-.3v-.454a.3.3 0 0 1 .241-.294l1.78-.356a.4.4 0 0 1 .479.392Z"/></svg> 
                      Rentals</span>
                    <svg class="chevron-right rotate-90" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M9.29 6.71a.996.996 0 0 0 0 1.41L13.17 12l-3.88 3.88a.996.996 0 1 0 1.41 1.41l4.59-4.59a.996.996 0 0 0 0-1.41L10.7 6.7c-.38-.38-1.02-.38-1.41.01z"/></svg>
                </a>
                <ul class="sub-menu hidden">
                  <li>
                    <a href="{{url('admin/new-booking')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">new bookings</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/approved-booking')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">approved bookings</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/booking')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">ongoing bookings</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/cancel-booking')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">cancelled bookings</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/booking-history')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">history</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/commission-history')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">commission</span>
                    </a>
                  </li>
                </ul>
              </li>
            <!-- CAR MANAGEMENT -->
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19v1q0 .425-.287.712Q5.425 21 5 21H4q-.425 0-.712-.288Q3 20.425 3 20v-8l2.1-6q.15-.45.538-.725Q6.025 5 6.5 5h11q.475 0 .863.275q.387.275.537.725l2.1 6v8q0 .425-.288.712Q20.425 21 20 21h-1q-.425 0-.712-.288Q18 20.425 18 20v-1Zm-.2-9h12.4l-1.05-3H6.85Zm1.7 6q.625 0 1.062-.438Q9 15.125 9 14.5t-.438-1.062Q8.125 13 7.5 13t-1.062.438Q6 13.875 6 14.5t.438 1.062Q6.875 16 7.5 16Zm9 0q.625 0 1.062-.438Q18 15.125 18 14.5t-.438-1.062Q17.125 13 16.5 13t-1.062.438Q15 13.875 15 14.5t.438 1.062Q15.875 16 16.5 16Z"/></svg> 
                      Car Management</span>
                    <svg class="chevron-right rotate-90" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M9.29 6.71a.996.996 0 0 0 0 1.41L13.17 12l-3.88 3.88a.996.996 0 1 0 1.41 1.41l4.59-4.59a.996.996 0 0 0 0-1.41L10.7 6.7c-.38-.38-1.02-.38-1.41.01z"/></svg>
                </a>
                <ul class="sub-menu hidden">
                  <li>
                    <a href="{{url('admin/car-types')}}" class="sidebar-list sidebar-hover flex justify-between">
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
                      <span class="ml-12">declined cars</span>
                    </a>
                  </li>
                </ul>
              </li>
            <!-- ADMIN MANAGEMENT -->
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><circle cx="14.67" cy="8.3" r="6" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1h13.44Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36Zm-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                      Admin Management</span>
                      <svg class="chevron-right rotate-90" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M9.29 6.71a.996.996 0 0 0 0 1.41L13.17 12l-3.88 3.88a.996.996 0 1 0 1.41 1.41l4.59-4.59a.996.996 0 0 0 0-1.41L10.7 6.7c-.38-.38-1.02-.38-1.41.01z"/></svg>
                </a>
                <ul class="sub-menu hidden">
                  @if (Auth::guard('admin')->user()->type !== 'staff')
                    
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
                  @endif
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
            <!-- USER MANAGEMENT -->
              <li>
                <a href="javascript:void(0)" class="menu sidebar-list sidebar-hover flex justify-between">
                    <span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"/></svg>
                      User Management</span>
                      <svg class="chevron-right rotate-90" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M9.29 6.71a.996.996 0 0 0 0 1.41L13.17 12l-3.88 3.88a.996.996 0 1 0 1.41 1.41l4.59-4.59a.996.996 0 0 0 0-1.41L10.7 6.7c-.38-.38-1.02-.38-1.41.01z"/></svg>
                </a>
                <ul class="sub-menu hidden">
                  <li>
                    <a href="{{url('admin/users')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">users</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('admin/inactive-users')}}" class="sidebar-list sidebar-hover flex justify-between">
                      <span class="ml-12">inactive users</span>
                    </a>
                  </li>

                </ul>
              </li>
              <!-- <li>
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
              </li> -->
             
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
    



