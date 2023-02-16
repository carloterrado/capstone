<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>

            <div>
                <img src="{{public_path('front/images/booknow.png')}}" alt="image" style="width: 100%; height: 100px">
                <div>
                    <ul class="text-center">
                        <li>{{$history['booking_id']}}</li>
                        <li>{{$history['name']}}</li>
                        <li>{{$history['contact']}}</li>
                        <li>{{$history['address']}}</li>
                        <li>{{$history['car_name']}}</li>
                        <li>{{$history['plate_number']}}</li>
                        <li>{{$history['capacity']}}</li>
                        <li>{{$history['car_type']}}</li>
                        <li>{{$history['start_date']}}</li>
                        <li>{{$history['end_date']}}</li>
                        <li>{{$history['time']}}</li>
                        <li>{{$history['destination']}}</li>
                        <li>{{$history['driver']}}</li>
                        <li>{{$history['driver_fee']}}</li>
                        <li>{{$history['car_price']}}</li>
                        <li>{{$history['grand_total']}}</li>
                        <li>{{$history['car_id']}}</li>
                    </ul>
                    
                </div>
                
            </div>
        
    </div>



    
</body>
</html>