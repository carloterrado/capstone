@php
    
use Carbon\Carbon;
@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="{{public_path('css/style.css')}}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <!-- <div id="logo">
        <img src="{{public_path('admins/images/Chesca_logo.svg')}}">
      </div> -->
      <h1>INVOICE {{$history['id']}}</h1>
      <div id="company" style="margin-bottom: 32px;"  >
        <div>CCH Car Rental</div>
        <div><a href="{{url('/')}}">{{url('')}}</a></div>
        @if ($history['owner_id'] !== 0)
          <div><span>Owner ID #</span>{{$history['owner_id']}}</div>
        @endif
      </div>
      
      <div id="project" >
        <div><span>Client: </span> {{$history['name']}}</div>
        <div><span>Email: </span> {{$history['email']}}</div>
        <div><span>Contact: </span> {{$history['contact']}}</div>
        <div><span>Address: </span> {{$history['address']}}</div>
        <div><span>Date Issued: </span> {{Carbon::parse($history['created_at'])->tz('Asia/Manila')->format('Y-m-d H:i a')}}</div>
       
      </div>
      
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Book ID</th>
            <th class="desc">Car Description</th>
            <th class="desc">Destination</th>
            <th class="desc">Start Date</th>
            <th class="desc">End Date</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"> {{$history['booking_id']}}</td>
            <td class="desc">
                <div class="left"><span>Car ID: </span> {{$history['car_id']}}</div>
                <div class=""><span>Car Type: </span> {{$history['car_type']}}</div>
                <div class=""><span>Brand and Model: </span> {{$history['car_name']}}</div>
                <div class=""><span>Fuel Type: </span> {{$history['fuel_type']}}</div>
                <div class=""><span>Plate Number: </span> {{$history['plate_number']}}</div>
                <div class=""><span>Capacity: </span> {{$history['capacity']}}</div>
            </td>
            <td class="desc">{{$history['destination']}}</td>
            <td class="desc">{{$history['start_date'].' '.$history['time']}}</td>
            <td class="desc">{{$history['end_date'].' '.$history['time_end']}}</td>
            <td class="desc">{{'Php '.number_format($history['car_price'],2,'.',',')}}</td>
          </tr>
        
          
          <tr>
            <td colspan="2"></td>
            <td colspan="2" style="text-align: start;">Subtotal</td>
            <td colspan="2" style="text-align: start;" class="total">{{'Php '.number_format($history['car_price'],2,'.',',')}}</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2" style="text-align: start;">Driver Fee</td>
            <td colspan="2" style="text-align: start;" class="total">{{'Php '.number_format($history['driver_fee'],2,'.',',')}}</td>
          </tr>
          <tr>
            <td colspan="2" class="grand total"></td>
            <td colspan="2" style="text-align: start;" class="grand total">Grand Total</td>
            <td colspan="2" style="text-align: start;" class="grand total">{{'Php '.number_format($history['grand_total'],2,'.',',')}}</td>
          </tr>
          @if ($history['owner_id'] !== 0)
            <tr>
              <td colspan="2" class="grand total">Commission Fee</td>
              <td colspan="2" style="text-align: start;" class="grand total">status: {{$history['commission']}}</td>
              <td colspan="2" style="text-align: start;" class="grand total">{{'Php '.number_format($history['commission_fee'],2,'.',',')}}</td>
            </tr> 
          @endif
          
        </tbody>
      </table>
     
    </main>
    
  </body>
</html>