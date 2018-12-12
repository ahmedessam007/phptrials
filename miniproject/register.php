<?php include("server.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>regitration page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2> Register</h2>
	
</div>
<form method="post" action="register.php" >
	<!-- display validation error -->
	<?php include("erros.php"); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username"value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email"value="<?php echo $email; ?>">
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="confirm_password">
	</div>
	<div>
		<button type="submit" name="register" class="btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>

</form>
</body>
</html>