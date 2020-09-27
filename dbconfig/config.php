<?php
include_once 'TestCode/function.php';

$con = mysqli_connect("localhost","root","")or die("Unable to connect");
mysqli_select_db($con,"beta");

connectionTest($con); //added here
?>
