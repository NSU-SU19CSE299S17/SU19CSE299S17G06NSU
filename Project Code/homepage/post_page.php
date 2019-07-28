<!DOCTYPE html>

<html>
<head>
<title>Image Upload</title>


<style type="text/css">
	*
	{
	background-image:url(image/welcome.jpg);
	
	background-size:cover;
	background-position:center;
	font-size:15px;
	}
	 #content{
   	width: 70%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
	font-size:20px;

   }
   form{
   	width: 70%;
   	margin: 20px auto;
	font-size:20px;
   }

    form div{
   	margin-top: 5px;
	font-size:20px;
	
   	background-color: white;
   	
   }
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

  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>

</body>
</html>