
<!DOCTYPE html>
<html>
<head>
	<title>Account Confirmation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div style="font-family: Arial, sans-serif; font-size: 14px;">
		<h2>Account Confirmation</h2>
		<p>Dear {{ $name }},</p>
		<p>Thank you for registering with CCH Car Rentals! Your account has been created successfully. To complete the registration process, please click on the link below to confirm your email address:</p>
		<p><a href="{{url('confirm/'.$code)}}" target="_blank">{{$code}}</a></p>
		<p>If you did not create an account with CCH Car Rentals, please ignore this message and do not click on the confirmation link.</p>
		<p>Thank you for choosing CCH Car Rentals. We look forward to providing you with our services.</p>
		<br>
		<p>Best regards,</p>
		<p>CCH Car Rentals</p>
	</div>
</body>
</html>

