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
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signupstyle.css">
    <link rel="stylesheet" href="stylenew.css">
    <link rel="stylesheet" href="font-awesome.css">

</head>

<body>
    

    <!-- Navbar Start -->
    <div class="container-fluid  px-0 wow fadeIn" data-wow-delay="0.1s">
        
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="logo"><img src ="img/logo.png" style="height:10rem; width:10rem; margin-top:-1.5rem; margin-left:1rem;"><span style="padding-left:-2rem;font-size:2rem;"><b>Gro-Fresh</b></span><em> </em></a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="sellerhome.php" class="nav-item nav-link active">Home</a>
                    <a href="addproduct.php" class="nav-item nav-link">Products</a>
                    <a href="product.html" class="nav-item nav-link">My Profile</a>
                    
                        <a href="#" class="nav-item nav-link">Sales</a>
                        
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>


<!-- Form start-->
    <div class="d-lg-flex half" style="margin-top:-15em;" >
    <div class="bg order-1 order-md-2" style="background-image: url('img/productss.jpg');width:70%;margin-top:5%;"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center" style= "margin-left:10% ;margin-top:7%;">
          <div class="col-md-8" style="margin-top:-5em; margin-left:5em;">
            <br><br><br>
            <h3>Update Product</h3>
             <p class="mb-4" style="color:black">Enter details to update the required field </p>
            <form action="validupdateproduct.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="pname">Product Name</label>
                    <input type="text" name="pname" class="form-control" placeholder="" id="pname">
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
                
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="desc">Description</label>
                    <textarea  name="desc" class="form-control" placeholder="80-100 characters" id="desc"></textarea>
                  </div>    
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="" id="price">
                  </div>    
                </div>
              </div>

              <div class="row">
              <div class="col-md-6">
                  <div class="form-group first">
                    <label for="image">Image</label>
                    <input type="file" name="pimg" class="form-control" placeholder="" id="image">
                  </div>    
                </div>
            
        
              <div> 
              <input type="submit" value="UPDATE" class="btn px-5">
               </div>
               
              

            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
  


