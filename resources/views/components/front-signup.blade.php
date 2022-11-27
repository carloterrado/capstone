
  <div class="flex justify-center h-max relative p-4 lg:p-0">
      <div class="absolute inset-0 -z-10 lg:relative bg-cover lg:w-2/3">
      <img src="{{url('front/images/road.jpg')}}" class="absolute inset-0 w-full h-full object-cover -z-10" alt="">
          <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40 ">
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
                
                  <h2 class="text-4xl font-bold text-center mt-6"><img class="mx-auto" src="front/images/Chesca_logo.svg" alt=""></h2>
                  <p class="mt-3 text-gray-500">Create your account now, it's free.</p>
              </div>
             

              <div class="mt-4">
                  <form id="front-signup-form" method="POST" enctype="multipart/form-data">
                    @csrf
                        <!-- Name -->
                        <div class="sm:flex justify-between">
                          <div class="relative mt-4">
                            <input type="text" id="front-signup-first-name" name="front-signup-first-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="front-signup-first-name-error" for="front-signup-first-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">First Name</label>
                          </div>
                          <div class="relative mt-4">
                            <input type="text" id="front-signup-last-name" name="front-signup-last-name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="front-signup-last-name-error" for="front-signup-last-name" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Last Name</label>
                          </div>
                        </div>
                        <!-- Email -->
                        <div class="relative mt-4">
                          <input type="text" id="front-signup-email" name="front-signup-email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                          <label id="front-signup-email-error" for="front-signup-email" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                          peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                        </div>
                         
                        <!-- Birthdate & contact num -->
                        <div class="sm:flex justify-between">
                          <div class="relative mt-4">
                            <input  type="text" id="front-signup-birthdate" name="front-signup-birthdate" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="front-signup-birthdate-error" for="front-signup-birthdate" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Birthdate (dd/mm/yyyy)</label>
                          </div>
                          
                          <div class="relative mt-4">
                            <input type="text" id="front-signup-contact" name="front-signup-contact" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="front-signup-contact-error" for="front-signup-contact" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Contact Number</label>
                          </div>
                        </div>

                        <!-- Address -->
                        <div class="relative mt-4">
                          <input type="text" id="front-signup-address" name="front-signup-address" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                          <label id="front-signup-address-error" for="front-signup-address" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                          peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Address</label>
                        </div>

                        <!-- Password -->
                        <div class="sm:flex justify-between">
                          <div class="relative mt-4">
                            <input type="password" id="front-signup-password" name="front-signup-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="front-signup-password-error" for="front-signup-password" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Password</label>
                          </div>
                          <div class="relative mt-4">
                            <input type="password" id="front-signup-confirm-password" name="front-signup-confirm-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                            <label id="front-signup-confirm-password-error" for="front-signup-confirm-password" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Confirm Password</label>
                          </div>
                        </div>

                        <!-- Driver's License Input File -->
                        <div class="block mt-6">
                          <label id="front-signup-license-error" for="front-signup-license" class="block pb-1 text-sm font-semibold lg:pl-2 text-gray-500" >Driver's License</label>
                          <input id="front-signup-license" name="front-signup-license" type="file" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help"  >
                        </div>

                        <!-- Valid id Input File -->
                          <!-- Dropdown -->
                          <div class="block mt-4">
                            <div class="relative mb-2">
                              <select id="front-signup-valid-id" name="front-signup-valid-id" class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option disabled selected ></option>
                                <option value="SSS ID" class=" cursor-pointer">SSS ID</option>
                                <option value="PhilHealth ID" class="cursor-pointer">PhilHealth ID</option>
                                <option value="PRC ID" class=" cursor-pointer">PRC ID</option>
                                <option value="Passport" class= cursor-pointer">Passport</option>
                              </select>
                              <label id="front-signup-valid-id-error" for="front-signup-valid-id" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Choose one valid id</label>
                           
                            </div>
                            
                            <div class="block w-full">
                            <label id="front-signup-id-file-error" for="front-signup-id-file" class=" hidden pb-1 text-sm font-semibold lg:pl-2 text-gray-500"></label>
                              <input id="front-signup-id-file" name="front-signup-id-file" class="w-full mt-2 text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help" type="file">
                            </div>
                          </div>
                      </div>
                      <label id="front-signup-terms-error" for="front-signup-terms" class=" hidden pb-1 text-sm font-semibold lg:pl-2 text-[lightcoral]"></label>
                      <div class="flex items-center mt-4">
                        <input id="front-signup-terms" name="front-signup-terms" value="agree" type="checkbox" class="w-4 h-4 text-accent-regular bg-gray-100 rounded border-gray-300 focus:ring-0  ">
                        <label  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-accent-regular  hover:underline">terms and conditions</a>.</label> 
                      </div>

                      <div class="mt-4 mb-6">
                      <label id="front-signup-submit-form-error" for="front-signup-id-file" class=" hidden pb-1 text-sm font-semibold lg:pl-2 text-[lightcoral]"></label>
                          <!-- <button class="w-full px-4 py-2 tracking-wide btn-orange-login"> -->
                          <button type="submit" class="btn-orange-login mt-4 scale-100">
                              Submit
                          </button>
                      </div>

                  </form>
                  
                 

                 
          </div>
      </div>
      </div>
  </div>
