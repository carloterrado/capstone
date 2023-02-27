
 <!DOCTYPE html>
<html>
<head>
    <title>Car Booking Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333333;
            line-height: 1.5;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Car Booking Status</h2>
        <p>Hello {{ $name }},</p>
        {!! $newmessage !!}
        <br>
        <p>Best regards,</p>
        <p>Chesca Chen's Car Rental</p>
    </div>
</body>
</html>

