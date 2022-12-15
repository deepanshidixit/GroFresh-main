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


 if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="grocery.php"</script>';
			}
		}
	}
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
                        
                        <a href="index.php" class="logo"><img src ="assets/images/logonew.svg" style="height:9rem; width:9rem; margin-top:-1.5rem; margin-left:-5.2rem;"><span style="padding-left:-2rem;font-size:2rem">Gro-Fresh</span><em> </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="padding-top:1.3rem;">
                            <li><a href="index.php">Home</a></li>
                                     
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                              
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="grocery.php" class="active">Groceries</a>
                                
                                    
                                    <a class="dropdown-item" href="vegetables.php">Fruits and Vegetables</a>
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
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/groceryb.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Products</em></h2>
                        <p>
                            Select your product from our menu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <body>
		<br />
		<div class="container">
    <div class="row">
			<br />
			<br />
			<br />
			<br /><br />
			<?php
              $connect=mysqli_connect("localhost","root","","vendorsnearyou");
				$query = "select * from products where pcategory='grocery'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-lg-3">
				<form method="POST" action="grocery.php?action=add&id=<?php echo $row[0]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:0.3125rem; padding:1rem;" text-align="center">
						<img src="seller/img/<?php echo $row["image"] ?>" class="img-responsive" style='height:10em;width:8em' /><br />

						<h4 class="text-info"><?php echo $row["p_name"]; ?></h4>

						<h4 class="text-danger">INR <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />


                        <?php
                            if(isset($_SESSION["clog"]))
                            {
                                $logornot=$_SESSION["clog"];
                                 if($logornot=="yes")
                                 {
                                    echo "<input type='submit' name='add_to_cart' style='margin-top:5px;' class='btn btn-success' value='Add to Cart' />";
                                 }
                                }
                                else
                                {
                                    echo "<a href='loginform.php'><input type='button' style='margin-top:5px;' class='btn btn-success' value='Add to Cart' /></a> ";
                                }
                       ?>

						

					</div>
          
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
      </div>
      <br><br>
			<h3>Order Details</h3>
			<div class="table-responsive">
                <form method="POST" action="checkout.php" >
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
                     



					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>INR <?php echo $values["item_price"]; ?></td>
						<td>INR <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="grocery.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
                            $_SESSION["total"]=$total;
                            $iname=$values["item_name"];
                            $iquan=$values["item_quantity"];
                            $iprice=$values["item_price"];

                              echo "<input type='text' value='$iname' name='inm[]' hidden>";
                             echo "<input type='text' value='$iquan' name='iquan[]' hidden>";
                            echo "<input type='text' value='$iprice' name='iprice[]' hidden>";
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">INR <?php echo number_format($total, 2); ?></td>
                        <td><input type="text" value="<?php echo $total ?>" name="total" hidden></td>
						<td><input type="submit" value="Pay Now" class="btn btn-success"></td>
					</tr>
					<?php
					}
					?>
						
				</table>
                </form>
			</div>
        
		</div>
	</div>
	<br />
	</body>
</html>
    
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