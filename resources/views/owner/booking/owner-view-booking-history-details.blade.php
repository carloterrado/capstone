@php
    use Carbon\Carbon;
@endphp
<div id="{{'view-history'.$history['id']}}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">
    <div class="relative w-full max-w-5xl m-auto bg-white rounded-lg content-container">

        <div  class=" relative bg-white rounded-lg shadow"  >
        
            <div class=" pb-6 ">
                <div class="flex justify-between px-2 sm:px-6 pt-6  rounded-t items-center relative">
                    <button  type="button" before="Download" class="relative download-checklist  cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm  mr-auto  before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:top-0 before:left-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white " >
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M5 3h14a2 2 0 0 1 2 2v14c0 1.11-.89 2-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2m3 14h8v-2H8v2m8-7h-2.5V7h-3v3H8l4 4l4-4Z"/></svg>
                    </button>
                    @include('message.small-loading')
                    <button data-modal-toggle="{{'view-history'.$history['id']}}" type="button" before="Close" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:top-0 before:right-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="p-2 sm:p-6  content">
                    
                    <h1 class="text-[#5D6975]  text-lg md:text-3xl">BOOKING ID #{{$history['id']}}</h1>
                    <div class="grid grid-cols-6  mb-12 mt-6">
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
                    <div class=" hidden md:block">
                        <table class="border w-full">
                            <thead>
                            <tr>
                                <th >BOOK ID</th>
                                <th >Car Description</th>
                                <th >Destination</th>
                                <th >Start Date</th>
                                <th >End Date</th>
                                <th>PRICE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> {{$history['booking_id']}}</td>
                                <td >
                                    <div ><span>CAR ID: </span> {{$history['car_id']}}</div>
                                    <div ><span>CAR TYPE: </span> {{$history['car_type']}}</div>
                                    <div ><span>BRAND AND MODEL: </span> {{$history['car_name']}}</div>
                                    <div ><span>FUEL TYPE: </span> {{$history['fuel_type']}}</div>
                                    <div ><span>PLATE NUMBER: </span> {{$history['plate_number']}}</div>
                                    <div ><span>CAPACITY: </span> {{$history['capacity']}}</div>
                                </td>
                                <td >{{$history['destination']}}</td>
                                <td >{{$history['start_date'].' '.$history['time']}}</td>
                                <td >{{$history['end_date'].' '.$history['time']}}</td>
                                <td >{{'₱ '.number_format($history['car_price'],2,'.',',')}}</td>
                            </tr>
                            
                            
                            <tr>
                                <td colspan="4">SUBTOTAL</td>
                                <td colspan="2" class="total">{{'₱ '.number_format($history['car_price'],2,'.',',')}}</td>
                            </tr>
                            <tr>
                                <td colspan="4">DRIVER</td>
                                <td colspan="2" class="total">{{'₱ '.number_format($history['driver_fee'],2,'.',',')}}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="font-semibold">GRAND TOTAL</td>
                                <td colspan="2" class="font-semibold ">{{'₱ '.number_format($history['grand_total'],2,'.',',')}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="font-semibold">COMMISSION FEE</td>
                                <td colspan="2" class="font-semibold">Status: {{$history['commission']}}</td>
                                <td colspan="2" class="font-semibold">{{'₱ '.number_format($history['commission_fee'],2,'.',',')}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                     <!--MOBILE VIEW  -->
                     <div class="md:hidden px-2 sm:px-8">
                        <div class="left"><span class="font-semibold">BOOK ID: </span> {{$history['booking_id']}}</div>
                        <ul class="space-y-2">
                            <li class="font-semibold">Car Description:</li>
                            <li><span>CAR ID: </span> {{$history['car_id']}}</li>
                            <li>CAR TYPE: </span> {{$history['car_type']}}</li>
                            <li>BRAND AND MODEL: </span> {{$history['car_name']}}</li>
                            <li>FUEL TYPE: </span> {{$history['fuel_type']}}</li>
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
                            <div class="left"><span class="font-semibold">COMMISSION FEE: </span> {{'₱ '.number_format($history['commission_fee'],2,'.',',')}}</div> 
                            <div class="left"><span class="font-semibold">COMMISSION FEE STATUS: </span> {{$history['commission']}}</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script src="{{url('js/html2canvas.min.js')}}"></script>






