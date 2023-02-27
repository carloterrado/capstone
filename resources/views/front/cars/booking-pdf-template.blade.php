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
      <div id="company"  style="margin-bottom: 32px;">
        <div>CCH Car Rental</div>
        <div><a href="{{url('/')}}">{{url('')}}</a></div>
      </div>
      <div id="project" >
        <div><span>CLIENT</span> {{$history['name']}}</div>
        <div><span>EMAIL</span> {{$history['email']}}</div>
        <div><span>CONTACT</span> {{$history['contact']}}</div>
        <div><span>ADDRESS</span> {{$history['address']}}</div>
        <div><span>DATE</span> {{Carbon::parse($history['created_at'])->format('Y-m-d H:i a')}}</div>
       
      </div>
      
    </header>
    <main>
      <table>
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
                <div class=""><span>BRAND AND MODEL: </span> {{$history['car_name']}}</div>
                <div class=""><span>FUEL TYPE: </span> {{$history['fuel_type']}}</div>
                <div class=""><span>PLATE NUMBER: </span> {{$history['plate_number']}}</div>
                <div class=""><span>CAPACITY: </span> {{$history['capacity']}}</div>
            </td>
            <td class="desc">{{$history['destination']}}</td>
            <td class="desc">{{$history['start_date'].' '.$history['time']}}</td>
            <td class="desc">{{$history['end_date'].' '.$history['time']}}</td>
            <td class="desc">{{'Php '.number_format($history['car_price'],2,'.',',')}}</td>
          </tr>
        
          
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td colspan="4" class="total">{{'Php '.number_format($history['car_price'],2,'.',',')}}</td>
          </tr>
          <tr>
            <td colspan="4">DRIVER</td>
            <td colspan="4" class="total">{{'Php '.number_format($history['driver_fee'],2,'.',',')}}</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td colspan="4" class="grand total">{{'Php '.number_format($history['grand_total'],2,'.',',')}}</td>
          </tr>
        </tbody>
      </table>
     
    </main>
    
  </body>
</html>