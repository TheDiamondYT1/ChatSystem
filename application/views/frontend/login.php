<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login">

	<div class="login-error">
		<?php echo validation_errors(); ?>		
	</div>

	<?php echo form_open('verifylogin'); ?>
		<input class="login-input" placeholder="Username" type="text" size="20" id="username" name="username"/>
		<br>
		<input class="login-input" placeholder="Password" type="password" size="20" id="passowrd" name="password"/>
		<br>
		<input class="login-btn" type="submit" value="Login"/>
	</form>

</div>

</body>
</html>