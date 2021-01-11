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
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" placeholder="Username" name="Username"></br>
		</div>
		
		<div class="input-group">
			<label>Password</label> 
			<input type="Password" placeholder="Enter Password" name="Password_1"></br>
		</div>
		
		<div class="input-group"></br>
			<button type="submit" name="loginogin" class="btn">Log in</button>
		</div>
		<p> 
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</center>
</body>
</html>