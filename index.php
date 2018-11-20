<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class= "header">
		<h2>Login</h2>
	</div>
	<form method="post" action="index.php">
		<div class="input.group">
			<label>Email Address</label>
			<input type="text" name="email">
		</div>
		<div class="input.group">
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div class = "input-group"> 
			<button type="submit" name="index.php" class="btn"> Submit</button>
		</div>
		<p>
			Not a member? <a href="register.php"> Sign up! </a> 
		</p>
	</form>
</body>
</html>