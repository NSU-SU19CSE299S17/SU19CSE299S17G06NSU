
<?php
  
  $db = mysqli_connect("localhost", "root", "", "project");


  $msg = "";

   if (isset($_POST['upload'])) {
  	
  	$image = $_FILES['image']['name'];
  	
  	$text = mysqli_real_escape_string($db, $_POST['text']);
?>


<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
	*



</body>
</html>