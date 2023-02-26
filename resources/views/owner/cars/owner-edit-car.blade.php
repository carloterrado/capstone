
<div id="edit-car" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg">

    <div class="relative w-full max-w-2xl m-auto">
    @include('message.loading')
        
        <form id="edit-car-form"  method="POST" class="relative bg-white rounded-lg shadow ">
            @csrf
        
             <!-- Step 1 -->
            <div class="edit-form-step edit-step-one">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Edit car details
                    </h3>
                    
                    <button data-modal-toggle="edit-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-6 space-y-6">
                  
                    <div class="grid grid-cols-6 gap-6">
                        <input type="hidden" name="edit-admin-car-id" id="edit-admin-car-id">
                        <div class="col-span-6 relative">
                            <input type="text" name="edit-admin-car-name" id="edit-admin-car-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-name-error" for="edit-admin-car-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Brand and Model</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" id="edit-admin-car-plate-number" name="edit-admin-car-plate-number" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="edit-admin-car-plate-number-error" for="edit-admin-car-plate-number" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Plate number</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <select id="edit-admin-set-car-type" name="edit-admin-set-car-type" class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option disabled ></option>
                                @foreach ($cartypes as $cartype )
                                <option value="{{$cartype['id']}}" class="cursor-pointer">{{$cartype['name']}}</option> 
                                @endforeach
                            </select>
                            <label id="edit-admin-set-car-type-error" for="edit-admin-set-car-type" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Car type</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3  relative">
                            <input type="text" name="edit-admin-car-fuel-type" id="edit-admin-car-fuel-type" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-fuel-type-error" for="edit-admin-car-fuel-type" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Fuel Type</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" id="edit-admin-car-capacity" name="edit-admin-car-capacity" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="edit-admin-car-capacity-error" for="edit-admin-car-capacity" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Car capacity</label>
                        </div>
                       
                      
                       
                        <div class="col-span-6">
                            <label id="edit-admin-car-main-photo-error" for="edit-admin-car-main-photo" class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Main car photo</label>
                            <input id="edit-admin-car-main-photo" name="edit-admin-car-main-photo" type="file" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help">
                        </div>
                        <div class="col-span-6">
                            <label id="edit-admin-car-photos-error" for="edit-admin-car-photos" class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Photos of car</label>
                            <input id="edit-admin-car-photos" name="edit-admin-car-photos[]" type="file" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help"  multiple>
                        </div>
                        <div class="col-span-6">
                            <label id="edit-admin-car-description-error" for="edit-admin-car-description" class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500">Description</label>
                            <textarea id="edit-admin-car-description" name="edit-admin-car-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 " placeholder="Write your description here..."></textarea>

                        </div>
                    </div>
                   
                </div>
                <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 "> 
                    <button type="button" class="edit-step-2 details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Next</button>
                </div>
            </div>


             <!-- Step 2 -->
            <div class="edit-form-step edit-step-two hidden">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Service details
                    </h3>
                    
                    <button data-modal-toggle="edit-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 relative">
                            <input type="text" name="edit-admin-car-pickup-location" id="edit-admin-car-pickup-location" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-pickup-location-error" for="edit-admin-car-pickup-location" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Pick-up location</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <div class="flex items-center pb-2.5 pt-4">
                                <div class="flex items-center mr-4">
                                    <input id="edit-admin-car-only" type="radio" name="edit-admin-car-driver" value="0" checked class="w-4 h-4 text-accent-regular bg-gray-100 border-gray-300 focus:ring-0 " >
                                    <label for="edit-admin-car-only" class="ml-2 text-sm font-medium text-gray-900 ">Car only</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input id="edit-admin-car-with-driver" type="radio" name="edit-admin-car-driver" value="1"  class="w-4 h-4 text-accent-regular bg-gray-100 border-gray-300  focus:ring-0">
                                    <label for="edit-admin-car-with-driver" class="ml-2 text-sm font-medium text-gray-900 ">With driver</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-drivers-fee" value="0" id="edit-admin-car-drivers-fee" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer read-only:bg-accent-regular/10" placeholder=" "  readonly  >
                            <label id="edit-admin-car-drivers-fee-error" for="edit-admin-car-drivers-fee" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap peer-read-only:bg-white">Driver's fee</label>
                        </div>
                    </div>  
                </div>
                <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b border-t border-gray-200 ">
                    <button type="button" class="edit-step-1 details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="button" class="edit-step-3 btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Next</button>
                </div>
            </div>



             <!-- Step 3 -->
            <div class="edit-form-step edit-step-three hidden">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Pricing details
                    </h3>
                    <button data-modal-toggle="edit-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>

                <div class="px-6">
                    @include('message.ajax-error')
                    @include('message.ajax-success')
                </div>

                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-ilocos-region" id="edit-admin-car-price-ilocos-region" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-ilocos-region-error" for="edit-admin-car-price-ilocos-region" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION I (ILOCOS REGION)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-cagayan-valley" id="edit-admin-car-price-cagayan-valley" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-cagayan-valley-error" for="edit-admin-car-price-cagayan-valley" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION II (CAGAYAN VALLEY)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-central-luzon" id="edit-admin-car-price-central-luzon" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-central-luzon-error" for="edit-admin-car-price-central-luzon" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION III (CENTRAL LUZON)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-calabarzon" id="edit-admin-car-price-calabarzon" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-calabarzon-error" for="edit-admin-car-price-calabarzon" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION IV-A (CALABARZON)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-mimaropa" id="edit-admin-car-price-mimaropa" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-mimaropa-error" for="edit-admin-car-price-mimaropa" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION IV-B (MIMAROPA)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-bicol-region" id="edit-admin-car-price-bicol-region" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-bicol-region-error" for="edit-admin-car-price-bicol-region" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION V (BICOL REGION)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-ncr" id="edit-admin-car-price-ncr" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-ncr-error" for="edit-admin-car-price-ncr" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">NATIONAL CAPITAL REGION (NCR)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="edit-admin-car-price-car" id="edit-admin-car-price-car" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="edit-admin-car-price-car-error" for="edit-admin-car-price-car" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap overflow-x-hidden">CORDILLERA ADMINISTRATIVE REGION (CAR)</label>
                        </div>
                       
                       
                      
                    </div>
                </div>
                <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b border-t border-gray-200 ">
                    
                    <button type="button" class="edit-step-2 btn-1 bg-accent-regular uppercase w-full  sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="submit" class="details btn-1 bg-accent-regular uppercase  w-full  sm:w-[fit-content]   text-white whitespace-nowrap">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>