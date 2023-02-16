
<div id="{{'car-checklist'.$car['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">

<div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">

    
    <form action="#" method="get"  class="relative bg-white rounded-lg shadow ">
      
        <div class="view-step detail-one">
            <div class="flex justify-end p-4 rounded-t ">
                
                <button data-modal-toggle="{{'car-checklist'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="px-2 sm:px-6 grid grid-cols-8">
                <h2 class="col-span-8 uppercase text-center mb-3">CCH CAR RENTALS</h2>
                <h2 class="col-span-8 uppercase text-center text-xl mb-5">Car checklist form</h2>
                <h2 class="col-span-8 uppercase text-center text-xl">List of Possible issues</h2>
                <h2 class="col-span-8  text-center "><b>A</b>-None <b> B</b>-Bent <b> C</b>-Dented <b> D</b>-Scratched <b> E</b>-Loose <b> F</b>-Missing</h2>
                <h2 class="col-span-8 text-sm text-accent-regular text-center ">*Please check the box if any issues occur </h2>
                <div class="col-span-8 grid grid-cols-8 mt-6">
                <div class="col-span-8 md:col-span-4">
                    <img class="w-full block my-auto" src="{{url('admins/images/front.png')}}" alt="front-image">
                </div>
                <div class="col-span-8 md:col-span-4 m-auto w-full">
                    <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                    ">Front</h2>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">1. Windshield</h3>
                        <div class="flex items-start">
                            <x-checkbox name="windshield-none" label-text="A" />
                            <x-checkbox name="windshield-bent" label-text="B" />
                            <x-checkbox name="windshield-dented" label-text="C" />
                            <x-checkbox name="windshield-scratched" label-text="D" />
                            <x-checkbox name="windshield-loose" label-text="E" />
                            <x-checkbox name="windshield-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">2. Hood</h3>
                        <div class="flex items-start">
                            <x-checkbox name="hood-none" label-text="A" />
                            <x-checkbox name="hood-bent" label-text="B" />
                            <x-checkbox name="hood-dented" label-text="C" />
                            <x-checkbox name="hood-scratched" label-text="D" />
                            <x-checkbox name="hood-loose" label-text="E" />
                            <x-checkbox name="hood-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">3. Grill</h3>
                        <div class="flex items-start">
                            <x-checkbox name="grill-none" label-text="A" />
                            <x-checkbox name="grill-bent" label-text="B" />
                            <x-checkbox name="grill-dented" label-text="C" />
                            <x-checkbox name="grill-scratched" label-text="D" />
                            <x-checkbox name="grill-loose" label-text="E" />
                            <x-checkbox name="grill-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">4. License Plate</h3>
                        <div class="flex items-start">
                            <x-checkbox name="plate-none" label-text="A" />
                            <x-checkbox name="plate-bent" label-text="B" />
                            <x-checkbox name="plate-dented" label-text="C" />
                            <x-checkbox name="plate-scratched" label-text="D" />
                            <x-checkbox name="plate-loose" label-text="E" />
                            <x-checkbox name="plate-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">5. Bumper</h3>
                        <div class="flex items-start">
                            <x-checkbox name="bumper-none" label-text="A" />
                            <x-checkbox name="bumper-bent" label-text="B" />
                            <x-checkbox name="bumper-dented" label-text="C" />
                            <x-checkbox name="bumper-scratched" label-text="D" />
                            <x-checkbox name="bumper-loose" label-text="E" />
                            <x-checkbox name="bumper-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">6. Headlights</h3>
                        <div class="flex items-start">
                            <x-checkbox name="headlights-none" label-text="A" />
                            <x-checkbox name="headlights-bent" label-text="B" />
                            <x-checkbox name="headlights-dented" label-text="C" />
                            <x-checkbox name="headlights-scratched" label-text="D" />
                            <x-checkbox name="headlights-loose" label-text="E" />
                            <x-checkbox name="headlights-missing" label-text="F" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-8 grid grid-cols-8">
                <div class="col-span-8 md:col-span-4">
                    <img class="w-full block my-auto" src="{{url('admins/images/back.png')}}" alt="front-image">
                </div>
                <div class="col-span-8 md:col-span-4 m-auto w-full">
                    <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                    ">Back</h2>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">7. Rear Window</h3>
                        <div class="flex items-start">
                            <x-checkbox name="rear-window-none" label-text="A" />
                            <x-checkbox name="rear-window-bent" label-text="B" />
                            <x-checkbox name="rear-window-dented" label-text="C" />
                            <x-checkbox name="rear-window-scratched" label-text="D" />
                            <x-checkbox name="rear-window-loose" label-text="E" />
                            <x-checkbox name="rear-window-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">8. Boot/Trunk</h3>
                        <div class="flex items-start">
                            <x-checkbox name="boot-trunk-none" label-text="A" />
                            <x-checkbox name="boot-trunk-bent" label-text="B" />
                            <x-checkbox name="boot-trunk-dented" label-text="C" />
                            <x-checkbox name="boot-trunk-scratched" label-text="D" />
                            <x-checkbox name="boot-trunk-loose" label-text="E" />
                            <x-checkbox name="boot-trunk-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">9. License Plate</h3>
                        <div class="flex items-start">
                            <x-checkbox name="back-plate-none" label-text="A" />
                            <x-checkbox name="back-plate-bent" label-text="B" />
                            <x-checkbox name="back-plate-dented" label-text="C" />
                            <x-checkbox name="back-plate-scratched" label-text="D" />
                            <x-checkbox name="back-plate-loose" label-text="E" />
                            <x-checkbox name="back-plate-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">10. Rear Bumper</h3>
                        <div class="flex items-start">
                            <x-checkbox name="rear-bumper-none" label-text="A" />
                            <x-checkbox name="rear-bumper-bent" label-text="B" />
                            <x-checkbox name="rear-bumper-dented" label-text="C" />
                            <x-checkbox name="rear-bumper-scratched" label-text="D" />
                            <x-checkbox name="rear-bumper-loose" label-text="E" />
                            <x-checkbox name="rear-bumper-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">11. Tail Lights</h3>
                        <div class="flex items-start">
                            <x-checkbox name="tail-lights-none" label-text="A" />
                            <x-checkbox name="tail-lights-bent" label-text="B" />
                            <x-checkbox name="tail-lights-dented" label-text="C" />
                            <x-checkbox name="tail-lights-scratched" label-text="D" />
                            <x-checkbox name="tail-lights-loose" label-text="E" />
                            <x-checkbox name="tail-lights-missing" label-text="F" />
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-span-8 grid grid-cols-8">
                <div class="col-span-8 md:col-span-4">
                    <img class="w-full block my-auto" src="{{url('admins/images/Passenger_s-side.png')}}" alt="front-image">
                </div>
                <div class="col-span-8 md:col-span-4 m-auto w-full">
                    <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                    ">Left Side</h2>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">12. Side Mirror</h3>
                        <div class="flex items-start">
                            <x-checkbox name="left-side-mirror-none" label-text="A" />
                            <x-checkbox name="left-side-mirror-bent" label-text="B" />
                            <x-checkbox name="left-side-mirror-dented" label-text="C" />
                            <x-checkbox name="left-side-mirror-scratched" label-text="D" />
                            <x-checkbox name="left-side-mirror-loose" label-text="E" />
                            <x-checkbox name="left-side-mirror-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">13. Front Fender</h3>
                        <div class="flex items-start">
                            <x-checkbox name="left-side-front-fender-none" label-text="A" />
                            <x-checkbox name="left-side-front-fender-bent" label-text="B" />
                            <x-checkbox name="left-side-front-fender-dented" label-text="C" />
                            <x-checkbox name="left-side-front-fender-scratched" label-text="D" />
                            <x-checkbox name="left-side-front-fender-loose" label-text="E" />
                            <x-checkbox name="left-side-front-fender-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">14. Front Door Window</h3>
                        <div class="flex items-start">
                            <x-checkbox name="left-side-front-door-window-none" label-text="A" />
                            <x-checkbox name="left-side-front-door-window-bent" label-text="B" />
                            <x-checkbox name="left-side-front-door-window-dented" label-text="C" />
                            <x-checkbox name="left-side-front-door-window-scratched" label-text="D" />
                            <x-checkbox name="left-side-front-door-window-loose" label-text="E" />
                            <x-checkbox name="left-side-front-door-window-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">15. Rear Door Window</h3>
                        <div class="flex items-start">
                            <x-checkbox name="left-side-rear-door-window-none" label-text="A" />
                            <x-checkbox name="left-side-rear-door-window-bent" label-text="B" />
                            <x-checkbox name="left-side-rear-door-window-dented" label-text="C" />
                            <x-checkbox name="left-side-rear-door-window-scratched" label-text="D" />
                            <x-checkbox name="left-side-rear-door-window-loose" label-text="E" />
                            <x-checkbox name="left-side-rear-door-window-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">16. Front Door</h3>
                        <div class="flex items-start">
                            <x-checkbox name="left-side-front-door-none" label-text="A" />
                            <x-checkbox name="left-side-front-door-bent" label-text="B" />
                            <x-checkbox name="left-side-front-door-dented" label-text="C" />
                            <x-checkbox name="left-side-front-door-scratched" label-text="D" />
                            <x-checkbox name="left-side-front-door-loose" label-text="E" />
                            <x-checkbox name="left-side-front-door-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">17. Rear Door</h3>
                        <div class="flex items-start">
                            <x-checkbox name="left-side-rear-door-none" label-text="A" />
                            <x-checkbox name="left-side-rear-door-bent" label-text="B" />
                            <x-checkbox name="left-side-rear-door-dented" label-text="C" />
                            <x-checkbox name="left-side-rear-door-scratched" label-text="D" />
                            <x-checkbox name="left-side-rear-door-loose" label-text="E" />
                            <x-checkbox name="left-side-rear-door-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">18. Rear Fender</h3>
                        <div class="flex items-start">
                            <x-checkbox name="left-side-rear-fender-none" label-text="A" />
                            <x-checkbox name="left-side-rear-fender-bent" label-text="B" />
                            <x-checkbox name="left-side-rear-fender-dented" label-text="C" />
                            <x-checkbox name="left-side-rear-fender-scratched" label-text="D" />
                            <x-checkbox name="left-side-rear-fender-loose" label-text="E" />
                            <x-checkbox name="left-side-rear-fender-missing" label-text="F" />
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-span-8 grid grid-cols-8 mt-6">
                <div class="col-span-8 md:col-span-4">
                    <img class="w-full block my-auto" src="{{url('admins/images/drivers-side.png')}}" alt="front-image">
                </div>
                <div class="col-span-8 md:col-span-4 m-auto w-full">
                    <h2 class="py-2 px-3 rounded-t-md font-bold bg-accent-regular text-white
                    ">Left Side</h2>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">19. Side Mirror</h3>
                        <div class="flex items-start">
                            <x-checkbox name="right-side-mirror-none" label-text="A" />
                            <x-checkbox name="right-side-mirror-bent" label-text="B" />
                            <x-checkbox name="right-side-mirror-dented" label-text="C" />
                            <x-checkbox name="right-side-mirror-scratched" label-text="D" />
                            <x-checkbox name="right-side-mirror-loose" label-text="E" />
                            <x-checkbox name="right-side-mirror-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">20. Front Fender</h3>
                        <div class="flex items-start">
                            <x-checkbox name="right-side-front-fender-none" label-text="A" />
                            <x-checkbox name="right-side-front-fender-bent" label-text="B" />
                            <x-checkbox name="right-side-front-fender-dented" label-text="C" />
                            <x-checkbox name="right-side-front-fender-scratched" label-text="D" />
                            <x-checkbox name="right-side-front-fender-loose" label-text="E" />
                            <x-checkbox name="right-side-front-fender-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">21. Front Door Window</h3>
                        <div class="flex items-start">
                            <x-checkbox name="right-side-front-door-window-none" label-text="A" />
                            <x-checkbox name="right-side-front-door-window-bent" label-text="B" />
                            <x-checkbox name="right-side-front-door-window-dented" label-text="C" />
                            <x-checkbox name="right-side-front-door-window-scratched" label-text="D" />
                            <x-checkbox name="right-side-front-door-window-loose" label-text="E" />
                            <x-checkbox name="right-side-front-door-window-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">22. Rear Door Window</h3>
                        <div class="flex items-start">
                            <x-checkbox name="right-side-rear-door-window-none" label-text="A" />
                            <x-checkbox name="right-side-rear-door-window-bent" label-text="B" />
                            <x-checkbox name="right-side-rear-door-window-dented" label-text="C" />
                            <x-checkbox name="right-side-rear-door-window-scratched" label-text="D" />
                            <x-checkbox name="right-side-rear-door-window-loose" label-text="E" />
                            <x-checkbox name="right-side-rear-door-window-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">23. Front Door</h3>
                        <div class="flex items-start">
                            <x-checkbox name="right-side-front-door-none" label-text="A" />
                            <x-checkbox name="right-side-front-door-bent" label-text="B" />
                            <x-checkbox name="right-side-front-door-dented" label-text="C" />
                            <x-checkbox name="right-side-front-door-scratched" label-text="D" />
                            <x-checkbox name="right-side-front-door-loose" label-text="E" />
                            <x-checkbox name="right-side-front-door-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">24. Rear Door</h3>
                        <div class="flex items-start">
                            <x-checkbox name="right-side-rear-door-none" label-text="A" />
                            <x-checkbox name="right-side-rear-door-bent" label-text="B" />
                            <x-checkbox name="right-side-rear-door-dented" label-text="C" />
                            <x-checkbox name="right-side-rear-door-scratched" label-text="D" />
                            <x-checkbox name="right-side-rear-door-loose" label-text="E" />
                            <x-checkbox name="right-side-rear-door-missing" label-text="F" />
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 border-x-2 border-b-2">
                        <h3 class="w-40 whitespace-nowrap text-sm">25. Rear Fender</h3>
                        <div class="flex items-start">
                            <x-checkbox name="right-side-rear-fender-none" label-text="A" />
                            <x-checkbox name="right-side-rear-fender-bent" label-text="B" />
                            <x-checkbox name="right-side-rear-fender-dented" label-text="C" />
                            <x-checkbox name="right-side-rear-fender-scratched" label-text="D" />
                            <x-checkbox name="right-side-rear-fender-loose" label-text="E" />
                            <x-checkbox name="right-side-rear-fender-missing" label-text="F" />
                        </div>
                    </div>
                    
                </div>
            </div>
                
               
            </div>
            
            <div class="flex items-center justify-end px-2 py-6 sm:p-6  space-x-2 rounded-b  border-gray-200 "> 
            </div>
        </div>

    </form>
</div>
</div>