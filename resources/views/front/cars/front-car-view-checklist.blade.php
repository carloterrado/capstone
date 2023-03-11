
<div id="{{'view-checklist'.$book['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">
    <div class="relative w-full max-w-4xl m-auto bg-white rounded-lg content-container">
        <div  class="checklist-form relative bg-white rounded-lg shadow"  >
            @include('message.loading')
        
            <div class="form-step step-one pb-6 relative">
                <div class="flex justify-between px-2 pt-2 pb-2 sm:px-6 rounded-t items-center relative">
                    @if ($book['status'] === 'ongoing') 
                        <button  type="button" before="Download" class="relative download-checklist  cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm  mr-auto  before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:top-0 before:left-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white " >
                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M5 3h14a2 2 0 0 1 2 2v14c0 1.11-.89 2-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2m3 14h8v-2H8v2m8-7h-2.5V7h-3v3H8l4 4l4-4Z"/></svg>
                        </button>
                        @include('message.small-loading')
                    @endif
                    <button data-modal-toggle="{{'view-checklist'.$book['id']}}" type="button" before="Close" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:top-0 before:right-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
               
                 <div class="px-2 sm:px-6 grid grid-cols-8 justify-center gap-x-6 content">
                    <h2 class="col-span-8 uppercase text-center mb-3">CCH CAR RENTALS</h2>
                    <h2 class="col-span-8 uppercase text-center text-2xl mb-5">Car checklist form</h2>
                    <div class="col-span-8 md:col-span-8 mb-6 flex justify-between flex-wrap md:px-16">
                        <h3 class="font-semibold w-full mb-2 ">Car Name: <span class="border-b-2 border-black/50 px-2"> {{$book['car_info']['name']}}</span></h3>
                        <h3 class="col-span-6 sm:col-span-3 font-semibold mb-2">Date: <span class="border-b-2 border-black/50 px-2"> {{$book['start_date']}}</span></h3>
                        <h3 class="col-span-6 sm:col-span-3  font-semibold  text-end">Time: <span class="border-b-2 border-black/50 px-2"> {{$book['time']}}</span></h3>
                    </div>
                    <h2 class="col-span-8 uppercase text-center text-lg">List of Possible issues</h2>
                    <h2 class="col-span-8  text-center "><b>A</b>-None <b> B</b>-Bent <b> C</b>-Dented <b> D</b>-Scratched <b> E</b>-Loose <b> F</b>-Missing</h2>
                   
                    <div class="col-span-8 grid grid-cols-8 mt-6 gap-6">
                        <div class="col-span-8 md:col-span-4">
                            <img class="w-full block my-auto" src="{{url('admins/images/front.png')}}" alt="front-image">
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Front</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">1. Windshield</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'windshield'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'windshield'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'windshield'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'windshield'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'windshield'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'windshield'])
                                   
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">2. Hood</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'hood'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'hood'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'hood'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'hood'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'hood'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'hood'])
                                 
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">3. Grill</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'grill'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'grill'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'grill'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'grill'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'grill'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'grill'])
                                    
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">4. License Plate</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'frontPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'frontPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'frontPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'frontPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'frontPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'frontPlate'])
                                
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">5. Bumper</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'bumper'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'bumper'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'bumper'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'bumper'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'bumper'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'bumper'])
                                   
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">6. Headlights</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'headlights'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'headlights'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'headlights'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'headlights'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'headlights'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'headlights'])
                             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-8 grid grid-cols-8 gap-6">
                        <div class="col-span-8 md:col-span-4">
                            <img class="w-full block my-auto" src="{{url('admins/images/back.png')}}" alt="front-image">
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Back</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">7. Rear Window</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rearWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rearWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rearWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rearWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rearWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rearWindow'])
                                  
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">8. Boot/Trunk</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'bootTrunk'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'bootTrunk'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'bootTrunk'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'bootTrunk'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'bootTrunk'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'bootTrunk'])
                                  
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">9. License Plate</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'backPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'backPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'backPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'backPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'backPlate'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'backPlate'])
                                    
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">10. Rear Bumper</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rearBumper'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rearBumper'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rearBumper'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rearBumper'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rearBumper'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rearBumper'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">11. Tail Lights</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'tailLights'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'tailLights'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'tailLights'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'tailLights'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'tailLights'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'tailLights'])
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <h2 class="col-span-8 uppercase text-center text-lg">List of Possible issues</h2>
                    <h2 class="col-span-8  text-center "><b>A</b>-None <b> B</b>-Bent <b> C</b>-Dented <b> D</b>-Scratched <b> E</b>-Loose <b> F</b>-Missing</h2>
                    <div class="col-span-8 grid grid-cols-8 mt-6 gap-6">
                        <div class="col-span-8 md:col-span-4">
                            <img class="w-full block my-auto" src="{{url('admins/images/Passenger_s-side.png')}}" alt="front-image">
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Right Side</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">12. Side Mirror</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideMirror'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">13. Front Fender</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">14. Front Door Window</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">15. Rear Door Window</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideRearDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">16. Front Door</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">17. Rear Door</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideRearDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">18. Rear Fender</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideRearFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">19. Front Wheels</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontWheels'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">20. Back Wheels</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideBackWheels'])
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-span-8 grid grid-cols-8 mt-6 gap-6">
                        <div class="col-span-8 md:col-span-4">
                            <img class="w-full block my-auto" src="{{url('admins/images/drivers-side.png')}}" alt="front-image">
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Left Side</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">21. Side Mirror</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideMirror'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideMirror'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">22. Front Fender</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontFender'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">23. Front Door Window</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">24. Rear Door Window</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideRearDoorWindow'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideRearDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">25. Front Door</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">26. Rear Door</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideRearDoor'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideRearDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">27. Rear Fender</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideRearFender'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideRearFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">28. Front Wheels</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontWheels'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">29. Back Wheels</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideBackWheels'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideBackWheels'])
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <h2 class="col-span-8 uppercase text-center text-lg mt-6">List of Possible issues</h2>
                    <h2 class="col-span-8  text-center "><b>A</b>-None <b> B</b>-Bent <b> C</b>-Dented <b> D</b>-Scratched <b> E</b>-Loose <b> F</b>-Missing</h2>
                    <div class="col-span-8 grid grid-cols-8 mt-6 gap-6">
                        
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Safety</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">30. Seatbelts</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'seatBelts'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'seatBelts'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'seatBelts'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'seatBelts'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'seatBelts'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'seatBelts'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">31. Airbags</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'airbags'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'airbags'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'airbags'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'airbags'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'airbags'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'airbags'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">32. Signal Lights</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'signalLights'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'signalLights'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'signalLights'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'signalLights'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'signalLights'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'signalLights'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">33. Hazard Lights</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'hazardLights'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'hazardLights'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'hazardLights'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'hazardLights'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'hazardLights'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'hazardLights'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">34. Front Exterior Lights</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'frontExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'frontExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'frontExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'frontExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'frontExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'frontExteriorLights'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">35. Back Exterior Lights</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'backExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'backExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'backExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'backExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'backExteriorLights'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'backExteriorLights'])
                                </div>
                            </div>
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Car Functions</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">36. Accelerator Pedal</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'acceleratorPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'acceleratorPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'acceleratorPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'acceleratorPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'acceleratorPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'acceleratorPedal'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">37. Break Pedal</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'breakPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'breakPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'breakPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'breakPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'breakPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'breakPedal'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">38. Clutch Pedal</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'clutchPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'clutchPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'clutchPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'clutchPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'clutchPedal'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'clutchPedal'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">39. Gear Shift</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'gearShift'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'gearShift'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'gearShift'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'gearShift'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'gearShift'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'gearShift'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">40. Steering Wheel</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'steeringWheel'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'steeringWheel'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'steeringWheel'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'steeringWheel'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'steeringWheel'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'steeringWheel'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">41. Horn</h3>
                                <div class="flex items-start">
                                    @include('front.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'horn'])

                                    @include('front.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'horn'])

                                    @include('front.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'horn'])

                                    @include('front.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'horn'])

                                    @include('front.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'horn'])

                                    @include('front.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'horn'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-8  mt-6 ">
                        <div class="max-w-md mx-auto">
                          
                            <div>
                                <h3 class="py-2 px-3 rounded-t-md  font-bold bg-accent-regular uppercase text-white
                                ">Other Concerns</h3>
                                <textarea name="others" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-b-lg border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900"  rows="5">
                                @if ($book['car_info']['car_checklist'] !== null && $book['car_info']['car_checklist']['others'] !== null)
                                    {{$book['car_info']['car_checklist']['others']}}
                                @endif
                                </textarea>
                            </div>

                        </div>
                        
                    </div> 
                </div>
                <div class="sm:w-1/2 mx-auto">
                   
                    @include('message.ajax-success')
                    @include('message.ajax-error')
                </div>
                @if ($book['status'] !== 'ongoing')    
                    <button  bookingid="{{$book['id']}}"  class="confirmedChecklist mt-6 btn-1 mx-auto block bg-accent-green w-[fit-content]  text-white whitespace-nowrap"> Confirm checklist</button>
                @endif
               
            </div>
            <!-- form -->
        </div> 
    </div>
</div>
<script src="{{url('js/html2canvas.min.js')}}"></script>

