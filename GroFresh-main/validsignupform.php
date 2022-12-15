
    <?php
     
      $con=mysqli_connect("localhost","root","","vendorsnearyou");

      $fn=$_POST["fname"];
      $ln=$_POST["lname"];
      $email=$_POST["email"];
      $phone=$_POST["phone"];
      $pass=$_POST["password"];       
      if($fn)

      $pass=$_POST["password"];
      $r=mysqli_query($con,"insert into customerregister(firstname,lastname,email,phonenumber,password)values('$fn','$ln','$email','$phone','$pass') ");
        if($r)
        header("location:loginform.php?register=true");
    

    ?>

