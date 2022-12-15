<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/signupstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome.css">

    <title>Seller Sign Up</title>
  </head>

  <body>

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
                            <li><a href="" style="color:black;">Products</a></li>
                            <li><a href="" style="color:black;">Checkout</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:red";>Login</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="sellerlogin.php" style="color:black;">Seller Login</a>
                                    
                                </div>
                                </li>
                                <li><a href=""style="color:black;" >About Us</a></li>
                            
                            <li><a href="" style="color:black;">Contact</a></li> 
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
<div>
    <div class="d-lg-flex half" >
    <div class="bg order-1 order-md-2" style="background-image: url('assets/images/seller.jpg');width:50%;"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center" style= "margin-left:10% ;margin-top:7%;">
          <div class="col-md-7">
            <br><br><br>
            <h3>Register</h3>
             <p class="mb-4" style="color:black">Enter User details to register</p>
            <form action="validsellerregister.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="e.g. John" id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="e.g. Smith" id="lname">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">username</label>
                    <input type="text" name="username" class="form-control" placeholder="e.g. user123" id="username">
                  </div>    
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="e.g. john@your-domain.com" id="email">
                  </div>    
                </div>
              </div>

              <div class="row">
              <div class="col-md-6">
                  <div class="form-group first">
                    <label for="phoneno">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="+00 0000000000" id="phoneno">
                  </div>    
                </div>

                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="email">Shop-name</label>
                    <input type="text" name="shopname" class="form-control" id="shopname">
                  </div>    
                </div> 
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    
                    <label for="Shopcategory">Shop Category</label>
                   
                    <select name="food" id="food" placeholder="Select category" class="form-control">
  <option value="grocery">Grocery</option>
  <option value="fruitsveggies">Fruits and vegetables</option>
  <option value="dairyproducts">Dairy Products</option>

</select>

                   
                  </div>    
                </div>
              
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="Street">Street name</label>
                    <input type="text" name="street" class="form-control" placeholder="" id="street">
                  </div>    
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="City">City</label>
                    <input type="text" name="city" class="form-control" placeholder="" id="City">
                  </div>    
                </div>
              

                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="State">State</label>
                    <input type="text" name="state" class="form-control" placeholder="" id="State">
                  </div>    
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" placeholder="" id="country">
                  </div>    
                </div>
              
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="pin">Pin code</label>
                    <input type="number" name="pin" class="form-control" placeholder="" id="pin">
                  </div>    
                </div>
              </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group last mb-3">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                    </div>
                  </div>

                <div class="col-md-6">
                  <div class="form-group last mb-3">
                    <label for="re-password">Re-type Password</label>
                    <input type="password" class="form-control" placeholder="Your Password" id="re-password">
                  </div>
                </div>
              </div>
              
              <div class="d-flex mb-5 mt-4 align-items-center" style="">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Creating an account means you're okay with our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>
              <input type="submit" value="Register" class="btn px-5">
              <p><a href="sellerlogin.php">Already registered? Back to Login</a></p>
              

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