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
</body>
</html>