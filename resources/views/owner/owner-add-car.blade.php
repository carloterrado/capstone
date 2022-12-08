<div id="add-car" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg  ">
    <div class="relative w-full max-w-2xl m-auto">
        
        <form id="add-car-form" method="POST" class="relative bg-white rounded-lg shadow ">
            <div class="form-step step-one">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Add Car
                    </h3>
                    <h3 class="text-xl font-semibold text-gray-900 ml-auto ">
                        Step 1
                    </h3>
                    <button data-modal-toggle="add-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-car-name" id="add-car-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-car-name-error" for="add-car-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Car name</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                        <input type="text" id="add-car-type" name="add-car-type" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="add-car-type-error" for="add-car-type" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Car type</label>
                        </div>
                       
                    </div>
                   
                </div>
                <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 "> 
                    <button type="button" class="step-2 details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">Next</button>
                </div>
            </div>

            <div class="form-step step-two hidden">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Add Car
                    </h3>
                    <h3 class="text-xl font-semibold text-gray-900 ml-auto ">
                        Step 2
                    </h3>
                    <button data-modal-toggle="add-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-car-price" id="add-car-price" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-car-price-error" for="add-car-price" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Car price</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                        <input type="text" id="add-car-capacity" name="add-car-capacity" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="add-car-capacity-error" for="add-car-capacity" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Car capacity</label>
                        </div>
                       
                    
                    
                    </div>
                    
                </div>
                <div class="flex items-center justify-between p-6 space-x-2 rounded-b border-t border-gray-200 ">
                    <button type="button" class="step-1 details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="button" class="step-3 btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">Next</button>
                </div>
            </div>
            <div class="form-step step-three hidden">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Add Car
                    </h3>
                    <h3 class="text-xl font-semibold text-gray-900 ml-auto ">
                        Step 3
                    </h3>
                    <button data-modal-toggle="add-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-first-name" id="add-admin-first-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-first-name-error" for="add-admin-first-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">First Name</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                        <input type="text" id="add-admin-last-name" name="add-admin-last-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="add-admin-last-name-error" for="add-admin-last-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-6 space-x-2 rounded-b border-t border-gray-200 ">
                    
                    <button type="button" class="step-2 btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="button" class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>