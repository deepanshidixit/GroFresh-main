<?php
   session_start();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foody - Organic Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/sellerstyle.css" rel="stylesheet">
</head>

<body>
    


    <!-- Navbar Start -->
    <div class="container-fluid  px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                
            </div>
            
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="sellerhome.php" class="logo"><img src ="img/logo.png" style="height:10rem; width:10rem; margin-top:-1.5rem; margin-left:1rem;"><span style="padding-left:-2rem;font-size:2rem;"><b>Gro-Fresh</b></span><em> </em></a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="sellerhome.php" class="nav-item nav-link">Home</a>
                    <a href="" class="nav-item nav-link active" style="color:green;">Products</a>
                   
                       
                       
                        <?php
                              if(isset($_SESSION['log']))
                              {
                                  $logornot=$_SESSION["log"];
                                   if($logornot=="yes")
                                   {
                                       echo "<a class='btn btn-outline-primary rounded-pill py-sm-4 px-sm-3' href='logoutseller.php'>Logout</a>";
                                   }
                                } 
                              
                            ?>
                    
                        
                    </div>

 

                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

     <!-- Product Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-12">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
        
                    </div>
                    <div style="text-align:right">
                    <a href="newproduct.php" class="btn btn-secondary  ">Add Products</a>
                    
                     <a href="deleteproduct.php" class="btn btn-secondary">Delete Products</a>
                            </div>
                </div>
                <?php
      $username=$_SESSION["sellerusername"];
      
      $con=mysqli_connect("localhost","root","","vendorsnearyou");
      $r=mysqli_query($con,"select p_id,p_name,p_desc,price,image from products p, seller s where s.sshopcategory=p.pcategory and s.susername='$username' and p.sname='$username'");
      while($row=mysqli_fetch_array($r))
          {
             echo "
             <form action='' method='POST'>
             <div class='page-section pb-0'>
             <div class='container'>
               <div class='row align-items-center'>
               <div class='col-lg-5 wow' data-wow-delay='400ms'>
                    <a href=''>
                      <div class='img-place custom-img-1' style=';height:15.625em;width:22.625em;'>";
                     
                      
                       echo "<img src='../seller/img/$row[image]' style='height:15em;'>";
                        
                       echo "</div>
                     </a>
                     <br>
                     
                    
                     
                     </div>
                <div class='col-lg-7 py-3 wow '>
                <h3>$row[p_name]</h3>";
               
                     echo "Description:<B>$row[p_desc]</B><br>";
                     echo "Price:<B>$row[price]</B><br>
                     
                     </div>
              
                     </div>
                   </div>
                 </div> <!-- .bg-light -->
               </div> <!-- .bg-light -->
                 </form>                
                     ";
          }
            ?>
            <!-- Footer Start -->
   <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s" >
        <div class="container py-5" style="margin-left:40rem;">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.php" class="logo"><img src ="img/logo.png" style="height:5rem; width:5rem; margin-top:-1.5rem; margin-left:1rem;"><span style="padding-left:-2rem;font-size:2rem;"><b>Gro-Fresh</b></span><em> </em></a>
                    <p style="text-align:center;">Vendors Near You!! We made shopping simple </p>
                    
                </div>
                
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Gro-Fresh</a>, All Right Reserved.
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->