<div id="histories" tabindex="-1" aria-hidden="true"
    class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg">

    <div class="relative w-full max-w-5xl m-auto">


        <form method="POST" action="{{route('admin.history')}}" class="relative bg-white rounded-lg shadow">
            @csrf

            <!-- Step 1 -->
            <div class="">
                <div class="flex justify-between p-4 rounded-t border-b">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Filter History
                    </h3>

                    <button before="Close" data-modal-toggle="histories" type="button"
                        class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:top-1/2 before:-translate-y-1/2 before:right-[102%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative font-semibold">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="client"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Name</option>
                                @php
                                    $names = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @if (!in_array($history['name'], $names))
                                        <option class="" value="{{ $history['name'] }}">{{ $history['name'] }}
                                        </option>
                                        @php
                                            $names[] = $history['name'];
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Client</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="email"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Email</option>
                                @php
                                    $emails = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @if (!in_array($history['email'], $emails))
                                        <option class="" value="{{ $history['email'] }}">{{ $history['email'] }}
                                        </option>
                                        @php
                                            $emails[] = $history['email'];
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Email</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="car"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Car</option>
                                @php
                                    $cars = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @if (!in_array($history['car_name'], $cars))
                                        <option class="" value="{{ $history['car_name'] }}">
                                            {{ $history['car_name'] }}</option>
                                        @php
                                            $cars[] = $history['car_name'];
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Cars</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="type"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Car Type</option>
                                @php
                                    $types = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @if (!in_array($history['car_type'], $types))
                                        <option class="" value="{{ $history['car_type'] }}">
                                            {{ $history['car_type'] }}</option>
                                        @php
                                            $types[] = $history['car_type'];
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Car
                                Type</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="fuel"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Fuel</option>
                                @php
                                    $fuels = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @if (!in_array($history['fuel_type'], $fuels))
                                        <option class="" value="{{ $history['fuel_type'] }}">
                                            {{ $history['fuel_type'] }}</option>
                                        @php
                                            $fuels[] = $history['fuel_type'];
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Fuel</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="options"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Driver Option</option>
                                @php
                                    $driverOptions = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @if (!in_array($history['driver'], $driverOptions))
                                        <option class="" value="{{ $history['driver'] }}">
                                            {{ $history['driver'] }}</option>
                                        @php
                                            $driverOptions[] = $history['driver'];
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Driver
                                Option</label>
                        </div>
                      
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <label for="" class="text-xs">Filter Date Rented</label>
                            <div class="relative ">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input type="date" name="date" value=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="month"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Month</option>
                                @php
                                    $months = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @php
                                        $monthNumber = date('m', strtotime($history['created_at']));
                                        $monthName = date('F', strtotime($history['created_at']));
                                    @endphp
                                    @if (!in_array($monthNumber, $months))
                                        @php
                                            $months[] = $monthNumber;
                                        @endphp
                                    @endif
                                @endforeach

                                @php
                                    sort($months);
                                @endphp

                                @foreach ($months as $monthNumber)
                                    @php
                                        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));
                                    @endphp
                                    <option class="" value="{{ $monthNumber }}">
                                        {{ $monthName }}</option>
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Month</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 md:col-span-2 relative">
                            <select name="year"
                                class="cursor-pointer-none block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-900 appearance-none peer">
                                <option selected value="">Filter Year</option>
                                @php
                                    $years = [];
                                @endphp
                                @foreach ($histories as $history)
                                    @php
                                        $year = date('Y', strtotime($history['created_at']));
                                    @endphp
                                    @if (!in_array($year, $years))
                                        <option class="" value="{{ $year }}">
                                            {{ $year }}</option>
                                        @php
                                            $years[] = $year;
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            <label
                                class="pointer-events-none absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-gray-900 peer-focus:font-semibold peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 whitespace-nowrap">Year</label>
                        </div>
                    </div>

                </div>
                <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 ">
                    <button type="submit"
                        class="step-2 details btn-1 bg-accent-regular uppercase  w-full sm:w-[fit-content]   text-white whitespace-nowrap">Filter</button>
                </div>
            </div>


        </form>
    </div>
</div>
