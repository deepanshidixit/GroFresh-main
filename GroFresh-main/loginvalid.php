<?php
    session_start();
      $con=mysqli_connect("localhost","root","","vendorsnearyou");
      $count=0;
      $un=$_POST["username"];
      $pp=$_POST["password"];
      $r=mysqli_query($con,"select * from customerregister");
      while($row=mysqli_fetch_row($r))
      {
        if($row[3]==$un and $row[5]==$pp)
        {
          $count=1;
          break;
         
        }
       
      }
      if($count==1)
      {
        $_SESSION["clog"]="yes";
        $_SESSION["un"]=$un;
        header("location:index.php");
      }
      else
      {
        header("location:loginform.php?invalid_login=true");
      }


?>