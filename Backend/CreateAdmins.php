<!DOCTYPE html>
<html lang="en">
<head>
 
  <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Login Form </title>
 
 <link href="../CSS/signUp.css" rel="stylesheet">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="file:///C|/xampp/Dilshan Sameera/Dream Park web/path/to/font-awesome/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    
</head>

<body background="../Images/new/city_22-wallpaper-1366x768.jpg">

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


<?php

if(isset($_POST['btnSubmit'])){
	
	$name = $_REQUEST['un'];
	$email = $_REQUEST['email'];
	$p1 = $_REQUEST['p1'];
	$p2 = $_REQUEST['p2'];
	$cn = $_REQUEST['cn'];


$sql="INSERT INTO users(UserName,pass,pass2,email,contact,UserType) Values ('".$name."','".$p1."','".$p2."','".$email."','".$cn."','Administrator')";


if(mysqli_query($con,$sql)){
	//echo('Inserted');
		echo "<script type='text/javascript'>alert('".""." ".mysqli_error($con)."User Created!!!')</script>";

	
}
else{
  //echo mysql_error();
	echo "<script type='text/javascript'>alert('"."error"." ".mysqli_error($con)."fields cannot be empty!')</script>";

}
}
?>


<br>
<!--Add-->
 <div align="center" class="aa" style="padding-left: 190px">
 	<h2 style="color:black;font-size:55px; ">Create New Admin Users</h2>
 	<br>
  <form method="post" >
   <input type="text" placeholder="Input Username" id="firstnametx" name="un">
   <h6 style="color: darkred" id="fisrtsnamewrn"></h6><br>
    
   <input type="email" placeholder= "Email Address" id="adresstxt" name="email" ><br>
   <h6 style="color: darkred" id="adresswrn"></h6><br>
   
   <input type="text" placeholder="Input Password" id="passonetxt" name="p1"><br>
   <h6 style="color: darkred" id="passone"></h6><br>
   
   <input type="text" placeholder="Confirm Password" id="passtwotxt" name="p2"><br>
   <h6 style="color: darkred" id="passtwo"></h6><br> 
   
   <input type="text" placeholder="Contact Number" id="numbertxt" name="cn"><br>
   <h6 style="color: darkred" id="numberr"></h6><br>


   <input type="submit" class="btn btn-outline-danger" name="btnSubmit" id="btn" value="Create" style="align-content: center; width: 300px">
  <!-- <input type="submit" value="Create " onClick="firstname(); mail(); passone(); passtwo(); numberr();" class="Loginbtn" name="btnSubmit" >-->
   <br><br>

<!-- ================================================  -->
   			<script>
		function firstname(){
			var fname=document.getElementById("firstnametx").value;
			
						
			if(fname=="" ){
				document.getElementById("fisrtsnamewrn").innerHTML="Input Fisrt Name!";
			}
			 		  			
			else{ 
				
				document.getElementById("fisrtsnamewrn").style.display = "none";
				
			
		  }		
			
		}
			
			function mail(){
		
			var Email=document.getElementById("adresstxt").value;
						
			if(Email==""){
				document.getElementById("adresswrn").innerHTML="Input Email Address!";
			}
						
			else{
		
				document.getElementById("adresswrn").style.display = "none";
		
		  }
			
			
		}
		
				
			function passone(){
		
			var passonet=document.getElementById("passonetxt").value;
						
			if(passonet==""){
				document.getElementById("passone").innerHTML="Input password";
			
			}
						
			else{
		
				document.getElementById("passone").style.display = "none";
				
		  }
			
		}		
				
			function passtwo(){
		
			var passtwot=document.getElementById("numbertxt").value;
						
			if(passtwot==""){
				document.getElementById("passtwo").innerHTML="Confirm your password";
			}
						
			else{
				document.getElementById("passtwo").style.display = "none";
		  }

		}
			function numberr(){
		
			var contactNum=document.getElementById("passtwotxt").value;
						
			if(contactNum==""){
				document.getElementById("numberr").innerHTML="Enter your contact";
			}	
			else{
			
				document.getElementById("numberr").style.display = "none";
		  }
		}

		</script>
   
   
  </form><!-- close form -->
 </div>
 
 <br>
 <br>

<div class="footer" style="background-color:black; color: aliceblue; padding-left: 250px; "><center>© Copyright 2017 Dream Park | Nugegoda,Sri Lanka, All rights reserved.</center></div> 
 
  	
</body>

</html>



