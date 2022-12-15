<?php 

session_start();
$_SESSION["fnm"]=$_POST["fnm"];
$_SESSION["lnm"]=$_POST["lnm"];
$_SESSION["phone"]=$_POST["phone"];
$_SESSION["add"]=$_POST["add"];
$_SESSION["city"]=$_POST["city"];
$_SESSION["state"]=$_POST["state"];
$_SESSION["zip"]=$_POST["zip"];





?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<div style='margin-left:40%';>
<form method="POST" action="shippingdetails.php">
    <br><br><br><br><br><br>
    <?php
     
    ?>
    <h1>Shipping Details</h1>
    <br>
    <input type='text' value="<?php echo $_SESSION["fnm"]; ?>" name="fnm"  style='border:none;focus:none'/><br><br><br>
    <input type='text' value="<?php echo $_SESSION["lnm"]; ?>" name="lnm"  style='border:none;focus:none'/><br><br><br>
    <input type='text' value="<?php echo $_SESSION["phone"]; ?>" name="phone"  style='border:none;focus:none'/><br><br><br>
    <input type='text' value="<?php echo $_SESSION["add"]; ?>" name="add"  style='border:none;focus:none'/><br><br><br>
    <input type='text' value="<?php echo $_SESSION["city"]; ?>" name="city"  style='border:none;focus:none'/><br><br><br>
    <input type='text' value="<?php echo $_SESSION["state"]; ?>" name="state"  style='border:none;focus:none'/><br><br><br>
    <input type='text' value="<?php echo $_SESSION["zip"]; ?>" name="zip"  style='border:none;focus:none'/><br><br><br>

    <input type="textbox" name="amt" value="<?php echo $_SESSION["total"] ;?>" id="amt" hidden placeholder="Enter amt"/ ><br/><br/>
    <input type="button" name="btn" id="btn" value="Confirm" onclick="pay_now()" style=""/>
</form>
</div>

<script>
    function pay_now(){

        var amt=jQuery('#amt').val();
        <?php
           
        ?>
         jQuery.ajax({
               type:'post',
               url:'paymentprocess.php',
               data:"amt="+amt,
               success:function(result){
                   var options = {
                        "key": "rzp_test_UY1y7bu0apmIK4", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "GROFRESH",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                            console.log(response);
                           jQuery.ajax({
                               type:'post',
                               url:'paymentprocess.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="bill.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>