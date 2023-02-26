<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="font-family: Arial, sans-serif; font-size: 14px;">
		<h2>Car Return Notification</h2>
		<p>Dear {{$name}},</p>
		<p>This is to inform you that the car you rented has been returned. Please find below the details of the rental:</p>
		<ul>
			<li>Booking ID: #{{$bookingId}}</li>
			<li>Start Date: {{$startDate}}</li>
			<li>End Date: {{$endDate}}</li>
		</ul>
		<p>We hope that you had a great experience with our service and that the car met your expectations. If you have any feedback or suggestions for us, please feel free to share them with us.</p>
		<p>Thank you for using our services. We look forward to serving you again in the future.</p>
		<br>
		<p>Best regards,</p>
		<p>Chesca Chen's Car Rental</p>
	</div>
    
</body>
</html>