<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
      <a class="nav-link" href="Home.php" >Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="allproduct.php" >All_Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" >About_us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php" >Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Home.php">Login</a>
    </li>
  </ul>
  <form class="form-inline" action="Home.html">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn" type="submit" style="background-color: #fe9c00; color: white;">Search</button>
  </form>
</div>
</nav>
<section class="section row">
<aside class="aside col-md-2" >
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
		<li><a href="#">Samsung</a></li>
		<li><a href="#">QMobile</a></li>
		<li><a href="#">Apple</a></li>
		<li><a href="#">OPPO</a></li>
		<li><a href="#">Nokia</a></li>
		<li><a href="#">lenovo</a></li>
		<li><a href="#">HTC</a></li>
		<li><a href="#">Infinix</a></li>
	</ul>
    </div>
</aside>
<div class="content col-md-10" style="border: 1px solid; float: left">
  <div class="row">
<div class="jumbotron section2-left col-md-5">
	<div class="section2-header">
		<h1>NEW user</h1>
		<p>
			By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.
		</p>
	</div>
	<div>
		  <div style="display: inline-block;float: right;"><a href="register.php" class="btn btn-md" style="background-color: #fe9c00; color: white;">Create Account</a></div>
	</div>
</div>
<div class="jumbotron section2-inner col-md-4">
	<div class="section2-header">
		<h1>Registered user</h1>
		<h2>Login</h2>
	</div>
	<div class=" section2-content">
		<div class="section2-data">
		   <form action="login.php" method="POST">
			<label class="label">User_Name:</label>
			<input type="text" name="User_Name"><br>
			<label class="label">Password:&nbsp;&nbsp;&nbsp;</label>
			<input type="Password" name="Password">
			<input type="submit" name="submit" style="display: inline-block;float: right; class="btn btn-md" style="background-color: #fe9c00; color: white;">
		   </form>
		</div>
 </div>
</div>
</div>
</div>
</section>
<footer>
<nav class="navbar navbar-expand-md bg-dark navbar-dark section-menu" style="padding-left: 475px;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Home.html" style="color: white;">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Home.html" style="color: white;">All_Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: white;">About_us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.html" style="color: white;">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.html" style="color: white;">Login</a>
    </li>
  </ul>
</nav>
</footer>
</div>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	 $name=$_POST['User_Name'];
	 $pass=$_POST['Password'];
    	$sql = "SELECT id, fname, password FROM customer";
        $result = $con->query($sql);

        if ($result->num_rows > 0) 
        {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " Name: " . $row["fname"]. "password: " . $row["password"]. "<br>";
        if($row["fname"]== $name&&$row["password"]==$pass)
        {
        	echo "successfully login";
        }
    }
}
    else 
        {
             echo "0 results";
         }
}
$con->close();
?>