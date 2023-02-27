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
		<h2>Car Booking Cancellation</h2>
		<p>Dear {{$name}},</p>
		<p>We regret to inform you that your booking with us has been cancelled due to unforeseen circumstances. We apologize for any inconvenience this may have caused and we hope to serve you in the future.</p>
		<p>Your booking details are as follows:</p>
		<ul>
			<li>Booking ID: #{{$booking->id}}</li>
			<li>Start Date: {{$booking->start_date}}</li>
			<li>End Date: {{$booking->end_date}}</li>
		</ul>
		
		<p>We appreciate your understanding and cooperation in this matter. If you have any questions or concerns, please do not hesitate to contact us. We are always here to help.</p>
		<p>Thank you for considering our services.</p>
		<br>
		<p>Best regards,</p>
		<p>CCH Car Rentals</p>
	</div>
    
</body>
</html>