<!doctype html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title></title>

    <!-- Bootstrap CSS,Font awesome CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 	<link rel="stylesheet" href="LoginPage/path/to/font-awesome/css/font-awesome.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    		<!--custom css-->
    <link href="CSS/style1.css" rel="stylesheet">

</head>

<body>

<?php
	
require_once('Navbar.php');
	
$Server="localhost";
$user="root";
$password=""; 
$db="dream_park";

$sql="";
$msg="";

$con = mysqli_connect($Server,$user,$password,$db);
	
?>

<br>
<br>

<h2 align="center" style="font-size: 50px">Order Details</h2>
<div class="table-responsive">

<table class="table table-bordered" bordercolor="#E70307">
   <tr>
   <th width="40%" style="font-size: 25px" bgcolor="#55414E#CB8549">Item Name</th>
   <th width="10%" style="font-size: 25px" bgcolor="#55414E#CB8549">Price</th>
   <th width="20%" style="font-size: 25px" bgcolor="#55414E#CB8549">Quantity</th>
   <th width="15%" style="font-size: 25px" bgcolor="#55414E#CB8549">Total</th>
   <th width="5%" style="font-size: 25px" bgcolor="#55414E#CB8549">Action</th>
   </tr>
   

   
   <?php
			if(!empty($_SESSION['cart'])){
				$total=0;
			  foreach($_SESSION['cart'] as $key=>$values){
	?>
		
 		<!--===============================-->
  		<tr>
	        <td><?php echo $values['name']; ?></td>
   	    	<td><?php echo $values['price']; ?></td>
   			<td><?php echo $values['qty']; ?></td>
   			<td><?php echo ($values['qty']*$values['price']); ?></td>
   			<td><a href="Packages.php?action=delete&id=<?php echo $values['id']; ?>"><span>Remove</span></a></td>
			
		</tr>
			   <?php 
				   $total+=$values['qty']*$values['price'];
    			   $_SESSION['total']=$total;
				 }		
			}
			else{
				$_SESSION['total']=0;
			}
	  if(isset($_SESSION['total'])){
		  
		  
		//PAYMENT============================
if(isset($_REQUEST['btnPAY'])){
		
	
	
	$Total= $_REQUEST['total'];
	$cardNum = $_REQUEST['cno'];
	$holdName = $_REQUEST['hname'];
	$cvvNum = $_REQUEST['cvv'];
	$exDate = $_REQUEST['exDate'];
	$Iname =$values['name']; 

$con = mysqli_connect($Server,$user,$password,$db);

$sql="INSERT INTO payments(Total,cardNumber,holderName,cvv,exDate,OrderId) Values ('".$Total."','.$cardNum.','".$holdName."','".$cvvNum."','".$exDate."','".$Iname."')";

?>
<div style="color: dimgray"><center><font color="#A71315" size="+2" style="align-content: center">	
	<?php
	if(mysqli_query($con,$sql)){
	echo('Payment Sucessfully Completed!');
}
	
}
  
	?>
   </font></center></div>
    <tr height="40">
	        <td colspan="4" align="right"><b>TOTAL</b></td>
            <td align="right"><b><?php echo $_SESSION['total'];?></b></td>
     </tr>
     <?php } ?>
</table>
</div>

<center><a href="Cancel.php"><Input type="button" value="Cancel Order" class="btn btn-outline-success"></a>&nbsp;&nbsp; &nbsp;</center>
<br>
<br>
<br>

<!--<button class="btn btn-danger"><a href="Checkout.php">Check Out</a></button>
-->

<!--==============CheckOut==============================-->
<div style="color: darkgray">

<strong><center><p style="border:thin #F00 thin; color:black;">Total : Rs.<?php echo $_SESSION['total'];?></p></center></strong>
<strong><center><p style="border:thin #F00 thin; color:black;">User : <?php echo($_SESSION['UserName']); ?></p></center></strong>
<strong><center><P style="border:thin #F00 thin; color:black;">Package ID : <?php echo $values['name']; ?></P></center></strong>

<br />

<form method="post">

	<center><input align="middle" type="submit" class="btn btn-danger" value="Confirm your Order" name="btnConfirm" /></center>


</form>
</div>
<br>
<br>


<?php

if(isset($_POST['btnConfirm'])){
	
	
	
	$tot = $_SESSION['total'];
	$UserName = $_SESSION['UserName'];
	$p_ID = $values['name'];
	$OrderId=0;


if(!empty($_SESSION['cart'])){
	
	$sql = "INSERT INTO order_table VALUES(".$OrderId.",".$tot.",'".$UserName."','.$p_ID.')";			
		if(mysqli_query($con,$sql)){
	      foreach($_SESSION['cart'] as $key=>$values){
		 
		    /*$P_ID= $values['id']; 
   	    	$subTot= ($values['qty']*$values['price']); 
			
			$sql = "INSERT INTO order_details (Order_Id,P_ID,Sub_Total) VALUES(".$OrderId.",".$P_ID.",".$subTot.")";
			mysqli_query($con,$sql);*/
		  }
   		 //echo "Confirmed!!!!<br>";
		
		 echo "<script type='text/javascript'>alert('Order Confirmed!')</script>";

	    }
		else{
  			echo "Error " . mysqli_error($con);
		}
}

}
?>


<!-- payament PHP================================== -->


<!--Payment design-->
<center><form style=" padding-top: 55px; background-color:darkslategrey; align-content:center">
	<center><h3 style="font-size : 34px; color: green; font-size: 50px; font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'">Dream Park Payment</h3></center>
	<br>
	<div style="padding-bottom: 18px;">Total<span style="color: red;"> *</span><br/>
		<input type="text" name="total" style="width : 450px;" class="form-control" value="<?php echo $_SESSION['total'];?>" readonly>
	</div>
	<div style="padding-bottom: 18px;">Card Number<span style="color: red;"> *</span><br/>
		<input type="text" name="cno" style="width : 450px;" class="form-control" />
	</div>
	<div style="padding-bottom: 18px;">Card Holder's Name<span style="color: red;"> *</span><br/>
		<input type="text" name="hname" style="width : 450px;" class="form-control"/>
	</div>
	<div style="padding-bottom: 18px;">CVV Number<span style="color: red;"> *</span><br/>
		<input type="text" name="cvv" style="width : 150px;" class="form-control"/>
	</div>
	<div style="padding-bottom: 18px;">Expire Date<span style="color: red;"> *</span><br/>
		<input type="text" name="exDate" style="width : 150px;" class="form-control"/>
	</div>
	<div style="padding-bottom: 18px;">
	<input class="btn btn-danger" name="btnPAY" value="Pay" type="submit"/>
	</div>
	
</form></center>




<?php
	require_once('footer.php');
?>

	<script src="LoginPage/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>