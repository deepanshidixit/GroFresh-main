<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="loginformstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome.css">

    <title>Admin Login</title>
    
  </head>
  <body>
    
<?php
  if( isset( $_GET['invalid_login']) AND $_GET['invalid_login'] == 'true' ) {
     echo "<script>alert('Invalid login details');</script>";

}
  ?>
  <header class="header-area header-sticky" style="height: 6.5rem ;">
        <div class="container" >
            <div class="row" >
                <div class="col-12" >
                    <nav class="main-nav" >
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo"><img src ="assets/images/logonew.svg" style="height:9rem; width:9rem; margin-top:-1.5rem; margin-left:-5.2rem;"><span style="padding-left:-2rem;font-size:2rem; color:black;">Gro-Fresh</span><em> </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="padding-top:1.3rem;">
                            <li><a href="index.php" style="color:black;">Home</a></li>
                            
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:red;">Login</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="loginform.php" style="color:black;">Customer Login</a>
                                    <a class="dropdown-item" href="sellerlogin.php" style="color:black;">Seller Login</a>
                                    
                                </div>
                              <li><a href="aboutus.php" style="color:black">About Us</a></li>

                            
                            <li><a href="contact.php" style="color:black;">Contact</a></li> 
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
    
    
    
    
  

  <div class="d-lg-flex half" style="height:100%">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/images/gro.jpg');margin-top:-15% ;"></div>
    <div class="contents order-2 order-md-1">

      <div class="container" >
        <div class="row align-items-center justify-content-center" >
          <div class="col-md-7" style="margin-top:20%;">
            <h3>Login</h3>
            <p class="mb-4">Enter Your Username and Password</p>
            <form action="adminvalid.php" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>
              <input type="submit" value="Log In" class="btn btn-block">

             

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    
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