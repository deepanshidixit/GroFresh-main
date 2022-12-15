<?php
  session_start(); 
?>
<div style=''>
 <div style='margin-left:320px;' >
 
 
<?php
            $total= $_SESSION["total"];
            
            $inm=$_SESSION["inm"];
            $iquan=$_SESSION["iquan"];
            $iprice=$_SESSION["iprice"];
            $add=$_SESSION["add"];
            $fnm=$_SESSION["fnm"];
            $lnm=$_SESSION["lnm"];
            $city=$_SESSION["city"];
            $state=$_SESSION["state"];
            $zip=$_SESSION["zip"];

			 
			 
			     
				 ?>
				  
				    <br><br>
					
                    

                    <div id="content"  class="container mt-5 mb-5">

<div  class="row d-flex justify-content-center">

    <div class="col-md-8">
  <form method='POST' action="finalorder.php">
        <div class="card">


                <div class="text-left logo p-2 px-5">

                    <img src="https://i.imgur.com/2zDU056.png" width="50">
                    

                </div>

                <div class="invoice p-5">

                    <h5>Your order Confirmed!</h5>
                    
                    <span class="font-weight-bold d-block mt-4">Hello, </span><br><br>
                    <span>You order has been confirmed and will be shipped in next two days!</span>

                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                        <table class="table table-borderless">
                            
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted"><B>Order Date</B></span>
                                        <span><?php echo date("Y-m-d")?></span>
                                        <input type="date" value='<?php echo date("Y-m-d")?>' name='dt' hidden>
                                            
                                        </div>
                                    </td>
                                    <td style='width:10%'></td>
                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted"><B>Order No</B></span>
                                        <span>101</span>
                                            
                                        </div>
                                    </td>

                                    <td>
                             
                                    </td>
                                     <td style='width:10%'></td>
                                    <td >
                                        <div class="py-2">

                                            <span class="d-block text-muted"><B>Shiping Address</B></span>
                                        <span><?php echo $fnm." ".$add." ".$city." ".$state." ".$zip;?></span>
                                            
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>




                        
                    </div>
                    <?php 
                     $con=mysqli_connect("localhost","root","","vendorsnearyou");
                    ?>



                        <div class="product border-bottom table-responsive">

                            <table class="table table-borderless">
                               
                            <tbody>
                               
                               
                                    <?php
                                     foreach($inm as $inm)
                                     {
                                       
                                      $r=mysqli_query($con,"select * from products where p_name='$inm'");
                                      if($row=mysqli_fetch_row($r))
                                      {
                            
                      
                             echo " <tr>
                                    <td width='20%'>
                                    
                                    <img src='seller/img/$row[5]' width='90'>

                                </td>
                            
                                <td width='60%'>
                                    <span class='font-weight-bold'>$row[1]</span>
                                   
                                </td>
                                <td width='20%'>
                                    <div class='text-right'>
                                        <span class='font-weight-bold'>Rs.$row[4]</span>
                                    </div>
                                </td>
                                </tr>";
                            }
                        }
                            ?>


                               
                            </tbody> 
                                
                            </table>
                            


                        </div>



                        <div class="row d-flex justify-content-end">

                            <div class="col-md-5">

                                <table class="table table-borderless">

                                    <tbody class="totals">

                                        <tr style=''>
                                            <td style='font-weight:bold'>
                                                <div class="text-left">

                                                    <H2><span class="text-muted">Subtotal</span><H2>
                                                    
                                                </div>
                                            </td>
                                            <td style='font-weight:bold'>
                                                <div class="text-right">
                                                <H2>  <span><?php echo "Rs.$total";?></span> </H2>
                                                </div>
                                            </td>
                                        </tr>


                                        



                                         

                                        
                                        
                                    </tbody>
                                    
                                </table>
                                
                            </div>
                            


                        </div>


                       
                        <p class="font-weight-bold mb-0">Thanks !</p>
                        



                    

                </div>


                <div class="d-flex justify-content-between footer p-3">


                </div>
                    </form>
            <div style='margin-left:65%'>
                      <input type='submit' value='OK'>
                    </div>



    
</div>
        
    </div>
    
</div>








         <script>
      function download(){
        var element=document.getElementById("content")
		html2pdf(content,{
		margin:       1,
        filename:     'challan.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 0, logging: true, dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
		});
		}
    </script>       
	</div>		
</div>