<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <a class="nav-link" href="Home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="allproduct.php" >All_Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About_us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
  </ul>
  <form class="form-inline" action="Home.html">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn" type="submit" style="background-color: #fe9c00; color: white;">Search</button>
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
<div class="contentreg col-md-10">
<div class="sectionreg row">
	<div class="jumbotron sectionreg-inner col-md-6">
		<h2>Create Account</h2>
		<h3 style="color: red">field are marked with * are compulsory</h3>
		<form method="POST" action="register.php">
			<label>First Name:&nbsp;</label>
			<input type="text" name="first_name" required="name"><span style="color: red; font-weight: bold;">*</span><br>
			<label>Last Name:&nbsp;</label>
			<input type="text" name="last_name" required="name"><span style="color: red; font-weight: bold;">*</span><br>
			<label>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select type="gender" name="gender">
            	<option>Male</option>
            	<option>Female</option>
            </select><br>
            <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="Email" name="email" required="Email"><span style="color: red; font-weight: bold;">*</span><br>
            <label>contact No:</label>
            <input type="number" name="number" required="Contact No"><br>
            <label>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="city"><br>
            <label>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="address"><br>
            <label>User Name:</label>
            <input type="text" name="user_name" required="user name"><span style="color: red; font-weight: bold;">*</span><br>
            <label>Password:&nbsp;&nbsp;&nbsp;</label>
            <input type="Password" name="password" required="password"><span style="color: red; font-weight: bold;">*</span><br>
            <label>User id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="number" name="user_id"><br>
            <input type="submit" name="register" value="register" class="btn" style="float: right; background-color: #fe9c00; color: white;">
		</form>
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
if(isset($_POST['register']))
{
  $fname=$_POST['first_name'];
  $lname=$_POST['last_name'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $contactn=$_POST['number'];
  $address=$_POST['address'];
  $password=$_POST['password'];
  $query1=
  "insert into customer (fname,lname,gender,email,contactn,address,password) values 
  ('$fname','$lname','$gender','$email','$contactn','$address','$password')";
  if($con->query($query1)===TRUE)
  {
    echo "<h1><script>alert('SUCESSFULLY INSERTED')</script></h1>";
  }else
  {
    echo "ERROR :".$query1."<br>".$con->error;
  }
}
$con->close();
?>