<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add Employee</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/regform.css">
		<meta http-equiv="Cache-control" content="no-cache">
		<!-- Back Button - not working 
			<script>
			function goBack() {
  			window.history.back();
			}
		</script> -->
	</head>
	<body>
		<div class="header">
		<img src="images/logo.png" alt="logo here">
		<!-- <img src="logo.png" alt="logohere"> -->

			<nav id="navbar">
				<ul>
					<li><a class="navmenu" href="adminhome.php" >Home</a></li>
					<li><a class="navmenu" id="current" href="register.php" >Add Employee</a></li>
					<li><a class="navmenu" href="viewuser.php" >View Employee</a></li>
					<li><a class="navmenu" href="assignproj.php" >Assign Projects</a></li>
					<li><a class="navmenu" href="projstat.php" >Project Status</a></li>
					<li><a class="navmenu" href="index.php" >Logout</a></li>
				</ul>
			
			</nav>
		</div>
		<div class="form-area1">
			<form action="register.php" method="POST">
				<h3>Registration Form:</h3>
				<br>
				<label>First Name</label> <br>
				<input type="text" name="firstName" placeholder="enter first name">
				<br>

				<label>Last Name</label> <br>
				<input type="text" name="lastName" placeholder="enter last name">
				<br>

				<label>Email</label> <br>
				<input type="email" name="email" placeholder="enter your email">
				<br>
				
				<label>Gender</label>
				<select name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>
				<br>

				<label>Age:</label> <br>
				<input type="number" name="age" placeholder="eg.25">
				<br>

				<label>Birthday:</label> <br>
				<input type="date" name="birthday">
				<br>
				<br>
				<input class="button" type="submit" name="submit" value="Sign Up">
				<br>
				<br>
				<!-- <button class="button" onclick="goBack()">Go Back</button> -->
				<!-- <a class="button" href="index.php">Go Back</a> -->


			</form>
		</div>
		<footer class="footer">
			<br>
			<h5>Copyright &copy; 2020,Arif Systems. Created by TeamGenius</h5>
			<br>
		</footer>
	</body>
</html>
