<?php
     session_start();
     $con=mysqli_connect("localhost","root","","vendorsnearyou");

     $pn=$_POST["pname"];
     $pc=$_POST["food"];
     $desc=$_POST["desc"];
     $price=$_POST["price"];
     move_uploaded_file($_FILES["pimg"]["tmp_name"],"../seller/img/".$_FILES["pimg"]["name"]);
      $pic=$_FILES["pimg"]["name"];
      $username=$_SESSION["sellerusername"];

      $r=mysqli_query($con,"select p_id from products p seller s where s.sshopcategory=p.pcategory and s.susername='$username'");      
      if($r)
      {
        $sno=1;
            $con=mysqli_connect("localhost","root"," ","vendorsnearyou");
            $up=mysqli_query($con,"update products set p_name='$pn',pcategory='$pc',p_desc='$desc',price='$price',image='$pic' where p_id='$r'");
                  
                     if($up)
                     {
                        header("location:addproduct.php");
                     }
                   
      }
     
          
                     
                    
   
    


   ?>