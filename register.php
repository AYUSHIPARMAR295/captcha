<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<center>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" placeholder="Username" name="Username"></br>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" placeholder="Enter Email" name="Email"></br>
		</div>
		<div class="input-group">
			<label>Password</label> 
			<input type="Password" placeholder="Enter Password" name="Password_1"></br>
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="Password" placeholder="Enter Confirm Password" name="Password_2"></br>
		</div>
		<div class="input-group"></br>
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p> 
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</center>
</body>
</html>