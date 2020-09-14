<!doctype html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Dream Park Main Page</title>

    <!-- Bootstrap CSS,Font awesome CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--custom css-->
<!--    <link href="CSS/style1.css" rel="stylesheet">-->

</head>

<body>

<div class="fixed-top">
<?php
	require_once('Navbar.php');
	
	
?>
</div>
<!--bootstrapping carosoul-->
 
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!--carousel slides-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="responsiveImage" src="Images/Dream park entrance.jpg" height="330px" width="100%" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block  text-md-center">
				<h1 style="font-size: 55px;font-family:'Playfair Display',;">Welcome to the <strong style="color: crimson">DREAM Park</strong></h1>
					<p>	"Dream park is the largest amusement park in Sri Lanka"</p>
              		<p><a class="btn btn-lg btn-outline-info" href="sign up.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="responsiveImage" src="Images/Things to do/sunglasses-1284419_1920.jpg" height="330px" width="100%" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
				<h2 style="font-size:50px ">Enjoy more with your Familly.</h2>
					<p>"Kids have special offers for all events"</p>
             	 <p><a class="btn btn-lg btn-danger" href="things to do.php" role="button">Events</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="responsiveImage" src="Images/Things to do/animation-720878_1920.jpg" height="330px" width="100%"  alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
				<h2 style="font-size: 50px;color:ghostwhite">Come and Enjoy with Your <a style="color:firebrick">Dream</a></h2>
              <p><a class="btn btn-small btn-danger" href="gallery.php" role="button">Browse gallery</a></p>
            </div>
          </div>
	 </div>
  	 </div>
 </div>
<!--end carousel-->

 <!--........................-->
 
 <section class="bg-danger" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">&nbsp;</h2>
            <h2 class="section-heading text-white" style="font-size: 34px; color: floralwhite">Come and Enjoy with Us!</h2>
            <br>
            <p class="text-faded" align="center" style="font-size:17px">Dream Park is a newly established theme park in Sri Lanka. This is a largest and the Most beautiful  park in Sri Lanka with have many colorful attractions. Over 200 hectares of this state of fun is mainly designed for kids but everyone have many events to do. And DREAM Park is quickly becoming one of the most desirable place for local and foreign guests every year.</p>
            <a class="btn btn-default text-warning" href="about dream park.php" style="font-size:15px;">More about us!</a>
          </div>
        </div>
      </div>
 </section>
 
 
 <!--parallax-->
 <div class="container">
 	<div class="parallax1"></div>
 </div>

<!--image-->
  <h4 class="responsiveImage" style="margin: 0px;padding: 0px;"><img src="Images/park.jpg" height="100%" width="100%"></h4>


<!--parallax-->
 <div class="container">
 	<div class="parallax2"></div>
 </div> 


<!--map-->
<div class="section">
 	<center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7922.279544753896!2d79.879366!3d6.8738513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a4f6053caa7%3A0xd23eb8e15897ae47!2sICBT+Nugegoda+Campus!5e0!3m2!1sen!2s!4v1506922059151" width="550" height="250" frameborder="0"></iframe></center>
	<h5 align="center">Location</h5>
	<p align="center"> Located in Nugegoda, Colombo 5, Sri Lanka</p>
	<a class="btn btn-default btn-block" href="location.php">Find Out More</a>
 </div>

                
<!--..........footer........-->
<?php
	require_once('footer.php');
	?>


   
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<script src="layout/scripts/jquery.flexslider-min.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
