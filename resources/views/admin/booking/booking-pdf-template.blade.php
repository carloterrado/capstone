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
      <div id="logo">
        <img src="{{public_path('admins/images/Chesca_logo.svg')}}">
      </div>
      <h1>INVOICE {{$history['id']}}</h1>
      
      <div id="project" >
        <div><span>CLIENT</span> {{$history['name']}}</div>
        <div><span>EMAIL</span> {{$history['email']}}</div>
        <div><span>CONTACT</span> {{$history['contact']}}</div>
        <div><span>ADDRESS</span> {{$history['address']}}</div>
        <div><span>DATE ISSUED</span> {{Carbon::parse($history['created_at'])->format('Y-m-d H:i a')}}</div>
       
      </div>
      <div id="company"  >
        <div>CCH Car Rental</div>
        <div><a href="{{url('/')}}">cch-car-rental.up.railway.app</a></div>
        @if ($history['owner_id'] !== 0)
          <div><span>Owner ID #</span>{{$history['owner_id']}}</div>
        @endif
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
            <td colspan="2"></td>
            <td colspan="2" style="text-align: start;">SUBTOTAL</td>
            <td colspan="2" style="text-align: start;" class="total">{{'₱ '.number_format($history['car_price'],2,'.',',')}}</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2" style="text-align: start;">DRIVER</td>
            <td colspan="2" style="text-align: start;" class="total">{{'₱ '.number_format($history['driver_fee'],2,'.',',')}}</td>
          </tr>
          <tr>
            <td colspan="2" class="grand total"></td>
            <td colspan="2" style="text-align: start;" class="grand total">GRAND TOTAL</td>
            <td colspan="2" style="text-align: start;" class="grand total">{{'₱ '.number_format($history['grand_total'],2,'.',',')}}</td>
          </tr>
          @if ($history['owner_id'] !== 0)
            <tr>
              <td colspan="2" class="grand total">COMMISSION FEE</td>
              <td colspan="2" style="text-align: start;" class="grand total">status: {{$history['commission']}}</td>
              <td colspan="2" style="text-align: start;" class="grand total">{{'₱ '.number_format($history['commission_fee'],2,'.',',')}}</td>
            </tr> 
          @endif
          
        </tbody>
      </table>
     
    </main>
    
  </body>
</html>