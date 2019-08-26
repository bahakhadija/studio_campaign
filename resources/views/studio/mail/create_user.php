<!DOCTYPE html>
<html>
<head>
	<title>new user account</title>
</head>
<body>
	<h1>WELCOME TO STUDIO CAMPAIGN APP</h1>
	<p>We just need you to confirm your email address and finish setting up a new account we created just for you. You can do it super-quickly!</p>
	<?php echo $user_code; ?>
	<a href="http://localhost/studio_campaign/public/setuppassword/<?php echo $user_code; ?>">Click to Confirm Your Account And Setup Your Password</a>
</body>
</html>