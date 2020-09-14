<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Untitled Document</title>
 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="file:///C|/xampp/Dilshan Sameera/Dream Park web/path/to/font-awesome/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">

</head> 

<body style="background: url(../Images/sky-2588521.jpg)">

<?php
	
require_once('AdminSidebar.php');
	
$Server="localhost";
$user="root";
$password=""; 
$db="dream_park";

$sql="";
$msg="";
$id="";
$name="";
$emaill="";
$pass="";
$passwd2="";
$contactNum="";
$uType="";
	
$con = mysqli_connect($Server,$user,$password,$db);

$location="";
?>

<?php
	
	//find
if(isset($_POST['btnSearch']))
	
	if($_POST['id']==""){
	//$msg="Required User Id";
	echo "<script type='text/javascript'>alert('"."Please Input an ID"." ".mysqli_error($con)."')</script>";

	}
else
{

	$id=$_POST['id'];
	
	$sql="SELECT * FROM users WHERE id=".$_POST['id']."";

		$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_row($result)){
				$id=$row[0];
				$name=$row[1];
				$pass=$row[2];
				$passwd2=$row[3];
				$emaill=$row[4];
				$contactNum=$row[5];
				$uType=$row[6];
	}
	
}
	else{
	 echo "<script type='text/javascript'>alert('"."error"." ".mysqli_error($con)."Record not Found')</script>";
	}
}

	
//Delete

if(isset($_POST['btnDelete']))

	if($_POST['id']==""){
	//$msg="Required User Id";
		echo "<script type='text/javascript'>alert('"."Please Input an ID"." ".mysqli_error($con)."')</script>";
	}

else
{
	
	$id=$_POST['id'];
	
	$sql="DELETE FROM users WHERE id=".$_POST['id']."";

	if(mysqli_query($con,$sql)){
			echo "<script type='text/javascript'>alert('".$id. " User Details  are Successfully Deleted!')</script>";
		}
		
		else{
			echo "<script type='text/javascript'>alert('"."error"." ".mysqli_error($con)."not Deleted')</script>";
		}
}



//Update
if(isset($_POST['btnUpdate']))

	if($_POST['id']==""){
	//$msg="Required User Id";
	echo "<script type='text/javascript'>alert('"."Insert valid User ID"." ".mysqli_error($con)."not Updated')</script>";
	}

else
{
	
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$passwd2=$_POST['passwd2'];
$emaill=$_POST['emaill'];
$contactNum=$_POST['contactNum'];
$uType=$_POST['uType'];


$sql="UPDATE users SET name='".$name."',pass='".$pass."',passwd2=".$passwd2.",emaill='".$emaill."',contactNum='".$contactNum."',uType='".$uType."' WHERE id=".$id."";
		
		if(mysqli_query($con,$sql)){
		echo "<script type='text/javascript'>alert('".$id. " User Details are Successfully Updated!')</script>";
		}
		
		else{
			echo "<script type='text/javascript'>alert('"."not Updated"." ".mysqli_error($con)."')</script>";
		}
	
}
	
	
?> 
	
<!--========================================================================-->
<!--Manage Users-->
<form method="post" style="padding-left: 190px;">
 <div align="center">
  <div class="form-group">
    <label for="exampleInputID" style="font-size: 20px">User ID</label>
    <input type="text" class="form-control" id="ID" name="id" style="width:380px;" placeholder="Enter UserID" value="<?php echo $id; ?>" ><br>
	  <input type="submit" class="btn btn-outline-success" name="btnSearch" id="btn" value="Search" style="width:100px;">
      <input type="submit" class="btn btn-outline-danger" name="btnDelete" id="btn" value="Delete" style="width:100px;" >
  </div>
  
  <div class="form-group">
    <label for="exampleInputName" style="font-size: 20px">Username</label>
    <input type="text" class="form-control" id="email" name="name" style="width:380px;" placeholder="UserName" value="<?php echo $name; ?>">
  </div>
    
  <div class="form-group">
    <label for="exampleInputPassword" style="font-size: 20px">Password</label>
    <input type="text" class="form-control" id="ps" name="pass" style="width:380px;" placeholder="Password" value="<?php echo $pass; ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1" style="font-size: 20px">Confirm Password</label>
    <input type="text" class="form-control" id="ps2" name="passwd2" style="width:380px;" placeholder="Password" value="<?php echo $passwd2; ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail" style="font-size: 20px">Email</label>
    <input type="text" class="form-control" id="email" name="emaill" style="width:380px;" placeholder="Password" value="<?php echo $emaill; ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputContact" style="font-size: 20px">Contact</label>
    <input type="text" class="form-control" id="cn" name="contactNum" style="width:380px;" placeholder="Contact Number" value="<?php echo $contactNum; ?>" >
  </div>
  
  <div class="form-group">
    <label for="exampleInputContact" style="font-size: 20px">User Type</label>
    <input type="text" class="form-control" id="cn" name="uType" style="width:380px;" placeholder="User Type" value="<?php echo $uType; ?>">
  </div>
  
  <input type="submit" class="btn btn-outline-info" name="btnUpdate" id="btn" value="Update" style="width:120px;" >
<!--  <input type="submit" class="btn btn-outline-info" name="btnView" id="btn" value="View All" style="width:120px;">-->
 </div>
</form>

<!--====================-->
<br>
<div class="footer" style="background-color:black; color: aliceblue; padding-left: 250px; "><center>© Copyright 2017 Dream Park | Nugegoda,Sri Lanka, All rights reserved.</center></div>

	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<script src="layout/scripts/jquery.flexslider-min.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>