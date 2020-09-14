
<?php
    session_start();
    $con  = mysqli_connect("localhost","root","","dream_park");



    if (!$con){
        die(" \Connection Failed : " . mysqli_connect_errno());
    }
?>

<!--==========-->

<!DOCTYPE html>
<html lang="en">
<head>
 
  <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <title>Login Form </title>
 
 <link href="CSS/login.css" rel="stylesheet">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="../path/to/font-awesome/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
   
<?php
		if(isset($_SESSION['login'])){
			header('Location: Main.php');
			
			
		
	}
	
?>

  
</head>

<body>

<?php
	require_once('Navbar.php');
	
    $UserName = $Pass = $error = "";
    $errorflag = false;
    
	
    if (isset($_POST["submitlog"])){
		
		$name = $_POST['UserName'];
        
		$_SESSION['UserName']= $name;
			
			
			
			
		
		$errorUserName = "Username Required...!";
    	$errorPass = "Password Required...!";
		
		
		if (empty($_POST["UserName"])){
           
            $errorflag = false;
        }elseif (!filter_var($_POST["UserName"])){
            $errorUserName = "Invalid UserName...!";
            
            $errorflag = false;
        }else{
            $UserName = validation_input($_POST["UserName"]);
            $errorflag = true;
        }

        if (empty($_POST["Pass"])){
            
            $errorflag = false;
        }else{
            $len = strlen($_POST["Pass"]);
            if ($len > 15 || $len < 3){
                $errorPass = "Password Must Between 3 to 15 Characters";
                
                $errorflag= false;
            }else{
                $Pass = validation_input($_POST["Pass"]);
                $errorflag = true;
            }
        }


        if ($errorflag = true){

            $query = "SELECT * FROM users WHERE UserName = '$_POST[UserName]' AND Pass = '$_POST[Pass]'";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_array($result);
            if ($row > 0){
                if(isset($_POST["login"]))
				{
					$USER= $_POST["UserName"];
					echo("welcome ".$USER);
				}
				$_SESSION['login']=true;
				
				//=====
			}

				if($row[6]=="Administrator"){
					header('Location:Backend/CreateAdmins.php');
					$Adminname = $row[1];
				
					}
					
					
				
				}
				else{
					header('Location:Main.php');
				}
				
            }else {
                $error = "Username or Password Not Match...!";
            }

        

    

    function validation_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>

<br><br>
<section>
 <form action="LoginNew.php" method="post">
 <div class="lg" style="height: 550px;">
 	<br><br>
 	<h2 style="color:black;font-size:55px; ">Login</h2>
 	<br><br>
  <form>
    <input type="text" name="UserName" placeholder="Username" id="firstnametx">
    <label><?php if(isset($errorUserName)){echo $errorUserName;}?></label>
     <h6 style="color: darkred" id="fisrtsnamewrn"></h6><br>
     
   <input type="password" name="Pass" placeholder="Password" id="lastnametx">
    <label><?php if(isset($errorPass)){echo $errorPass;}?></label>
     <h6 style="color: darkred" id="secondnamewrn"></h6><br>&nbsp;&nbsp;&nbsp;
     
   <a class="btn btn-sm text-danger"href="#">Forgot Password?
    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a class="btn btn-sm text-dark"  href="sign up.php">Create a new account</a>
   <br><br>
   
    <input type="submit" id="sub" name="submitlog" value="Sign In"><br>
    
    
    
   
   
   <!--<script>
	   
		function firstname(){
			var fname=document.getElementById("firstnametx").value;
			
						
			if(fname=="" ){
				document.getElementById("fisrtsnamewrn").innerHTML="Input Fisrt Name!";
				
			}
			 		  			
			else{ 
				
				document.getElementById("fisrtsnamewrn").style.display = "none";
				
			
		  }		
			
		}
		function pass(){
		
			var pass=document.getElementById("lastnametx").value;
						
			if(pass==""){
				document.getElementById("secondnamewrn").innerHTML="Input Second Name!";
				
			}
						
			else{
		
				document.getElementById("secondnamewrn").style.display = "none";
				
		  }
			
			
		}
				
		</script>-->
		
  </form><!-- close form -->
 </div>
 </form>
 </section>
 
 <br>
 <div class="footer"><center>© Copyright 2017 Dream Park | Nugegoda,Sri Lanka, All rights reserved.</center></div>
 
 
  	
</body>

</html>

