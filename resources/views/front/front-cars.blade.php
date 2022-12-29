<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)] grid grid-cols-6 lg:grid-cols-8 gap-6 p-2 py-12 sm:p-6 sm:py-12">
    <div class="col-span-6 grid grid-cols-6 gap-6">
        @for ($i =1; $i < 10; $i++ )
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md p-5 col-span-6 md:col-span-3 xl:col-span-2 m-auto">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 text-center ">Suzuki Swift</h2>
            <h3 class="mb-2 text-xl tracking-tight text-accent-regular text-center ">₱ 1,000 / Day</h3>
            <div class="grid grid-cols-6 gap-2 mb-6 text-xs whitespace-nowrap">
                <div class="col-span-2 grid grid-cols-7 items-center">
                    <i class='bx bxs-car font-bold text-base align-bottom col-span-2'></i><span class="col-span-5">Sedan</span> 
                </div>
                <div class="col-span-2 grid grid-cols-7 items-center">
                    <i class='bx bxs-group font-bold text-base align-bottom col-span-2'></i><span class="col-span-5"> 4 Seater</span> 
                </div>
                <div class="col-span-2 grid grid-cols-7 items-center">
                   <i class='bx bx-id-card font-bold text-base align-bottom col-span-2'></i><span class="col-span-5"> With driver</span> 
                </div>
                
            </div>
        
            <img class="rounded-lg h-40 w-full object-cover" src="{{url('admins/images/cars/main/12157.jpg')}}" alt="" />
            <button type="button" class="details btn-1 bg-accent-regular uppercase  w-full mt-6  text-white whitespace-nowrap">Reserve now</button>
        </div>
        @endfor
    </div>
    <div id="view-car-sort" class="col-span-2 hidden max-w-sm lg:block fixed inset-0  lg:relative overflow-y-auto z-10">
        <button type="button" class="lg:hidden sort-car absolute top-6 right-6 bg-accent-regular text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
        </button>
        <form action="">
            <div class="min-h-screen lg:min-h-full bg-[#f5f5f5] border border-gray-200 rounded-lg shadow-md pt-12 lg:pt-6 p-6">
                <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-gray-900 text-center uppercase">Find A Car</h2>
                <p class="mb-2  tracking-tight text-gray-500 text-center ">Pick a car that suites your needs </p>
                <div class="mt-6">   
                    <label class="block mb-2 text-sm font-medium text-gray-900 uppercase">Car type: </label>
                    <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                    <option>Sedan</option>
                    <option>Jeepney</option>
                    <option>SUVs</option>
                    </select>
                </div>   
                <div class="mt-6">   
                    <label class="block mb-2 text-sm font-medium text-gray-900 uppercase">Capacity: </label>
                    <input type="password"  class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " autocomplete="on" />
                </div>   
                <div class="mt-6">   
                    <label class="block mb-2 text-sm font-medium text-gray-900 uppercase">Rent option: </label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                    <option>With driver</option>
                    <option>Car only</option>
                    </select>
                </div> 
                <div class="mt-6">   
                    <label  class="block mb-2 text-sm font-medium text-gray-900 uppercase">Price: </label>
                
                    <div class="relative">
                        <div class="range-value tracking-[.1rem] absolute -top-1/2" id="rangeV"></div>
                        <input id="range" type="range" min="1000" max="20000" value="10000" step="100">
                    </div>

                </div>
                <div class="mt-6">
                <button type="submit" class="details btn-1 bg-accent-regular uppercase  w-full   text-white whitespace-nowrap">Search</button>
                </div>
            </div>
        </form>
    </div>
    <button type="button" class="sort-car fixed top-1/2 -translate-y-1/2 left-1 h-10 w-10 lg:hidden bg-accent-regular/90 rounded-full ">
    <i class='bx bx-search text-2xl absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-white font-medium'></i>
</button>

</main>
<script>
    const
	range = document.getElementById('range'),
	rangeV = document.getElementById('rangeV'),
	setValue = ()=>{
		const
			newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
			newPosition = 10 - (newValue * 0.2);
		rangeV.innerHTML = `<span>${range.value}</span>`;
		rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
	};
    document.addEventListener("DOMContentLoaded", setValue);
    range.addEventListener('input', setValue);
</script>
