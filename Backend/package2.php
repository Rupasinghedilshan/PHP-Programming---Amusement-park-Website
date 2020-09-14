<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 	<link rel="stylesheet" href="../LoginPage/path/to/font-awesome/css/font-awesome.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title></title>


  </head>
<br>
<br>
<br><br>

 <body class="bg-light" background="../Images/[CooL GuY] {{a2zRG}} (46).JPG">
      <?php
			require_once('AdminSidebar.php');
	 

$Server="localhost";
$user="root";
$password=""; 
$db="dream_park";

$sql="";
$msg="";
$Pid="";

$con = mysqli_connect($Server,$user,$password,$db);

$msg="";
	 
//Add===============================
if(isset($_REQUEST['btnsubmit'])){

$Pname = $_REQUEST['PName'];
$Ptype = $_REQUEST['Ptype'];
$price = $_REQUEST['PPrice'];
$Pdis= $_REQUEST['Pdis'];

	
$TEMP=$_FILES['Ppic']['tmp_name'];
try{

$img_base64= base64_encode(file_get_contents($TEMP));
$image='data:image/;base64,'.$img_base64;

}catch(Exception $ex){}
	
$sql="INSERT INTO package (packageName,Discription,picture,price,Packagetype) Values ('".$Pname."' ,'".$Pdis."','". $image ."','".$price."','".$Ptype."')";

if(mysqli_query($con,$sql)){
	
	echo"<script>alert('Succesfully Added')</script>";
	
}
else{
  echo mysqli_error($con);
	}
}		
	 
	 
//delete package=================================================================================';';'';';;';';';';

if(isset($_POST['btndel']))

	if($_POST['Pid']==""){
	//$msg="Required User Id";
		echo "<script type='text/javascript'>alert('"."Please Input an package ID"." ".mysqli_error($con)."')</script>";
	}
	 
else
{
	
	$Pid=$_POST['Pid'];
	
	$sql="DELETE FROM package WHERE Pid=".$_POST['Pid']."";

	if(mysqli_query($con,$sql)){
			echo "<script type='text/javascript'>alert('".$Pid. " Successfully Deleted!')</script>";
		}
		
		else{
			echo "<script type='text/javascript'>alert('"."error"." ".mysqli_error($con)."not Deleted')</script>";
		}
}
 //===============================================================================================================
?>

      
       <div align="center" style=" margin-left: 250px;">
        <div class="col-md-8 order-md-1" >
         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
          
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="Pid" id="pID" placeholder="Package ID" >
              </div>
              
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="PName" id="pName" placeholder="Package Name"  >
              </div>
            </div>
            
            <br><br>


            <div class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control" name="Pdis" id="dis" placeholder="Discription" >
              </div>
            </div>
            
            <br><br>

			<label>Select Your File</label>

		<input type="file" name="Ppic"/> <br /><br />

		
			<div class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control" name="Ptype" id="dtype" placeholder="Type" >
              </div>
            </div>
            
            <br><br>
           
            <div class="mb-3">
              <input type="text" class="form-control" name="PPrice" id="price" placeholder="Price" >
            </div>
            
		<!--<input type="submit" class="btn btn-bordered" name="btnsubmit" id="btn" value="Add" >-->              
         <button type="submit" class="btn btn-outline-danger" name="btnsubmit" id="btn" value="Add">Add package</button>
         <button type="submit" class="btn btn-outline-danger" name="btndel" id="btn" value="Delete">Delete package</button>
                  <button type="submit" class="btn btn-outline-danger" name="btndel" id="btn" value="Delete">Update package</button>

          </form>
	 </div>
	 </div>
    
    <br>
 <div class="footer" style="background-color: gray; padding-left: 250px; "><center>© Copyright 2017 Dream Park | Nugegoda,Sri Lanka, All rights reserved.</center></div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="file:///C|/xampp/assets/js/vendor/popper.min.js"></script>
    <script src="file:///C|/xampp/dist/js/bootstrap.min.js"></script>
    <script src="file:///C|/xampp/assets/js/vendor/holder.min.js"></script>

  </body>
</html>
