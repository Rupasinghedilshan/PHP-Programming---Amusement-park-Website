<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Events in Dream Park</title>

    
    <!-- Bootstrap CSS,Font awesome CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 	<link rel="stylesheet" href="LoginPage/path/to/font-awesome/css/font-awesome.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="Bootstrap help/new/startbootstrap-modern-business-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="CSS/ticketsAndPackages.css" rel="stylesheet">
<?php
	  session_start();
	  
	  ?>


  </head>

  <body style="background: url(Images/new/city_20-wallpaper-1366x768.jpg)">
  <h2 style="font-size: 60px; color: aliceblue" align="center" >Packages</h2>
  <!--header-->
	<?php
	  	require_once('Navbar.php');
	  

$Server="localhost";
$user="root";
$password=""; 
$db="dream_park";

$sql="";
$msg="";

$con = mysqli_connect($Server,$user,$password,$db);
	  
	  $sql= "Select * from package";
	  
	  	$result= mysqli_query($con,$sql);
	 ?>
	 
<div class="card-deck" style="margin-top: 10px;">	 
	  <?php 

	  if(mysqli_num_rows($result)>0){
		
		while($row= mysqli_fetch_array($result)){

	  ?>

  <br><br>
  
  <!--warning-->

  <!-- Button trigger modal -->


<!-- Modal -->

  <!--packages-->
  <br><br>

 <div class="card" align="center">
 <form action="Packages.php?action=add&id=<?php echo $row[0]; ?>" method="post" class="form-control">
  <img class="card-img-top" src=" <?php echo $row[3] ?> " alt="Card image cap" style="width: 250px; height: 200px; align-items: center">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row[1]; ?></h5>
    <p class="card-text"><?php echo $row[2]?></p>
    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
    
    <input type="text" name="txtQty" value="1" size="4"/>
          	  <input type="hidden" name="pro_Name" value="<?php echo $row[1];?>" />
          	  <?php echo $row[4];?>
              <input type="hidden" name="pro_Price" value="<?php echo $row[4];?>" />
              <br>

<!--         <input type="submit" value="Add to Cart" name="btnAdd" data data-toggle="modal" data-target="exampleModal">
-->         
         <?php
						if(isset($_SESSION['login'])){
								?><br>

         <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" name="btnAdd">
    Add to cart
</button>
 						<?php
						}else
						{
							?>
						<br>

                        	<button type="button" class="btn btn-danger btn-sm" style="align-items: flex-start"><a href="LoginNew.php">LOG IN</a></button>
                    </li>
							<?php
						}
					
					?>
 
 
 
 
 <!-------------------------------------------------------------- -->
 
 
  
   </div>
 </form>
</div>
<?php
	   }
	   }
	?>
</div>


<!--tickets-->
<br><br>
<h2 style="font-size: 60px" align="center"> Ticket prices</h2>
<!--card-->
<div style="background-color: cyan" align="center" class="card card-primary">
    <div class="card-block">
        <h4 class="card-title">Entrance</h4>
        <p class="card-text">Rs. 500/- per person</p>
    </div>
</div>
 
<div style="background-color: mediumvioletred" align="center" class="card card-primary card-inverse">
    <div class="card-block">
        <h4 class="card-title">Roller Coaster</h4>
        <p class="card-text">Adult - Rs. 1000/-</p>
        <p class="card-text">Children - Rs. 500/-</p>
    </div>
</div>
 
<div style="background-color: palevioletred" align="center" class="card card-success">
    <div class="card-block">
        <h4 class="card-title">Kids Pool</h4>
        <p class="card-text">Rs. 500/- </p>
    </div>
</div>
 
<div style="background-color: salmon" align="center" class="card card-success card-inverse">
    <div class="card-block">
        <h4 class="card-title">Bumper car </h4>
		<p class="card-text">Rs.1000/-</p>
    </div>
</div>
 
<div style="background-color: sandybrown" align="center" class="card card-warning">
    <div class="card-block">
        <h4 class="card-title">Typhoon tunnel</h4>
        <p class="card-text">Adult only : Rs. 1500/-</p>
    </div>
</div>

<div style="background-color: violet" align="center" class="card card-warning card-inverse">
    <div class="card-block">
        <h4 class="card-title">Sky Train</h4>
        <p class="card-text">Kids : Rs. 1000/- </p>
        <p class="card-text">Adult : Rs. 2000/-</p>
    </div>
</div>
 
<div style="background-color: darkcyan" align="center" class="card">
    <div class="card-block">
        <h4 class="card-title">Bowling</h4>
        <p class="card-text">Rs. 1500/- Per hour</p>
    </div>
</div><br>
 <div align="center" style="background-color: darkgrey">
 <h3  align="center">More promotions available</h3>
 <p align="center">Come and Visit</p>
</div>


<!--Shopping Cart-->
<?php
   if(isset($_POST['btnAdd'])){

	    
	 if(isset($_SESSION['cart']))  {
		 $_SESSION['total']=" ";
		 
		 $p_ID=array_map(function ($each){return $each['id'];},$_SESSION['cart']);
	 	if(!in_array($_GET['id'],$p_ID)){
			$count=count($_SESSION['cart']);
			$product_array=array('id'=>$_GET['id'],'name'=>$_POST['pro_Name'],'price'=>$_POST['pro_Price'],'qty'=>$_POST['txtQty']);
			$_SESSION['cart'][$count]=$product_array;
		}
		else{
			
		}
	 }
	 else{
		 $product_array=array('id'=>$_GET['id'],'name'=>$_POST['pro_Name'],'price'=>$_POST['pro_Price'],'qty'=>$_POST['txtQty']);
		 $_SESSION['cart'][0]=$product_array;
	 }
	   
   }
   
   if(isset($_GET['action'])){
	if($_GET['action']=="delete"){
		 foreach($_SESSION['cart'] as $key=>$values){
		   if($values['id']==$_GET['id']){
			   unset($_SESSION['cart'][$key]);
		   }
	   }
    }   
   }
?>

<br />

<!--..........footer........-->
<?php
	require_once('footer.php');
	?>





<!-- Optional JavaScript -->
    
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="LoginPage/layout/scripts/jquery.min.js"></script>
	<script src="LoginPage/layout/scripts/jquery.backtotop.js"></script>
	<script src="LoginPage/layout/scripts/jquery.mobilemenu.js"></script>
	<script src="LoginPage/layout/scripts/jquery.flexslider-min.js"></script>

	<script src="LoginPage/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>