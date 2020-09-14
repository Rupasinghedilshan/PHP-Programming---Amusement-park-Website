<!DOCTYPE html>
<html lang="en">
<head>
 
  <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Login Form </title>
 
 <link href="CSS/signUp.css" rel="stylesheet">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="file:///C|/xampp/Dilshan Sameera/Dream Park web/path/to/font-awesome/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    
</head>

<body background="Images/new/small_world-wallpaper-1366x768.jpg">

<?php
$Server="localhost";
$user="root";
$password=""; 
$db="dream_park";

$sql="";
$msg="";

$con = mysqli_connect($Server,$user,$password,$db);

$location="Images/";
?>
<body>

<?php

require_once('Navbar.php');

	
if(isset($_POST['btnSubmit'])){
	$name = $_REQUEST['un'];
	$email = $_REQUEST['email'];
	$p1 = $_REQUEST['p1'];
	$p2 = $_REQUEST['p2'];
	$cn = $_REQUEST['cn'];


$sql="INSERT INTO users(UserName,pass,pass2,email,contact,UserType) Values ('".$name."','".$p1."','".$p2."','".$email."','".$cn."','Member')";


	
if(mysqli_query($con,$sql)){
	//echo('Inserted');
	echo "<script type='text/javascript'>alert('".$name."  ,Your account Successfully created! Please login!')</script>";
	
	//header('Location: Main.php' );
}
else{
  echo "<script type='text/javascript'>alert('"."error"." ".mysqli_error($con)."Something wrong!')</script>";
}
}
?>


<br><br><br>
 <div align="center" class="aa">
 	<h2 style="color:black;font-size:55px; ">Sign Up</h2>
 	<br>
  <form method="post" >
   <input type="text" placeholder="Input Username" id="firstnametx" name="un">
   <h6 style="color: darkred" id="fisrtsnamewrn"></h6><br>
    
   <input type="email" placeholder= "Email Address" id="adresstxt" name="email" ><br>
   <h6 style="color: darkred" id="adresswrn"></h6><br>
   
   <input type="password" placeholder="Input Password" id="passonetxt" name="p1"><br>
   <h6 style="color: darkred" id="passone"></h6><br>
   
   <input type="password" placeholder="Confirm Password" id="passtwotxt" name="p2"><br>
   <h6 style="color: darkred" id="passtwo"></h6><br> 
   
   <input type="text" placeholder="Contact Number" id="numbertxt" name="cn"><br>
   <h6 style="color: darkred" id="numberr"></h6><br>
 
	  <a style="background-color:crimson" class="btn btn-sm text-dark"  href="LoginNew.php">Already have an account</a>
   <br><br>
   <input style="align-content: center; width: 300px; "type="submit" class="btn btn-dark" name="btnSubmit" id="btn" value="Create an Account" onClick="firstname(); mail(); passone(); passtwo(); numberr();">
  <!-- <input type="submit" value="Create " onClick="firstname(); mail(); passone(); passtwo(); numberr();" class="Loginbtn" name="btnSubmit" >-->
   
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
 <div class="footer"><center>© Copyright 2017 Dream Park | Nugegoda,Sri Lanka, All rights reserved.</center></div>
 
 
  	
</body>

</html>

