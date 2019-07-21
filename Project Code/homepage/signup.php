<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link href="signup.css" rel="stylesheet" type="text/css"
</head>
<body>
 <div class="signup-page">
 <div class="form">
	<form class="register-form" method="post">
	<input type="text" name="name" placeholder="User Name"/>
	<input type="password" name="password" placeholder="Password"/>
	<input type="text" name="email" placeholder="Email"/>
	<input type="number" name="number" placeholder="Number"/>
	<input type="text" name="location" placeholder="Location"/>
	
	<input type="submit" class="button"  name="Submit" value="Submit"/>

	
	<p class="message"> Already Registered? <a href="login.php"> Log In </a> </p>
	</form>
	</body>

<?php
//including the database connection file
include_once("config.php");

	if(isset($_POST['Submit'])) {	
	
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$location = $_POST['location'];


	$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
	
	//header("Location: index.php");
	echo "<h4 align = 'center'>Sign Up was Successful</h4>";
		
	}


?>


</html>