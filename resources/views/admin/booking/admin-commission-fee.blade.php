<div id="view-commission" tabindex="-1" aria-hidden="true" class="hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-full">
    <div class="relative w-full max-w-md h-auto m-auto">
    
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button before="Close"  type="button" class="absolute top-3 right-2.5 cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm  p-1.5 text-center inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:top-1/2 before:-translate-y-1/2 before:right-[102%] before:rounded-md before:px-2 before:py-1.5 before:text-white font-semibold" data-modal-toggle="view-commission">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                <span class="sr-only">Close Commision Fee</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base text-gray-900 dark:text-white">Commission Fee Percentage</h3>

                @include('message.ajax-success')
                @include('message.ajax-error')

                <form class="space-y-6" method="POST" id="change-percentage-form" action="{{ route('commission.history')}}">
                @csrf
                  
                    <div class="relative">
                        <input type="number" min="1" max="100" name="percentage" id="percentage" value="{{$commission->value}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " />
                        <label id="percentage-error" for="percentage" class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                        peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter percentage</label>
                    </div>
                   
                    <label id="submit-error" class=" mb-2 text-sm font-medium text-red-700"></label>
                
                    <button type="submit" class="btn-1 w-full text-white bg-accent-regular uppercase">update commission</button>
                </form>
            </div>
        </div>
    </div>
</div> 