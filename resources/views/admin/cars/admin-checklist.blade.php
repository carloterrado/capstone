
<div id="{{'car-checklist'.$car['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">

    <div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">

        
        <form   class="check-list-form relative bg-white rounded-lg shadow ">

        @csrf
        
        @include('message.loading')
        
            <div class="view-step detail-one">
                <div class="flex justify-end p-4 rounded-t ">     
                    <button before="Close" data-modal-toggle="{{'car-checklist'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:top-1/2 before:-translate-y-1/2 before:right-[102%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="px-2 sm:px-6 grid grid-cols-8 justify-center gap-x-6">
                    <h2 class="col-span-8 uppercase text-center mb-3">CCH CAR RENTALS</h2>
                    <h2 class="col-span-8 uppercase text-center text-2xl mb-5">Car checklist form</h2>
                    <h2 class="col-span-8 uppercase text-center text-lg">List of Possible issues</h2>
                    <h2 class="col-span-8  text-center "><b>A</b>-None <b> B</b>-Bent <b> C</b>-Dented <b> D</b>-Scratched <b> E</b>-Loose <b> F</b>-Missing</h2>
                    <h2 class="col-span-8 text-sm text-accent-regular text-center ">*Please check the box if any issues occur </h2>
                    <div class="col-span-8 grid grid-cols-8 mt-6 gap-6">
                        <div class="col-span-8 md:col-span-4">
                            <img class="w-full block my-auto" src="{{url('admins/images/front.png')}}" alt="front-image">
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Front</h2>
                            <input type="hidden" name="car_id" value="{{$car['id']}}">
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">1. Windshield</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'windshield'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'windshield'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'windshield'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'windshield'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'windshield'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'windshield'])
                                   
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">2. Hood</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'hood'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'hood'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'hood'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'hood'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'hood'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'hood'])
                                 
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">3. Grill</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'grill'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'grill'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'grill'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'grill'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'grill'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'grill'])
                                    
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">4. License Plate</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'frontPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'frontPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'frontPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'frontPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'frontPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'frontPlate'])
                                
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">5. Bumper</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'bumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'bumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'bumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'bumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'bumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'bumper'])
                                   
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">6. Headlights</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'headlights'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'headlights'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'headlights'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'headlights'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'headlights'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'headlights'])
                             
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
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rearWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rearWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rearWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rearWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rearWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rearWindow'])
                                  
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">8. Boot/Trunk</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'bootTrunk'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'bootTrunk'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'bootTrunk'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'bootTrunk'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'bootTrunk'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'bootTrunk'])
                                  
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">9. License Plate</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'backPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'backPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'backPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'backPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'backPlate'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'backPlate'])
                                    
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">10. Rear Bumper</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rearBumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rearBumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rearBumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rearBumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rearBumper'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rearBumper'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">11. Tail Lights</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'tailLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'tailLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'tailLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'tailLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'tailLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'tailLights'])
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <h2 class="col-span-8 uppercase text-center text-lg">List of Possible issues</h2>
                    <h2 class="col-span-8  text-center "><b>A</b>-None <b> B</b>-Bent <b> C</b>-Dented <b> D</b>-Scratched <b> E</b>-Loose <b> F</b>-Missing</h2>
                    <h2 class="col-span-8 text-sm text-accent-regular text-center ">*Please check the box if any issues occur </h2>
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
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideMirror'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">13. Front Fender</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">14. Front Door Window</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">15. Rear Door Window</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideRearDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">16. Front Door</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">17. Rear Door</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideRearDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">18. Rear Fender</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideRearFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">19. Front Wheels</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideFrontWheels'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">20. Back Wheels</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'rightSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'rightSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'rightSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'rightSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'rightSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'rightSideBackWheels'])
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
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideMirror'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideMirror'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">22. Front Fender</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">23. Front Door Window</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">24. Rear Door Window</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideRearDoorWindow'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideRearDoorWindow'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">25. Front Door</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">26. Rear Door</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideRearDoor'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideRearDoor'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">27. Rear Fender</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideRearFender'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideRearFender'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">28. Front Wheels</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideFrontWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideFrontWheels'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">29. Back Wheels</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'leftSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'leftSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'leftSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'leftSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'leftSideBackWheels'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'leftSideBackWheels'])
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <h2 class="col-span-8 uppercase mt-6 text-center text-lg">List of Possible issues</h2>
                    <h2 class="col-span-8  text-center "><b>A</b>-None <b> B</b>-Bent <b> C</b>-Dented <b> D</b>-Scratched <b> E</b>-Loose <b> F</b>-Missing</h2>
                    <h2 class="col-span-8 text-sm text-accent-regular text-center ">*Please check the box if any issues occur </h2>
                    <div class="col-span-8 grid grid-cols-8 mt-6 gap-6">
                        
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Safety</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">30. Seatbelts</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'seatBelts'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'seatBelts'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'seatBelts'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'seatBelts'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'seatBelts'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'seatBelts'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">31. Airbags</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'airbags'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'airbags'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'airbags'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'airbags'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'airbags'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'airbags'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">32. Signal Lights</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'signalLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'signalLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'signalLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'signalLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'signalLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'signalLights'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">33. Hazard Lights</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'hazardLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'hazardLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'hazardLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'hazardLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'hazardLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'hazardLights'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">34. Front Exterior Lights</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'frontExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'frontExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'frontExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'frontExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'frontExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'frontExteriorLights'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">35. Back Exterior Lights</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'backExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'backExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'backExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'backExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'backExteriorLights'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'backExteriorLights'])
                                </div>
                            </div>
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Car Functions</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">36. Accelerator Pedal</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'acceleratorPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'acceleratorPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'acceleratorPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'acceleratorPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'acceleratorPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'acceleratorPedal'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">37. Break Pedal</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'breakPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'breakPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'breakPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'breakPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'breakPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'breakPedal'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">38. Clutch Pedal</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'clutchPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'clutchPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'clutchPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'clutchPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'clutchPedal'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'clutchPedal'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">39. Gear Shift</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'gearShift'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'gearShift'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'gearShift'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'gearShift'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'gearShift'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'gearShift'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">40. Steering Wheel</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'steeringWheel'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'steeringWheel'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'steeringWheel'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'steeringWheel'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'steeringWheel'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'steeringWheel'])
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">41. Horn</h3>
                                <div class="flex items-start">
                                    @include('admin.cars.checkbox',['labelText'=>'A','value'=>'none','parts'=>'horn'])

                                    @include('admin.cars.checkbox',['labelText'=>'B','value'=>'bent','parts'=>'horn'])

                                    @include('admin.cars.checkbox',['labelText'=>'C','value'=>'dented','parts'=>'horn'])

                                    @include('admin.cars.checkbox',['labelText'=>'D','value'=>'scratched','parts'=>'horn'])

                                    @include('admin.cars.checkbox',['labelText'=>'E','value'=>'loose','parts'=>'horn'])

                                    @include('admin.cars.checkbox',['labelText'=>'F','value'=>'missing','parts'=>'horn'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-md mx-auto col-span-8">
                        @include('message.ajax-error')
                        @include('message.ajax-success')
                    </div>
                    <div class="col-span-8  mt-6 ">
                        <div class="max-w-md mx-auto">
                            <h2 class="text-sm text-accent-regular text-center mb-2 ">*Indicate other car concerns if not included above </h2>
                            <div>
                                <h3 class="py-2 px-3 rounded-t-md  font-bold bg-accent-regular uppercase text-white
                                ">Other Concerns</h3>
                                <textarea name="others" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-b-lg border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900"  rows="5">
                                @if ($car['car_checklist'] !== null && $car['car_checklist']['others'] !== null)
                                    {{$car['car_checklist']['others']}}
                                @endif
                                </textarea>
                            </div>

                        </div>
                        
                    </div> 
                </div>
                <div class="text-center text-accent-regular checklist-error mt-4 capitalize hidden">Please fill up the checklist correctly!</div>
                
                <div class="flex items-center justify-end p-6 space-x-2 mt-6 rounded-b border-t border-gray-200 "> 
                    <button type="submit" class="btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>