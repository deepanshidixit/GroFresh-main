<?php
   session_start();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script>
   $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} )
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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
                    <a href="sellerhome.php" class="nav-item nav-link active">Home</a>
                    <a href="addproduct.php" class="nav-item nav-link">Products</a>
                    
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
    <div style='float:right; width:80%'>
	<br>
	<table id="example" class="display" style='width:50em;margin-left:-1.875em !important' >
         <thead>
             <tr style='color:black;font-weight:bold'>
                 <th style='text-align:center'>Sno</th>
                 <th style='text-align:center'>Name</th>
		         
			     <th style='text-align:center'>Description</th>
                 <th style='text-align:center'>Price</th>
			    
			     
				 <th></th>
				 <th></th>
				 <th></th>
				 
             </tr>
         </thead>
         
         <tbody>
	<?php
	 $sno=1;
     $username=$_SESSION["sellerusername"];
	     $con=mysqli_connect("localhost","root","","vendorsnearyou");
         $s=mysqli_query($con,"select p_id, p_name,p_desc,price from products p, seller s where s.sshopcategory=p.pcategory and s.susername='$username' and p.sname='$username'");
	  
	     
	              while($row=mysqli_fetch_array($s))
                 {
                    echo "<tr style='color:black;'>";
                    echo "<td align='center'>$sno</td>";
                         echo "<td align='center'>$row[p_name]</td>";
                         echo "<td align='center'>$row[p_desc]</td>";
                         echo "<td align='center'>$row[price]</td>";
                         
                         
                         echo "<td></td>";
  
                         echo "<td></td>";  
  
                         echo "<td><a href='del.php?a=$row[p_id]'><img src='img/delete.png'   style='width:1.45em;height:1.45em;'></a></td>";
                         echo "</tr>";
                         $sno++;
					}
					
					?>
                  
			</tbody></table>		   
	
    </div>
    

    