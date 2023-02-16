
<div id="{{'car-checklist'.$car['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">

    <div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">

        
        <form   class="check-list-form relative bg-white rounded-lg shadow ">
        @csrf
            <div class="view-step detail-one">
                <div class="flex justify-end p-4 rounded-t ">     
                    <button data-modal-toggle="{{'car-checklist'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
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
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">1. Windshield</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="windshield[]" value="none" label-text="A" />
                                    <x-checkbox name="windshield[]" value="bent" label-text="B" />
                                    <x-checkbox name="windshield[]" value="dented" label-text="C" />
                                    <x-checkbox name="windshield[]" value="scratched" label-text="D" />
                                    <x-checkbox name="windshield[]" value="loose" label-text="E" />
                                    <x-checkbox name="windshield[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">2. Hood</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="hood[]" value="none" label-text="A" />
                                    <x-checkbox name="hood[]" value="bent" label-text="B" />
                                    <x-checkbox name="hood[]" value="dented" label-text="C" />
                                    <x-checkbox name="hood[]" value="scratched" label-text="D" />
                                    <x-checkbox name="hood[]" value="loose" label-text="E" />
                                    <x-checkbox name="hood[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">3. Grill</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="grill[]" value="none" label-text="A" />
                                    <x-checkbox name="grill[]" value="bent" label-text="B" />
                                    <x-checkbox name="grill[]" value="dented" label-text="C" />
                                    <x-checkbox name="grill[]" value="scratched" label-text="D" />
                                    <x-checkbox name="grill[]" value="loose" label-text="E" />
                                    <x-checkbox name="grill[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">4. License Plate</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="frontPlate[]" value="none" label-text="A" />
                                    <x-checkbox name="frontPlate[]" value="bent" label-text="B" />
                                    <x-checkbox name="frontPlate[]" value="dented" label-text="C" />
                                    <x-checkbox name="frontPlate[]" value="scratched" label-text="D" />
                                    <x-checkbox name="frontPlate[]" value="loose" label-text="E" />
                                    <x-checkbox name="frontPlate[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">5. Bumper</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="bumper[]" value="none" label-text="A" />
                                    <x-checkbox name="bumper[]" value="bent" label-text="B" />
                                    <x-checkbox name="bumper[]" value="dented" label-text="C" />
                                    <x-checkbox name="bumper[]" value="scratched" label-text="D" />
                                    <x-checkbox name="bumper[]" value="loose" label-text="E" />
                                    <x-checkbox name="bumper[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">6. Headlights</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="headlights[]" value="none" label-text="A" />
                                    <x-checkbox name="headlights[]" value="bent" label-text="B" />
                                    <x-checkbox name="headlights[]" value="dented" label-text="C" />
                                    <x-checkbox name="headlights[]" value="scratched" label-text="D" />
                                    <x-checkbox name="headlights[]" value="loose" label-text="E" />
                                    <x-checkbox name="headlights[]" value="missing" label-text="F" />
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
                                    <x-checkbox name="rearWindow[]" value="none" label-text="A" />
                                    <x-checkbox name="rearWindow[]" value="bent" label-text="B" />
                                    <x-checkbox name="rearWindow[]" value="dented" label-text="C" />
                                    <x-checkbox name="rearWindow[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rearWindow[]" value="loose" label-text="E" />
                                    <x-checkbox name="rearWindow[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">8. Boot/Trunk</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="bootTrunk[]" value="none" label-text="A" />
                                    <x-checkbox name="bootTrunk[]" value="bent" label-text="B" />
                                    <x-checkbox name="bootTrunk[]" value="dented" label-text="C" />
                                    <x-checkbox name="bootTrunk[]" value="scratched" label-text="D" />
                                    <x-checkbox name="bootTrunk[]" value="loose" label-text="E" />
                                    <x-checkbox name="bootTrunk[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">9. License Plate</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="backPlate[]" value="none" label-text="A" />
                                    <x-checkbox name="backPlate[]" value="bent" label-text="B" />
                                    <x-checkbox name="backPlate[]" value="dented" label-text="C" />
                                    <x-checkbox name="backPlate[]" value="scratched" label-text="D" />
                                    <x-checkbox name="backPlate[]" value="loose" label-text="E" />
                                    <x-checkbox name="backPlate[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">10. Rear Bumper</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rearBumper[]" value="none" label-text="A" />
                                    <x-checkbox name="rearBumper[]" value="bent" label-text="B" />
                                    <x-checkbox name="rearBumper[]" value="dented" label-text="C" />
                                    <x-checkbox name="rearBumper[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rearBumper[]" value="loose" label-text="E" />
                                    <x-checkbox name="rearBumper[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">11. Tail Lights</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="tailLights[]" value="none" label-text="A" />
                                    <x-checkbox name="tailLights[]" value="bent" label-text="B" />
                                    <x-checkbox name="tailLights[]" value="dented" label-text="C" />
                                    <x-checkbox name="tailLights[]" value="scratched" label-text="D" />
                                    <x-checkbox name="tailLights[]" value="loose" label-text="E" />
                                    <x-checkbox name="tailLights[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            
                        </div>
                    </div>
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
                                    <x-checkbox name="rightSideMirror[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideMirror[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideMirror[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideMirror[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideMirror[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideMirror[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">13. Front Fender</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideFrontFender[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideFrontFender[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideFrontFender[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideFrontFender[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideFrontFender[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideFrontFender[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">14. Front Door Window</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideFrontDoorWindow[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideFrontDoorWindow[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideFrontDoorWindow[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideFrontDoorWindow[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideFrontDoorWindow[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideFrontDoorWindow[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">15. Rear Door Window</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideRearDoorWindow[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideRearDoorWindow[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideRearDoorWindow[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideRearDoorWindow[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideRearDoorWindow[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideRearDoorWindow[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">16. Front Door</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideFrontDoor[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideFrontDoor[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideFrontDoor[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideFrontDoor[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideFrontDoor[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideFrontDoor[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">17. Rear Door</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideRearDoor[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideRearDoor[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideRearDoor[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideRearDoor[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideRearDoor[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideRearDoor[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">18. Rear Fender</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideRearFender[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideRearFender[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideRearFender[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideRearFender[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideRearFender[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideRearFender[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">19. Front Wheels</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideFrontWheels[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideFrontWheels[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideFrontWheels[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideFrontWheels[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideFrontWheels[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideFrontWheels[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">20. Back Wheels</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="rightSideBackWheels[]" value="none" label-text="A" />
                                    <x-checkbox name="rightSideBackWheels[]" value="bent" label-text="B" />
                                    <x-checkbox name="rightSideBackWheels[]" value="dented" label-text="C" />
                                    <x-checkbox name="rightSideBackWheels[]" value="scratched" label-text="D" />
                                    <x-checkbox name="rightSideBackWheels[]" value="loose" label-text="E" />
                                    <x-checkbox name="rightSideBackWheels[]" value="missing" label-text="F" />
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
                                    <x-checkbox name="leftSideMirror[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideMirror[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideMirror[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideMirror[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideMirror[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideMirror[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">22. Front Fender</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideFrontFender[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideFrontFender[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideFrontFender[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideFrontFender[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideFrontFender[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideFrontFender[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">23. Front Door Window</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideFrontDoorWindow[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideFrontDoorWindow[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideFrontDoorWindow[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideFrontDoorWindow[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideFrontDoorWindow[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideFrontDoorWindow[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">24. Rear Door Window</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideRearDoorWindow[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideRearDoorWindow[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideRearDoorWindow[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideRearDoorWindow[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideRearDoorWindow[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideRearDoorWindow[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">25. Front Door</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideFrontDoor[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideFrontDoor[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideFrontDoor[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideFrontDoor[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideFrontDoor[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideFrontDoor[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">26. Rear Door</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideRearDoor[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideRearDoor[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideRearDoor[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideRearDoor[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideRearDoor[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideRearDoor[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">27. Rear Fender</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideRearFender[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideRearFender[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideRearFender[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideRearFender[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideRearFender[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideRearFender[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">28. Front Wheels</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideFrontWheels[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideFrontWheels[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideFrontWheels[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideFrontWheels[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideFrontWheels[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideFrontWheels[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">29. Back Wheels</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="leftSideBackWheels[]" value="none" label-text="A" />
                                    <x-checkbox name="leftSideBackWheels[]" value="bent" label-text="B" />
                                    <x-checkbox name="leftSideBackWheels[]" value="dented" label-text="C" />
                                    <x-checkbox name="leftSideBackWheels[]" value="scratched" label-text="D" />
                                    <x-checkbox name="leftSideBackWheels[]" value="loose" label-text="E" />
                                    <x-checkbox name="leftSideBackWheels[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-span-8 grid grid-cols-8 mt-6 gap-6">
                        
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Safety</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">30. Seatbelts</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="seatBelts[]" value="none" label-text="A" />
                                    <x-checkbox name="seatBelts[]" value="bent" label-text="B" />
                                    <x-checkbox name="seatBelts[]" value="dented" label-text="C" />
                                    <x-checkbox name="seatBelts[]" value="scratched" label-text="D" />
                                    <x-checkbox name="seatBelts[]" value="loose" label-text="E" />
                                    <x-checkbox name="seatBelts[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">31. Airbags</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="airbags[]" value="none" label-text="A" />
                                    <x-checkbox name="airbags[]" value="bent" label-text="B" />
                                    <x-checkbox name="airbags[]" value="dented" label-text="C" />
                                    <x-checkbox name="airbags[]" value="scratched" label-text="D" />
                                    <x-checkbox name="airbags[]" value="loose" label-text="E" />
                                    <x-checkbox name="airbags[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">32. Signal Lights</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="signalLights[]" value="none" label-text="A" />
                                    <x-checkbox name="signalLights[]" value="bent" label-text="B" />
                                    <x-checkbox name="signalLights[]" value="dented" label-text="C" />
                                    <x-checkbox name="signalLights[]" value="scratched" label-text="D" />
                                    <x-checkbox name="signalLights[]" value="loose" label-text="E" />
                                    <x-checkbox name="signalLights[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">33. Hazard Lights</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="hazardLights[]" value="none" label-text="A" />
                                    <x-checkbox name="hazardLights[]" value="bent" label-text="B" />
                                    <x-checkbox name="hazardLights[]" value="dented" label-text="C" />
                                    <x-checkbox name="hazardLights[]" value="scratched" label-text="D" />
                                    <x-checkbox name="hazardLights[]" value="loose" label-text="E" />
                                    <x-checkbox name="hazardLights[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">34. Front Exterior Lights</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="frontExteriorLights[]" value="none" label-text="A" />
                                    <x-checkbox name="frontExteriorLights[]" value="bent" label-text="B" />
                                    <x-checkbox name="frontExteriorLights[]" value="dented" label-text="C" />
                                    <x-checkbox name="frontExteriorLights[]" value="scratched" label-text="D" />
                                    <x-checkbox name="frontExteriorLights[]" value="loose" label-text="E" />
                                    <x-checkbox name="frontExteriorLights[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">35. Back Exterior Lights</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="backExteriorLights[]" value="none" label-text="A" />
                                    <x-checkbox name="backExteriorLights[]" value="bent" label-text="B" />
                                    <x-checkbox name="backExteriorLights[]" value="dented" label-text="C" />
                                    <x-checkbox name="backExteriorLights[]" value="scratched" label-text="D" />
                                    <x-checkbox name="backExteriorLights[]" value="loose" label-text="E" />
                                    <x-checkbox name="backExteriorLights[]" value="missing" label-text="F" />
                                </div>
                            </div>
                        </div>
                        <div class="col-span-8 md:col-span-4 m-auto w-full">
                            <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                            ">Car Functions</h2>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">36. Accelerator Pedal</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="acceleratorPedal[]" value="none" label-text="A" />
                                    <x-checkbox name="acceleratorPedal[]" value="bent" label-text="B" />
                                    <x-checkbox name="acceleratorPedal[]" value="dented" label-text="C" />
                                    <x-checkbox name="acceleratorPedal[]" value="scratched" label-text="D" />
                                    <x-checkbox name="acceleratorPedal[]" value="loose" label-text="E" />
                                    <x-checkbox name="acceleratorPedal[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">37. Break Pedal</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="breakPedal[]" value="none" label-text="A" />
                                    <x-checkbox name="breakPedal[]" value="bent" label-text="B" />
                                    <x-checkbox name="breakPedal[]" value="dented" label-text="C" />
                                    <x-checkbox name="breakPedal[]" value="scratched" label-text="D" />
                                    <x-checkbox name="breakPedal[]" value="loose" label-text="E" />
                                    <x-checkbox name="breakPedal[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">38. Clutch Pedal</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="clutchPedal[]" value="none" label-text="A" />
                                    <x-checkbox name="clutchPedal[]" value="bent" label-text="B" />
                                    <x-checkbox name="clutchPedal[]" value="dented" label-text="C" />
                                    <x-checkbox name="clutchPedal[]" value="scratched" label-text="D" />
                                    <x-checkbox name="clutchPedal[]" value="loose" label-text="E" />
                                    <x-checkbox name="clutchPedal[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">39. Gear Shift</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="gearShift[]" value="none" label-text="A" />
                                    <x-checkbox name="gearShift[]" value="bent" label-text="B" />
                                    <x-checkbox name="gearShift[]" value="dented" label-text="C" />
                                    <x-checkbox name="gearShift[]" value="scratched" label-text="D" />
                                    <x-checkbox name="gearShift[]" value="loose" label-text="E" />
                                    <x-checkbox name="gearShift[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">40. Steering Wheel</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="steeringWheel[]" value="none" label-text="A" />
                                    <x-checkbox name="steeringWheel[]" value="bent" label-text="B" />
                                    <x-checkbox name="steeringWheel[]" value="dented" label-text="C" />
                                    <x-checkbox name="steeringWheel[]" value="scratched" label-text="D" />
                                    <x-checkbox name="steeringWheel[]" value="loose" label-text="E" />
                                    <x-checkbox name="steeringWheel[]" value="missing" label-text="F" />
                                </div>
                            </div>
                            <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                                <h3 class="w-40 whitespace-nowrap text-sm">41. Horn</h3>
                                <div class="flex items-start">
                                    <x-checkbox name="horn[]" value="none" label-text="A" />
                                    <x-checkbox name="horn[]" value="bent" label-text="B" />
                                    <x-checkbox name="horn[]" value="dented" label-text="C" />
                                    <x-checkbox name="horn[]" value="scratched" label-text="D" />
                                    <x-checkbox name="horn[]" value="loose" label-text="E" />
                                    <x-checkbox name="horn[]" value="missing" label-text="F" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-8  mt-6 ">
                        <div class="max-w-md mx-auto">
                            <h2 class="text-sm text-accent-regular text-center mb-2 ">*Indicate other car concerns if not included above </h2>
                            <div>
                                <h3 class="py-2 px-3 rounded-t-md  font-bold bg-accent-regular uppercase text-white
                                ">Other Concerns</h3>
                                <textarea name="others" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-b-lg border border-gray-300 focus:outline[] focus:rinoneng-0 focus:border-gray-900"  rows="5"></textarea>
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