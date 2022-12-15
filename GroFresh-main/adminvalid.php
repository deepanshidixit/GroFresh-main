<?php
    session_start();
      $con=mysqli_connect("localhost","root","","vendorsnearyou");

      $un=$_POST["username"];
    
      $pp=$_POST["password"];

      $r=mysqli_query($con,"select * from admin");
      while($row=mysqli_fetch_array($r))
      {
        if($row[0]==$un or $row[1]==$un)
        {
            if($row[2]==$pp)
            { 
                $_SESSION["alog"]="yes";
                header("location:Admin.php");
            }
            else
            {
              header("Location:adminlogin.php?invalid_login=true");
            }
        }
        else
            {
              header("Location:adminlogin.php?invalid_login=true");
            }
        
      }

?>