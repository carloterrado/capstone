@php
    use Carbon\Carbon;
@endphp
<div id="{{'view-history'.$history['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">
    <div class="relative w-full max-w-4xl m-auto bg-white rounded-lg">

        <form  class=" relative bg-white rounded-lg shadow" enctype="multipart/form-data" >
        
            <div class="form-step step-one pb-6">
                <div class="flex justify-between px-2 pt-6 pb-4 sm:p-6 rounded-t items-center ">
                    <h2 class="text-lg sm:text-xl font-semibold uppercase leading-4">Booking details</h2>
                    <button data-modal-toggle="{{'view-history'.$history['id']}}" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="">
                    <header class="clearfix after:content-[''] after:clear-both after:table mx-auto">
                    
                        <h1 class=" sm:mx-6 border-y text-center  text-[#5D6975] border-[#5D6975] text-lg md:text-3xl">BOOKING ID {{$history['id']}}</h1>
                        <div class="grid grid-cols-6 sm:px-6 mb-12 mt-6">
                            <div class="col-span-6 sm:col-span-3 p-2 space-y-2">
                                <div><span>CLIENT: </span> {{$history['name']}}</div>
                                <div><span>EMAIL: </span> {{$history['email']}}</div>
                                <div><span>CONTACT: </span> {{$history['contact']}}</div>
                                <div><span>ADDRESS: </span> {{$history['address']}}</div>
                                <div><span>DATE ISSUED: </span> {{Carbon::parse($history['created_at'])->tz('Asia/Manila')->format('Y-m-d H:i a')}}</div>
                            
                            </div>
                            <div  class="col-span-6 sm:col-span-3 p-2 space-y-2" >
                                <div class="md:text-right">CCH Car Rental</div>
                                <div class="md:text-right"><a href="{{url('/')}}">{{url('')}}</a></div>
                            </div>
                        </div>
                        
                    </header>
                    <div class="md:hidden px-2 sm:px-8">
                        <div class="left"><span class="font-semibold">BOOK ID: </span> {{$history['booking_id']}}</div>
                        <ul class="space-y-2">
                            <li class="font-semibold">Car Description:</li>
                            <li><span>CAR ID: </span> {{$history['car_id']}}</li>
                            <li>CAR TYPE: </span> {{$history['car_type']}}</li>
                            <li>CAR NAME: </span> {{$history['car_name']}}</li>
                            <li>PLATE NUMBER: </span> {{$history['plate_number']}}</li>
                            <li><span>CAPACITY: </span> {{$history['capacity']}}</li>
                        </ul>
                        <div class="left"><span class="font-semibold">Destination: </span> {{$history['destination']}}</div>
                        <div class="left"><span class="font-semibold">Start Date: </span> {{$history['start_date'].' '.$history['time']}}</div>
                        <div class="left"><span class="font-semibold">End Date: </span> {{$history['end_date'].' '.$history['time']}}</div>
                        <div class="left"><span class="font-semibold">Price: </span> {{'₱ '.number_format($history['car_price'],2,'.',',')}}</div>

                        <div class="mt-4">
                            <div class="left"><span class="font-semibold">SUBTOTAL: </span> {{'₱ '.number_format($history['car_price'],2,'.',',')}}</div> 
                            <div class="left"><span class="font-semibold">DRIVER: </span> {{'₱ '.number_format($history['driver_fee'],2,'.',',')}}</div> 
                            <div class="left"><span class="font-semibold">GRAND TOTAL: </span> {{'₱ '.number_format($history['grand_total'],2,'.',',')}}</div> 
                        </div>
                    </div>
                    <main class="sm:px-6 hidden md:block">
                        <table class="border w-full">
                            <thead>
                            <tr>
                                <th class="service">BOOK ID</th>
                                <th class="desc">Car Description</th>
                                <th class="desc">Destination</th>
                                <th class="desc">Start Date</th>
                                <th class="desc">End Date</th>
                                <th>PRICE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="service"> {{$history['booking_id']}}</td>
                                <td class="desc">
                                    <div class="left"><span>CAR ID: </span> {{$history['car_id']}}</div>
                                    <div class=""><span>CAR TYPE: </span> {{$history['car_type']}}</div>
                                    <div class=""><span>CAR NAME: </span> {{$history['car_name']}}</div>
                                    <div class=""><span>PLATE NUMBER: </span> {{$history['plate_number']}}</div>
                                    <div class=""><span>CAPACITY: </span> {{$history['capacity']}}</div>
                                </td>
                                <td class="desc">{{$history['destination']}}</td>
                                <td class="desc">{{$history['start_date'].' '.$history['time']}}</td>
                                <td class="desc">{{$history['end_date'].' '.$history['time']}}</td>
                                <td class="desc">{{'₱ '.number_format($history['car_price'],2,'.',',')}}</td>
                            </tr>
                            
                            
                            <tr>
                                <td colspan="5">SUBTOTAL</td>
                                <td class="total">{{'₱ '.number_format($history['car_price'],2,'.',',')}}</td>
                            </tr>
                            <tr>
                                <td colspan="5">DRIVER</td>
                                <td class="total">{{'₱ '.number_format($history['driver_fee'],2,'.',',')}}</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="font-semibold">GRAND TOTAL</td>
                                <td class="font-semibold">{{'₱ '.number_format($history['grand_total'],2,'.',',')}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </main>
                </div>
                
                
            </div>
        </form>
    </div>
</div>

