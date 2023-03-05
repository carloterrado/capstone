
<div id="{{'car-schedule'.$car['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">

    <div class="relative w-full max-w-xl m-auto bg-white rounded-lg">

        
        <form   class="check-list-form relative bg-white rounded-lg shadow ">

       
        
            <div class="view-step detail-one">
                <div class="flex justify-end p-4 pb-0 rounded-t ">     
                    <button data-modal-toggle="{{'car-schedule'.$car['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class=" p-4 pt-0">
                    <h3 class=" text-sm font-semibold mb-2">Car Schedule:</h3>
                    <div class="relative overflow-auto">
                        <input type="hidden" data-bookdates="{{json_encode($car['car_booking'])}}"  value="" name="date"  class="date-input block px-2.5 py-2 w-full text-xs text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 mb-2" placeholder="choose date" readonly>
                    </div>
                    <div class="text-[10px] grid grid-cols-4 mt-2">
                        <div class="flex items-center gap-1 col-span-2 ">
                            <div class="w-2 h-2 bg-accent-regular"></div>
                            <p>Booked Dates</p>
                        </div>
                        
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>