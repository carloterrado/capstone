
<div id="add-car" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg">

    <div class="relative w-full max-w-2xl m-auto">
    @include('message.loading')
        
        <form id="add-car-form" action="{{url('admin/add-car')}}" method="POST" class="relative bg-white rounded-lg shadow ">
            @csrf
        
             <!-- Step 1 -->
            <div class="form-step step-one">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Car details
                    </h3>
                    
                    <button data-modal-toggle="add-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-6 space-y-6">
                  
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 relative">
                            <input type="text" name="add-admin-car-name" id="add-admin-car-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-name-error" for="add-admin-car-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Brand and Model</label>
                        </div>
                        <div class="col-span-6 md:col-span-3 relative">
                            <input type="text" id="add-admin-car-plate-number" name="add-admin-car-plate-number" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="add-admin-car-plate-number-error" for="add-admin-car-plate-number" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Plate number</label>
                        </div>
                        <div class="col-span-6 md:col-span-3 relative">
                            <select id="add-admin-set-car-type" name="add-admin-set-car-type" class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option disabled selected ></option>
                                @foreach ($cartypes as $cartype )
                                <option value="{{$cartype['id']}}" class="cursor-pointer">{{$cartype['name']}}</option> 
                                @endforeach
                            </select>
                            <label id="add-admin-set-car-type-error" for="add-admin-set-car-type" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Car type</label>
                        </div>
                        <div class="col-span-6 md:col-span-3 relative">
                            <input type="text" name="add-admin-car-fuel-type" id="add-admin-car-fuel-type" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-fuel-type-error" for="add-admin-car-fuel-type" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Fuel Type</label>
                        </div>
                        <div class="col-span-6 md:col-span-3 relative">
                            <input type="text" id="add-admin-car-capacity" name="add-admin-car-capacity" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="add-admin-car-capacity-error" for="add-admin-car-capacity" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Car capacity</label>
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <label id="add-admin-car-main-photo-error" for="add-admin-car-main-photo" class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Main car photo</label>
                            <input id="add-admin-car-main-photo" name="add-admin-car-main-photo" type="file" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help">
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <label id="add-admin-car-photos-error" for="add-admin-car-photos" class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Photos of car</label>
                            <input id="add-admin-car-photos" name="add-admin-car-photos[]" type="file" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help"  multiple>
                        </div>
                        <div class="col-span-6 ">
                            <label id="add-admin-car-description-error" for="add-admin-car-description" class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500">Description</label>
                            <textarea id="add-admin-car-description" name="add-admin-car-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 " placeholder="Write your description here..."></textarea>

                        </div>
                    </div>
                   
                </div>
                <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 "> 
                    <button type="button" class="step-2 details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Next</button>
                </div>
            </div>


             <!-- Step 2 -->
            <div class="form-step step-two hidden">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Service details
                    </h3>
                    
                    <button data-modal-toggle="add-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 relative">
                            <input type="text" name="add-admin-car-pickup-location" id="add-admin-car-pickup-location" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-pickup-location-error" for="add-admin-car-pickup-location" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">Pick-up location</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <div class="flex items-center pb-2.5 pt-4">
                                <div class="flex items-center mr-4">
                                    <input id="add-admin-car-only" type="radio" name="add-admin-car-driver" value="0" class="w-4 h-4 text-accent-regular bg-gray-100 border-gray-300 focus:ring-0 " checked>
                                    <label for="add-admin-car-only" class="ml-2 text-sm font-medium text-gray-900 ">Car only</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input id="add-admin-car-with-driver" type="radio" name="add-admin-car-driver" value="1" class="w-4 h-4 text-accent-regular bg-gray-100 border-gray-300  focus:ring-0">
                                    <label for="add-admin-car-with-driver" class="ml-2 text-sm font-medium text-gray-900 ">With driver</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-drivers-fee" value="0" id="add-admin-car-drivers-fee" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer read-only:bg-accent-regular/10" placeholder=" "  readonly >
                            <label id="add-admin-car-drivers-fee-error" for="add-admin-car-drivers-fee" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap peer-read-only:bg-white">Driver's fee</label>
                        </div>
                    </div>  
                </div>
                <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b border-t border-gray-200 ">
                    <button type="button" class="step-1 details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="button" class="step-3 btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Next</button>
                </div>
            </div>



             <!-- Step 3 -->
            <div class="form-step step-three hidden">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Pricing details
                    </h3>
                    <button data-modal-toggle="add-car" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
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
                            <input type="text" name="add-admin-car-price-ilocos-region" id="add-admin-car-price-ilocos-region" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-ilocos-region-error" for="add-admin-car-price-ilocos-region" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION I (ILOCOS REGION)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-price-cagayan-valley" id="add-admin-car-price-cagayan-valley" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-cagayan-valley-error" for="add-admin-car-price-cagayan-valley" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION II (CAGAYAN VALLEY)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-price-central-luzon" id="add-admin-car-price-central-luzon" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-central-luzon-error" for="add-admin-car-price-central-luzon" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION III (CENTRAL LUZON)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-price-calabarzon" id="add-admin-car-price-calabarzon" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-calabarzon-error" for="add-admin-car-price-calabarzon" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION IV-A (CALABARZON)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-price-mimaropa" id="add-admin-car-price-mimaropa" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-mimaropa-error" for="add-admin-car-price-mimaropa" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION IV-B (MIMAROPA)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-price-bicol-region" id="add-admin-car-price-bicol-region" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-bicol-region-error" for="add-admin-car-price-bicol-region" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">REGION V (BICOL REGION)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-price-ncr" id="add-admin-car-price-ncr" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-ncr-error" for="add-admin-car-price-ncr" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap ">NATIONAL CAPITAL REGION (NCR)</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 relative">
                            <input type="text" name="add-admin-car-price-car" id="add-admin-car-price-car" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " >
                            <label id="add-admin-car-price-car-error" for="add-admin-car-price-car" class="pointer-events-none absolute text-xs sm:text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-75 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap overflow-x-hidden">CORDILLERA ADMINISTRATIVE REGION (CAR)</label>
                        </div>
                       
                       
                      
                    </div>
                </div>
                <div class="flex items-center flex-wrap sm:justify-between p-6 space-y-2 sm:space-y-0 sm:space-x-2 rounded-b border-t border-gray-200 ">
                    
                    <button type="button" class="step-2 btn-1 bg-accent-regular uppercase w-full  sm:w-[fit-content]   text-white whitespace-nowrap">Previous</button>
                    <button type="submit" class="details btn-1 bg-accent-regular uppercase  w-full  sm:w-[fit-content]   text-white whitespace-nowrap">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>