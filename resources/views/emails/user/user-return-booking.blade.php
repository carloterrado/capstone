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
		<p>Dear {{ $name }},</p>
		<p>This is to inform you that the car rented by {{ $renter }} has been returned. Please find below the details of the rental:</p>
		<ul>
			<li>Booking ID: #{{ $bookingId }}</li>
			<li>Start Date: {{ $startDate }}</li>
			<li>End Date: {{ $endDate }}</li>
		</ul>
		<p>We hope that the car was returned in good condition and that the rental experience was satisfactory. If there were any issues or concerns, please let us know as soon as possible.</p>
		<p>Thank you for your continued support and for using our services. We look forward to serving you again in the future.</p>
		<br>
		<p>Best regards,</p>
		<p>Chesca Chen's Car Rental</p>
	</div>
    
</body>
</html>