<?php
     
     $con=mysqli_connect("localhost","root","","vendorsnearyou");

     $fn=$_POST["fname"];
     $ln=$_POST["lname"];
     $un=$_POST["username"];
     $email=$_POST["email"];
     $phone=$_POST["phone"];
     $shop=$_POST["shopname"];
     $shopno=$_POST["food"];
     $street=$_POST["street"];
     $city=$_POST["city"];
     $state=$_POST["state"];
     $country=$_POST["country"];
     $pin=$_POST["pin"];
     $pass=$_POST["password"];
     

     

       $r=mysqli_query($con,"insert into seller(sfname,slname,susername,semail,sphone,sshopname,sshopcategory,sstreet,scity,sstate,scountry,spincode,spassword) values('$fn','$ln','$un','$email','$phone','$shop','$shopno','$street','$city','$state','$country','$pin','$pass') ");
       if($r)
       header("location:addseller.php");
   
   ?>