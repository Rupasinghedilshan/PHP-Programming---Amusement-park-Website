<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>



<body>

	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="file:///C|/xampp/Dilshan Sameera/Dream Park web/path/to/font-awesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    

<?php
	  session_start();
	   ?>


</head>

<body style="background-color: dimgrey">

<form method="post">

<?php
	require_once('AdminSidebar.php');
	
$Server="localhost";
$user="root";
$password=""; 
$db="dream_park";

$sql="";
$msg="";

$con = mysqli_connect($Server,$user,$password,$db);

$location="";
?>

<!--Design===============================-->
<h2><center><p style="font-size:60px; margin-left: 150px;">&nbsp;&nbsp;&nbsp;Order Details</p></center></h2>


<div align="center">
	<center><input class="btn btn-danger" align="middle" style=" width:200px; margin-left: 200px; "  type="submit" name="btnViewAll" value="View Orders" /></center>
</div>
<br>


<?php 
//View All
 if(isset($_POST['btnViewAll'])){ ?>
 
 
 <!--Design===============================-->

<div class="table-responsive">
<table class="table table-bordered" id="table" cellspacing="0" border="3" align="center" style="margin-left:250px; border-color: midnightblue">
  
    <tr>
     <th bordercolor="#6E090B" style="font-size:16px" bgcolor="#F4494C" width="5px" id="th">&nbsp;Order ID</th>
    <th width="30px" id="th" bordercolor="#6B1315" bgcolor="#F4494C">&nbsp;Total amount</th>
    <th width="30px" id="th" bgcolor="#F4494C">&nbsp;User </th>
    <th width="30px" id="th" bgcolor="#F4494C">&nbsp;&nbsp;&nbsp;Package</th>
    
 </tr>
 <!--</table>
 </div>
 
 <div class="table-responsive">
 <table id="table" class="table table-bordered" align="center" style="margin-left:50px;">    -->
  <?php   
	
	$sql="SELECT * FROM order_table ";
	
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_row($result)){
    if(mysqli_num_rows($result)>0){ 
	?>
    
    <tr>
<td id="td"><?php echo $row[0];?></td>      
<td id="td"><?php echo $row[1];?></td>
<td id="td"><?php echo $row[2];?></td> 
<td id="td"><?php echo $row[3];?></td>  

 
 </tr>
      <?php
		}
	}
	
?>
 

</table>
    </div>

    <?php
			}
	
?> 

<?php
echo $msg;
?>


 <div class="footer" style="background-color:black; color: aliceblue; padding-left: 250px; margin-top: 390px; "><center>© Copyright 2017 Dream Park | Nugegoda,Sri Lanka, All rights reserved.</center></div> 

</body>
</html>