<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--custom css-->
    <link href="CSS/style1.css" rel="stylesheet">
    
    <?PHP
		if(session_id()==''){
			session_start();
		}
	?>
</head>

<body>
    
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="Main.php"><img id="brand-image" src="Images/Dream park logo2.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="background-color: #050202" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
					<li class="nav-item">
                        <a class="nav-link" href="Main.php">HOME</a>                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="things to do.php">THINGS TO DO</a>                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Packages.php">PACKAGES</a>                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="location.php">CONTACT</a>                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about dream park.php">ABOUT US</a>                    
                    </li>
                    <?php
						if(isset($_SESSION['login'])){
								?>
					<li class="nav-item">
                        <a class="nav-link" href="Payment_ShoppingCart.php">SHOPPING CART</a>                    
                    </li>
                    
                    <li class="nav-item" >
                        <a class="nav-link" href="logout.php">LOG OUT</a>                    
                    </li>
							<?php
							
						}else
						{
							?>
							<li class="nav-item">
                        	<a class="nav-link" href="LoginNew.php">LOG IN</a>                    
                    </li>
							<?php
						}
					
					?>
                    
                </ul>            
            </div>
        </div>
    </nav>
    

</body>
</html>