
<?php
  
  $db = mysqli_connect("localhost", "root", "", "project");


  $msg = "";

   if (isset($_POST['upload'])) {
  	
  	$image = $_FILES['image']['name'];
  	
  	$text = mysqli_real_escape_string($db, $_POST['text']);

  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
  	
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  	 }
  $result = mysqli_query($db, "SELECT * FROM images");
?>


<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
	*



</body>
</html>