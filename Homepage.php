<?php
  session_start();
   require 'dbconfig/config.php'
?>
<html>
<head>
   <title>Homepage</title>
   <link rel="stylesheet" type="text/css" href="css/style1.css">
   </head>
   <body>
   <header>
   <div class="main">
     <div class="logo">
	   <img src="bracu_logo.png">
	 </div>
   <ul>
   <li class="active"><a href="#">Home</a></li>
    <li><a href="Services.html">Services</a></li>
	 <li><a href="review.html">Review</a></li>
	  <li><a href="about.html">About</a></li>
	   <li><a href="contact.html">Contact</a></li>
   </ul>
   </div>
   <div class="title">
   <h1><font color='Black'><b>Bracu Cafeteria<b></font><br></h1>
   </div>
   
    <?php
     $id=$_SESSION['id'];
	 
  $query="select * from user WHERE id=$id ";


    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
	{   
   $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
   
   echo "<br><br><br></br><br></br> ";


echo "<div align='center'><font size='8' face='Century Gothic' color='white'><b><br>Welcome {$row['username']}<br></font></div>";
echo "<font color='white'><br><br>     Your ID:  </font>";
echo "<font size='3' face='Century Gothic' color='white'>{$row['id']}</font>";
        $_SESSION['username']=$row['username'];
	
echo "<font color='white'><br><br>     Your Email:  </font>";

echo "<font size='3' face='Century Gothic' color='white'>{$row['email']}</font>";
echo "<font color='white'><br><br>Your Phone:  </font>";

echo "<font size='3' face='Century Gothic' color='white'>{$row['phone']}</font>";

	}
  ?>
   
   
   <br>
   
   <div class="button">
   <br><br><br><br><a href="Orderlist.php" class="btn">Order food</a>
    <a href="OrderEdit.php" class="btn">Edit Current Order</a><br><br><br><br>
	<a href="DeleteOrder.php" class="btna">Delete Current Order</a>
	<a href="ShowCurrentOrder.php" class="btn">Current Order</a>
	
	</center>
  
  <div class="buttona">
   <div>
    <a href="index.php" class="btna">Log Out</a>
   </div>
   </header>
   </body>
   </html>