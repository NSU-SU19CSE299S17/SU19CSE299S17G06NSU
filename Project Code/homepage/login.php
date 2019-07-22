<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<link href="login.css" rel="stylesheet" type="text/css"
</head>
<body>
 <div class="login-page">
 <div class="form">
	<form class="login-form" method="POST" >
	<input type="text" name="name" placeholder="User Name"/>
	<input type="password"name="password" placeholder="Password"/>
	
	<input type="submit" class="button"  name="login" value="login"/>

<?php
	
	session_start();
	
	if (isset($_POST['login'])){
	include_once("config.php");
}

?>

	
	<p class="message"> Not Registered? <a href="signup.php"> Sign Up </a> </p>
	</form>
	</body>
</html>