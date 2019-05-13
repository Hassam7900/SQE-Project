<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-main">
<header class="header">
    <div class="header-left">
	   <h2>Advance Mobile Store</h2>
    </div>
    <div class="header-right">
    	<i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <a href="product_detail.html" style="color: black;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
    </div>
</header>
<nav class="navbar navbar-expand-md bg-dark navbar-dark section-menu">
<div class="collapse navbar-collapse" id="navb">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" active href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="allproduct.php" >All_Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About_us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php" >Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php" >Login</a>
    </li>
  </ul>
  <form class="form-inline" action="Home.php" method="POST">
    <input class="form-control mr-sm-2" type="text" name="svalue" placeholder="Search">
    <button class="btn" name="search" type="submit" style="background-color: #fe9c00; color: white;">Search</button>
  </form>
</div>
</nav>
<!--	<ul class="navbar navbar-expend-lg bg-dark">
		<li><a href="Home.html">Home</a></li>
		<li><a href="#"> About_us</a></li>
		<li><a href="register.html">Register</a></li>
		<li><a href="login.html">Login</a></li>
	</ul>-->
<section class="section row">
<aside class="aside col-md-2">
	<div class="asside-content">
	<div class="aside-header"><strong style="margin-left: 20px;"> Catagory</strong></div>
	<ul style="list-style: none;">
		<li><a href="#">Mobile Phone</a></li>
		<li><a href="#">Tablet</a></li>
		<li><a href="#">Mobile Accessories</a></li>
		<li><a href="#">Tablet Accessories</a></li>
	</ul>
    </div>
	<div class="asside-content">
	<div class="aside-header"><strong style="margin-left: 20px;"> Shop By Price</strong></div>
	<ul style="list-style: none;">
		<li><a href="#">5000 t0 10000</a></li>
		<li><a href="#">11000 to 19000</a></li>
		<li><a href="#">20000 to 30000</a></li>
	</ul>
    </div>
	<div class="asside-content">
	<div class="aside-header"><strong style="margin-left: 20px;"> Brand</strong></div>
	<ul style="list-style: none;">
		<li><a href="#ssm">Samsung</a></li>
		<li><a href="#qm">QMobile</a></li>
		<li><a href="#apm">Apple</a></li>
		<li><a href="#">OPPO</a></li>
		<li><a href="#">Nokia</a></li>
		<li><a href="#">lenovo</a></li>
		<li><a href="#">HTC</a></li>
		<li><a href="#">Infinix</a></li>
	</ul>
    </div>
</aside>
<div class="contentreg homecontent col-md-10">
 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cellphoneslider.jpg" alt="Los Angeles" width="100%" height="545">
    </div>
    <div class="carousel-item">
      <img src="images/cellphoneslider.jpg" alt="Chicago" width="100%" height="545">
    </div>
    <div class="carousel-item">
      <img src="images/cellphoneslider.jpg" alt="New York" width="100%" height="545">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="tz-gallery">
  <div id="ssm"><h2 style="color: #fe9c00;">Samsung Mobiles:</h2></div>
  <div class="row mb-3">
    
   <!--   <div class="card">-->
<?php
    //DB details
    include("connection.php");
    //Get image data from database
    $result = $con->query("SELECT pname,image FROM addproduct WHERE ptype='samsung' ");
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          echo '<div class="col-md-4">';
          echo '<a href="product_detail.html">';
          echo '<div class="card" style="height:400px;">';
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="height:400px;"/>';
          echo '</div>';
          echo "<div>";
          echo '<h3 style="text-align:center;">';
          echo $row["pname"];
          echo '</h3 >';
          echo "</div>";
          echo '</a>';
          echo "</div>";
    }
        //Render image
       
    }else{
        echo 'Image not found...';
    }
   $con->close();


?>
</div>
</div>
<div class="tz-gallery">
  <div id="qm"><h2 style="color: #fe9c00;">Q_Mobiles:</h2></div>
  <div class="row mb-3">
    
   <!--   <div class="card">-->
<?php
    //DB details
    include("connection.php");
    //Get image data from database
    $result = $con->query("SELECT pname,image FROM addproduct WHERE ptype='qmobile' ");
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          echo '<div class="col-md-4">';
          echo '<a href="product_detail.html">';
          echo '<div class="card" style="height:400px;">';
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="height:400px;"/>';
          echo '</div>';
          echo "<div>";
          echo '<h3 style="text-align:center;">';
          echo $row["pname"];
          echo '</h3>';
          echo "</div>";
          echo '</a>';
          echo "</div>";
    }
        //Render image
       
    }else{
        echo 'Image not found...';
    }
   $con->close();


?>
<!--</div>-->
</div>
</div>
<div class="tz-gallery">
  <div id="apm"><h2 style="color: #fe9c00;">Apple:</h2></div>
  <div class="row mb-3">
    
   <!--   <div class="card">-->
<?php
    //DB details
    include("connection.php");
    //Get image data from database
    $result = $con->query("SELECT pname,image FROM addproduct WHERE ptype='Apple' ");
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          echo '<div class="col-md-4">';
          echo '<a href="product_detail.html">';
          echo '<div class="card" style="height:400px;">';
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="height:400px;"/>';
          echo '</div>';
          echo "<div>";
          echo '<h3 style="text-align:center;">';
          echo $row["pname"];
          echo '</h3>';
          echo "</div>";
          echo '</a>';
          echo "</div>";
    }
        //Render image
       
    }else{
        echo 'Image not found...';
    }
   $con->close();


?>
<!--</div>-->
</div>
</div>
</div>
</section>

<footer>
<nav class="navbar navbar-expand-md bg-dark navbar-dark section-menu" style="padding-left: 475px;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php" style="color: white;">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="allproduct.php" style="color: white;">All_Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: white;">About_us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php" style="color: white;">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php" style="color: white;">Login</a>
    </li>
  </ul>
</nav>
</footer>
</div>
</body>

</html>