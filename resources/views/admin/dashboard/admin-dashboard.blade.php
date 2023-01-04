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
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Car Type</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="currentColor" d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['cartypeCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Cars</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="currentColor" d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['adminCarCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Owner Cars</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="currentColor" d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerCarCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Car Request</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-yellow-400/20 text-yellow-400 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="currentColor" d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerCarRequestCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Declined Cars</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-red-700/10 text-red-700 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="7" cy="17" r="2"/><path d="M15.584 15.588a2 2 0 0 0 2.828 2.83M5 17H3v-6l2-5h1m4 0h4l4 5h1a2 2 0 0 1 2 2v4m-6 0H9m-6-6h8m4 0h3m-6-3V6M3 3l18 18"/></g></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerCarDeclinedCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Admin</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><circle cx="14.67" cy="8.3" r="6" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1h13.44Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36Zm-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['adminCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Staff</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><circle cx="14.67" cy="8.3" r="6" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1h13.44Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36Zm-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['staffCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Car Owners</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><circle cx="14.67" cy="8.3" r="6" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1h13.44Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36Zm-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Car Owner Request</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-yellow-400/20 text-yellow-400 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><circle cx="14.67" cy="8.3" r="6" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1h13.44Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36Zm-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerRequestCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Declined Owners</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-red-700/10 text-red-700 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M10 4a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4m7.5 9C15 13 13 15 13 17.5s2 4.5 4.5 4.5s4.5-2 4.5-4.5s-2-4.5-4.5-4.5M10 14c-4.42 0-8 1.79-8 4v2h9.5a6.5 6.5 0 0 1-.5-2.5a6.5 6.5 0 0 1 .95-3.36c-.63-.08-1.27-.14-1.95-.14m7.5.5c1.66 0 3 1.34 3 3c0 .56-.15 1.08-.42 1.5L16 14.92c.42-.27.94-.42 1.5-.42M14.92 16L19 20.08c-.42.27-.94.42-1.5.42c-1.66 0-3-1.34-3-3c0-.56.15-1.08.42-1.5Z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerDeclinedCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Users</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14 19.5c0-2 1.1-3.8 2.7-4.7c-1.3-.5-2.9-.8-4.7-.8c-4.4 0-8 1.8-8 4v2h10v-.5m5.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5s3.5-1.6 3.5-3.5s-1.6-3.5-3.5-3.5M16 8c0 2.2-1.8 4-4 4s-4-1.8-4-4s1.8-4 4-4s4 1.8 4 4Z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['userCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">Inactive Users</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-red-700/10 text-red-700 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M10 4a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4m7.5 9C15 13 13 15 13 17.5s2 4.5 4.5 4.5s4.5-2 4.5-4.5s-2-4.5-4.5-4.5M10 14c-4.42 0-8 1.79-8 4v2h9.5a6.5 6.5 0 0 1-.5-2.5a6.5 6.5 0 0 1 .95-3.36c-.63-.08-1.27-.14-1.95-.14m7.5.5c1.66 0 3 1.34 3 3c0 .56-.15 1.08-.42 1.5L16 14.92c.42-.27.94-.42 1.5-.42M14.92 16L19 20.08c-.42.27-.94.42-1.5.42c-1.66 0-3-1.34-3-3c0-.56.15-1.08.42-1.5Z"/></svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['userInactiveCount'] }}</h3>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
    </section>

    
</div>