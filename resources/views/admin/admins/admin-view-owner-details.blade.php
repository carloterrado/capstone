@if (!empty($admin['admins']))
    <div id="{{'admin'.$admin['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full  rounded-lg">
        <div class="relative w-full max-w-2xl m-auto bg-white rounded-lg">
            
            <form  class="relative bg-white rounded-lg shadow">
                
                <div class="flex justify-between items-start p-4 rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Owner details
                    </h3>
                    <button before="Close" data-modal-toggle="{{'admin'.$admin['id']}}"  type="button" class="close text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center font-semibold before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:top-1/2 before:-translate-y-1/2  before:right-[102%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
            
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Name: <span class="font-semibold">{{$admin['first_name'].' '.$admin['last_name']}}</span></p>
                        </div>
                       
                        <div class="col-span-6 sm:col-span-3">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Email: <span class="font-semibold">{{$admin['email']}}</span></p>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Contact: <span class="font-semibold">{{$admin['admins']['contact']}}</span></p>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Birthdate: <span class="font-semibold">{{$admin['admins']['birthdate']}}</span></p>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                        <p  class="block mb-2 text-sm font-medium text-gray-900 ">Address: <span class="font-semibold">{{$admin['admins']['address']}}</span></p>
                        </div>  
                        <div class="col-span-6 sm:col-span-3">
                        
                        </div>  
                        <div class="col-span-6 sm:col-span-3">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">License</p>
                           <a class="zoomable-image" href="data:image/jpeg;base64,{{$admin['admins']['license']}}"> <img src="data:image/jpeg;base64,{{$admin['admins']['license']}}" alt="license"> </a>
                        </div>  
                        <div class="col-span-6 sm:col-span-3">
                            <p  class="block mb-2 text-sm font-medium text-gray-900 ">Valid ID: <span class="font-semibold">{{$admin['admins']['valid_id']}}</span></p>
                           <a class="zoomable-image" href="data:image/jpeg;base64,{{$admin['admins']['valid_id_file']}}"> <img src="data:image/jpeg;base64,{{$admin['admins']['valid_id_file']}}" alt="license"> </a>
                        </div>  
                    </div>
                </div>
                
                <div class="flex items-center p-6 space-x-2 rounded-b ">
                    
                </div>
            </form>
        </div>
    </div>
@endif