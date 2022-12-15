<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","vendorsnearyou");
	
	$r=mysqli_query($con,"delete from seller where sellerid='$id'");
	if($r)
	  header("location:delseller.php");
?>