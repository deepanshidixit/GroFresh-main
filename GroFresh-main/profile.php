<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <title> Free Food Store Website Template</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="font-awesome.css">

    <link rel="stylesheet" href="css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="height:6.5rem";>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        
                        <a href="showproducts.php" class="logo"><img src ="assets/images/logonew.svg" style="height:9rem; width:9rem; margin-top:-1.5rem; margin-left:-5.2rem;"><span style="padding-left:-2rem;font-size:2rem">Gro-Fresh</span><em> </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="padding-top:1.3rem;">
                            <li><a href="index.php" class="active">Home</a></li>
                                     
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                              
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="grocery.php">Groceries</a>
                                
                                    
                                    <a class="dropdown-item" href="vegetable.php">Fruits and Vegetables</a>
                                    <a class="dropdown-item" href="dairy.php">Dairy Products</a>
                                    
                                </div>
                            <li><a href="checkout.php">Checkout</a></li>
                            
                            
                            
                    
                            <li><a href="aboutus.php">About Us</a></li>
                        
                            <li><a href="contact.php">Contact</a></li> 
                            <?php
                              if(isset($_SESSION["clog"]))
                              {
                                  $logornot=$_SESSION["clog"];
                                   if($logornot=="yes")
                                   {
                                       echo "<li><a class=' py-sm-0 px-sm-3' href='logoutindex.php'>Logout</a></li>";
                                   }
                                } 
                                else
                                {
                                    echo "
                                    <li class='dropdown'>
                                    <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Login</a>
                                  
                                    <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='adminlogin.php'>Admin Login</a>
                                        <a class='dropdown-item' href='loginform.php'>Customer Login</a>
                                        <a class='dropdown-item' href='sellerlogin.php'>Seller Login</a>
                                    </div>
                                </li>
                            
                               <li class='dropdown'>
                               <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>$citydisplay</a>



                                <div class='dropdown-menu'>
                                <form class='dropdown-item'>
                                   <select name='cityname'>
                                   <option value=''>Vellore</option>
                                   <option value=''>Bengaluru</option>
                                   <option value=''>Chennai</option>
                                   </select>
                                   <br><br>
                                   <input type='text' placeholder='apartment no and locality'>
                                 </form>  
                                                                        
                                </div>
                                    
                                    
                                   </li> 
                                    ";
                                }
                              
                            ?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/profile.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>My <em></em>Profile</h2>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <div class="col-lg-6 py-3 wow ">
    <?php
      $un=$_SESSION["un"];
      $con=mysqli_connect("localhost","root","","vendorsnearyou");
      
      $r=mysqli_query($con,"select * from customerregister where email='$un'");
      while($row=mysqli_fetch_array($r))
          { echo"
            <table class='table table-borderless table-dark '>
            <tbody>
              <tr>
                <td>First Name: $row[1]</td>
                </tr>
              <tr>
                <td>Last Name: $row[2]</td>
                </tr>
                <tr>
                <td>Email: $row[3]</td>
                  </tr>
                  <tr>
                  <td>Phone: $row[4]</td>
                    </tr>
  
            </tbody>
          </table>";
          }    
    ?>
              </div>

     <!-- Footer Start -->
   <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">GRO<span class="text-secondary">-</span>FRESH</h1>
                    <p>Vendors Near You!!</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                   
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="aboutus.php">About Us</a><br>
                    <a class="btn btn-link" href="contact.php">Contact Us</a><br>
                    <a class="btn btn-link" href="">Our Services</a><br>
                    <a class="btn btn-link" href="">Terms & Condition</a><br>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Gro-Fresh@2022</a>, All Right Reserved.
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
