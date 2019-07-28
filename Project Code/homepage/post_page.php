<!DOCTYPE html>

<html>
<head>
<title>Image Upload</title>


<style type="text/css">
	*


</style>

</head>
<body>

<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['text']."</p>";
      echo "</div>";
    }
  ?>

  <form method="POST" action="post_page.php" enctype="multipart/form-data">

  <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="text" 
      	placeholder="Say something about your sell post and add description"></textarea>
  	</div>
  	
</body>
</html>