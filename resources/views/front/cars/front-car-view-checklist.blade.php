
<div id="{{'view-checklist'.$book['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">
    <div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">
        <div  class="checklist-form relative bg-white rounded-lg shadow"  >
           @include('message.loading')
            <form class="form-step step-one pb-6">
                <div class="flex justify-between px-2 pt-6 pb-4 sm:p-6 rounded-t items-center ">
                    <h2 class="text-lg sm:text-xl font-semibold uppercase leading-4">Car Checklist</h2>
                    <button data-modal-toggle="{{'view-checklist'.$book['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="sm:w-1/2 mx-auto">
                    @include('message.ajax-success')
                    @include('message.ajax-error')
                </div>
                @if ($book['status'] !== 'ongoing') 
                    <button  bookingid="{{$book['id']}}"  class="confirmedChecklist btn-1 mx-auto block bg-accent-green w-[fit-content]  text-white whitespace-nowrap"> Confirm checklist</button>
                @endif
            </form>
            <!-- form -->
        </div> 
    </div>
</div>

