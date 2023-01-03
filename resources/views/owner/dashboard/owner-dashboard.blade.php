<div class="p-4 sm:p-6 lg:p-14 lg:pt-7 min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)] ">
    <nav class="flex mb-4 sm:mb-6 lg:mb-7" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{url('admin/dashboard')}}" class="inline-flex items-center text-2xl lg:text-4xl  font-bold text-gray-700 hover:text-accent-regular"><svg xmlns="http://www.w3.org/2000/svg"  class="inline mb-1 mr-1 h-8 lg:h-12 w-8 lg:w-12" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z"/></svg>
                    Dashboard
                </a>
            </li>
        </ol>
    </nav>
    <section class="grid grid-cols-8 gap-2 lg:gap-6">
        
        <div class="w-full max-w-sm col-span-8 sm:col-span-4 lg:col-span-2">
            <div class="bg-green-500 border rounded shadow p-2">
                <div class="flex flex-row items-center h-24">
                    <div class="flex-shrink pl-1 pr-4"><div class="flex-shrink pl-1 pr-4 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" class="w-10 h10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="currentColor" d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg></div></div>
                    <div class="flex-1 text-right">
                        <h5 class="text-white font-semibold">Total Cars</h5>
                        <h3 class="text-white text-3xl">{{ $dashboard['ownerCarCount'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm col-span-8 sm:col-span-4 lg:col-span-2">
            <div class="bg-green-500 border rounded shadow p-2">
                <div class="flex flex-row items-center h-24">
                    <div class="flex-shrink pl-1 pr-4"><div class="flex-shrink pl-1 pr-4 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" class="w-10 h10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="currentColor" d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg></div></i></div>
                    <div class="flex-1 text-right">
                        <h5 class="text-white font-semibold">Car Request</h5>
                        <h3 class="text-white text-3xl">{{ $dashboard['ownerCarRequestCount'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm col-span-8 sm:col-span-4 lg:col-span-2">
            <div class="bg-green-500 border rounded shadow p-2">
                <div class="flex flex-row items-center h-24">
                    <div class="flex-shrink pl-1 pr-4"><div class="flex-shrink pl-1 pr-4 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="7" cy="17" r="2"/><path d="M15.584 15.588a2 2 0 0 0 2.828 2.83M5 17H3v-6l2-5h1m4 0h4l4 5h1a2 2 0 0 1 2 2v4m-6 0H9m-6-6h8m4 0h3m-6-3V6M3 3l18 18"/></g></svg></div></div>
                    <div class="flex-1 text-right">
                        <h5 class="text-white font-semibold">Declined Cars</h5>
                        <h3 class="text-white text-3xl">{{ $dashboard['ownerCarDeclinedCount'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>

    
</div>