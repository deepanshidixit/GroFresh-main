<?php
session_start();
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://ip-api.com/json');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);
if($result->status=='success')
 {  $citydisplay = $result->city;
    $regiondisplay=$result->regionName;
  
 }



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title> </title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

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
                        
                        <a href="index.php" class="logo"><img src ="assets/images/logonew.svg" style="height:9rem; width:9rem; margin-top:-1.5rem; margin-left:-5.2rem;"><span style="padding-left:-2rem;font-size:2rem">Gro-Fresh</span><em> </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="padding-top:1.3rem;">
                            <li><a href="index.php">Home</a></li>
                                     
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                              
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="grocery.php">Groceries</a>
                                
                                    
                                    <a class="dropdown-item" href="vegetables.php">Fruits and Vegetables</a>
                                    <a class="dropdown-item" href="dairy.php">Dairy Products</a>
                                    
                                </div>
                            <li><a href="checkout.php">Checkout</a></li>
                            
                            
                            
                    
                            <li><a href="aboutus.php">About Us</a></li>
                        
                            <li><a href="contact.php" class="active">Contact</a></li> 
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
    


    
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/Contact.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Feel free to <em>Contact Us</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>contact <em> info</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5><a href="#">+1 333 4040 5566</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5><a href="#">contact@gro-fresh.com</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
<?php
                    echo "<a href='#'><h5>$citydisplay</a></h5>";
                    ?>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
                        <form id="contact" action="message.php" method="post" style="">
                          <div class="row" style="">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
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
                    <a class="btn btn-link" href="">About Us</a><br>
                    <a class="btn btn-link" href="">Contact Us</a><br>
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