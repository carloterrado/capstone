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
		<h2>Car Booking Cancellation Notification</h2>
		<p>Dear {{$name}},</p>
		<p>This is to inform you that the following booking has been cancelled by the renter:</p>
		<ul>
			<li>Reference No: #{{$booking->id}}</li>
			<li>Renter Name: {{$renter}}</li>
			<li>Start Date: {{$booking->start_date}}</li>
			<li>End Date: {{$booking->end_date}}</li>
		</ul>
		<p>Please take necessary action to update your records.</p>
		<p>If you have any questions or concerns, please do not hesitate to contact us. We are always here to help.</p>
		<p>Thank you for using our services.</p>
		<br>
		<p>Best regards,</p>
		<p>CCH Car Rentals</p>
	</div>
    
</body>
</html>