<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)] grid grid-cols-6 lg:grid-cols-9 gap-6 p-2 py-12 sm:p-6 sm:py-12">
    <div class="col-span-6 lg:col-span-7 grid grid-cols-6 gap-6 car_filter relative">
       @include('front.front-ajax-cars')
       
     
       
    </div>
    
    <div id="view-car-sort" class="col-span-2 hidden max-w-sm lg:block fixed inset-0  lg:relative overflow-y-auto z-10">
        <button type="button" class="lg:hidden sort-car z-10 absolute top-6 right-6 bg-accent-regular text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
        </button>
        
        <form method="post" name="sortCar" id="sortCar">
            @csrf
            <div class="min-h-screen lg:min-h-full bg-[#f5f5f5] border border-gray-200 rounded-lg shadow-md pt-12 lg:pt-6 p-6 relative">
                @include('message.loading')
                @include('message.ajax-error')
                <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-gray-900 text-center uppercase">Find A Car</h2>
                <p class="mb-2  tracking-tight text-gray-500 text-center ">Pick a car that suites your needs </p>
                <div class="mt-6">   
                    <label class="block mb-2 text-sm font-medium text-gray-900 uppercase">Car type: </label>
                    <select name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                    <option disabled selected>Select</option>
                    @foreach ($cartypes as $cartype )
                        <option value="{{$cartype['id']}}"
                        @if (isset($_GET['type']) && $_GET['type'] === strval($cartype['id']))
                            selected
                        @endif 
                        >{{$cartype['name']}}</option>
                    @endforeach
                    </select>
                </div>   
                <div class="mt-6">   
                    <label class="block mb-2 text-sm font-medium text-gray-900 uppercase">Capacity: </label>
                    <select name="capacity" id="capacity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                    <option disabled selected>Select</option> 
                    <option value="10" @if (isset($_GET['capacity']) && $_GET['capacity'] === '10') selected @endif >10</option>
                    <option value="15" @if (isset($_GET['capacity']) && $_GET['capacity'] === '15') selected @endif>15</option>
                    <option value="20" @if (isset($_GET['capacity']) && $_GET['capacity'] === '20') selected @endif>20</option>
                    <option value="25" @if (isset($_GET['capacity']) && $_GET['capacity'] === '25') selected @endif>25</option>
                    <option value="30" @if (isset($_GET['capacity']) && $_GET['capacity'] === '30') selected @endif>30</option>
                    </select>
                </div>   
                 
                <div class="mt-6">   
                    <label class="block mb-2 text-sm font-medium text-gray-900 uppercase">Rent option: </label>
                    <select name="driver" id="driver" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-0 focus:border-gray-900 block w-full p-2.5 ">
                    <option disabled selected>Select</option>
                    <option value="1" @if (isset($_GET['driver']) && $_GET['driver'] === '1') selected @endif>With driver</option>
                    <option value="0" @if (isset($_GET['driver']) && $_GET['driver'] === '0') selected @endif>Car only</option>
                    </select>
                </div> 
                
                <div class="my-6 relative">   
                    <label  class="block mb-2 text-sm font-medium text-gray-900 uppercase">Price: </label>
                
                 
                    <div class="values text-gray-900 text-sm pb-6">
                        <span id="range1">
                        500
                        </span>
                        <span> &dash; </span>
                        <span id="range2">
                        20000
                        </span>
                    </div>
                    <div class="container">
                        <div class="slider-track"></div>
                        <input name="from" type="range" min="500" max="20000" @if(isset($_GET['from'])) value="{{$_GET['from']}}" @else value="500"  @endif step="100" id="slider-1" oninput="slideOne()">
                        <input name="to" type="range" min="500" max="20000" @if(isset($_GET['to'])) value="{{$_GET['to']}}" @else value="10000"  @endif step="100" id="slider-2" oninput="slideTwo()">
                    </div>
                </div>
                <div class="pb-6 text-sm font-medium text-accent-regular" id="search-error-message">   
              
                </div> 
                
                <div class="mt-6">
                <button type="submit" class="btn-1 bg-accent-regular uppercase  w-full   text-white whitespace-nowrap">Search</button>
                </div>
                
               
            </div>
        </form>
    </div>
    <button type="button" class="sort-car fixed top-1/2 -translate-y-1/2 left-1 h-10 w-10 lg:hidden bg-accent-regular/90 rounded-full ">
    <i class='text-2xl absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-white font-medium'>
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M9.61 16.11c0-2.08.98-3.92 2.49-5.11H5l1.5-4.5h11l1.22 3.66c.84.37 1.58.91 2.19 1.58L18.92 6c-.2-.58-.76-1-1.42-1h-11c-.66 0-1.22.42-1.42 1L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h4.29c-.43-.87-.68-1.85-.68-2.89M6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16m14.21 4.7l-.01.01l.01-.01m-4.6-9.09c2.5 0 4.5 2 4.5 4.5c0 .89-.25 1.71-.69 2.39L23 21.61L21.61 23l-3.11-3.07c-.7.43-1.5.68-2.39.68c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5m0 2a2.5 2.5 0 1 0 2.5 2.5c0-1.39-1.11-2.5-2.5-2.5"/></svg>
    </i>
    </button>
    
</main>
<script>
    window.onload = function () {
    slideOne();
    slideTwo();
    };

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;

    function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.textContent ='₱ '+ sliderOne.value;
    fillColor();
    }
    function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.textContent = '₱ '+ sliderTwo.value;
    fillColor();
    }
    function fillColor() {
    percent1 = (sliderOne.value / sliderMaxValue) * 100;
    percent2 = (sliderTwo.value / sliderMaxValue) * 100;
    sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
    }
</script>



