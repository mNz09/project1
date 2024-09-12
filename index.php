<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>GG Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta http-equiv="Cache-control" content="no-cache">
</head>
<body>
	<div class="header">
		<img src="images/logo.png" alt="logo here">
			<!-- <img src="logo.png" alt="logohere"> -->
	</div>

	<div class="form-area">
		<form action="connect.php" method="post">
			<h3><a href="adminhome.php">(Admin)Login</a> to Continue:</h3>
			<br>
			<label>Email:</label>
			<br>
			<input type="email" name="mail" placeholder="enter email">
			<br>
			<label>Password:</label>
			<br>
			<input type="password" name="pass" placeholder="enter password" >
			<br>

			<select>
				<option>Admin</option>
				<option>Staff</option>
			</select>
			<br>
			<br>
			<!-- <input class="button" type="button" name="submit" value="Login"> -->
			<!-- Remove line below and discomment line above. -->
			<a href="userhome.php" class="button">Login</a> 
			<br>
			<br>
			<!-- <a class="button" href="register.php">Register</a> -->

		</form>
	</div>
	<footer class="footer">
		<br>
		<h5>Copyright &copy; 2020, Arif Systems. Created by TeamGenius</h5>
		<br>
	</footer>

</body>
</html>