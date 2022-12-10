<div class="p-4 sm:p-6 lg:p-14 lg:pt-7">

    <nav class="hidden sm:flex mb-4 sm:mb-6 lg:mb-7" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
        <a href="{{url('admin/dashboard')}}" class="inline-flex items-center text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular"><i class='bx bx-grid-alt mr-1 text-xl'></i>
            Dashboard
        </a>
        </li>
        <li>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            <span class="ml-1 text-xs sm:text-base  font-bold text-gray-500 md:ml-2">Car Management</span>
        </div>
        </li>
        <li aria-current="page">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
           
            <a href="{{url('admin/owner-cars')}}" class="ml-1 text-xs sm:text-base  font-bold text-gray-700 hover:text-accent-regular md:ml-2">Owner Cars</a>
        </div>
        </li>
    </ol>
    </nav>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
        
        <table id="arkilla-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">
           
            <thead class=" text-gray-700 uppercase ">
                <tr class="border-y">
                    <th scope="col" class="py-3 px-6 whitespace-nowrap">
                        Name of car
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Car image</span>   
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">View details</span>  
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
               @for ($i = 1; $i <= 20; $i++)
                   
              
                <tr class="bg-white border-b  hover:bg-gray-50  ">
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                        {{'Sedan Switch'.$i}}
                    </td>
                    <td class="p-4">
                        <div class="w-32 mx-auto">
                        <img src="{{url('front/images/red-car-home.jpg')}}" alt="Apple Watch">
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex justify-center">
                           
                            <button  data-modal-toggle="{{'car'.$i}}" class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                        </div>
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 ">
                        Cancelled
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center space-x-3">
                            <i class='bx bxs-trash text-2xl text-accent-regular '></i>
                        </div>
                    </td>
                </tr>
                
                <div id="{{'car'.$i}}" tabindex="-1" aria-hidden="true" class="close hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full bg-black/50 rounded-lg">
                    <div class="relative w-full max-w-2xl m-auto bg-white">
                        
                        <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            
                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    {{'Edit user'.$i}}
                                </h3>
                                <button data-modal-toggle="{{'car'.$i}}" type="button" class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                            </div>
                          
                            <div class="p-6 space-y-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'first-name-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">First Name</label>
                                        <input type="text" name="{{'first-name-'.$i}}" id="{{'first-name-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Bonnie" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'last-name-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">Last Name</label>
                                        <input type="text" name="{{'last-name-'.$i}}" id="{{'last-name-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Green" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'email-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">{{'Email-'.$i}}</label>
                                        <input type="email" name="{{'email-'.$i}}" id="{{'email-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="example@company.com" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'phone-number-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">Phone Number</label>
                                        <input type="number" name="{{'phone-number-'.$i}}" id="{{'phone-number-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="e.g. +(12)3456 789" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'department-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">Department</label>
                                        <input type="text" name="{{'department-'.$i}}" id="{{'department-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Development" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'company-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">Company</label>
                                        <input type="number" name="{{'company-'.$i}}" id="{{'company-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="123456" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'current-password-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">Current Password</label>
                                        <input type="password" name="{{'current-password-'.$i}}" id="{{'current-password-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="••••••••" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="{{'new-password-'.$i}}" class="block mb-2 text-sm font-medium text-gray-900 ">New Password</label>
                                        <input type="password" name="{{'new-password-'.$i}}" id="{{'new-password-'.$i}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="••••••••" required="">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endfor
              

            
                
            </tbody>
        </table>
    </div>
</div>




