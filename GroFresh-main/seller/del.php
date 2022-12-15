<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","vendorsnearyou");
	
	$r=mysqli_query($con,"delete from products where p_id=$id");
	if($r)
	  header("location:deleteproduct.php");
?>