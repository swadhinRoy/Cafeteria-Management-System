<?php
  session_start();
   require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/styleIndex.css">
</head>

<body>

  <br><br>
  
  <div id="main-wrapper">
  <center><h2><p style="color:white">login Form</h2>
   <img src="bracu_logo.png" class="avatar"/>
  </center>
  
  
  <form class="myform" action="index.php" method="post">
   <p style="color:white"> <label><b>Id:</b></label>
  <input name="id" type="text" class="inputvalues" placeholder="Type your id" />
  <label><b><br>Password:</b> </label>
 <input name="password" type="password" class="inputvalues" placeholder="Type your password"/><p>
  <input name="login" type="submit" id="login_btn" value="Login"/></br>
  <a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
  </form>
  
  <?php
  if(isset($_POST['login']))
  {
	$id=$_POST['id'];
    $password=$_POST['password'];
	

    $query="select * from user WHERE id='$id' AND password='$password'";

    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
	{
		$_SESSION['id']=$id;
		echo("<script>window.location.href = 'homepage.php' </script>");
		
	}	
	else
	{
		
		echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
	}
	  
  }
  
  ?>
  
  
  </div>
</body>

</html>