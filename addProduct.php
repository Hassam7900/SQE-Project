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
<div class="container-fluid container-main">
<header class="header">
    <div class="header-left">
	   <h2>Advance Mobile Store</h2>
    </div>
    <div class="header-right">
    	<i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
    </div>
</header>
<nav class="navbar navbar-expand-md bg-dark navbar-dark section-menu">
<div class="collapse navbar-collapse" id="navb">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: white;">Add_product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewProduct.html" style="color: white;">View_Product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewOrder.html" style="color: white;">View_Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: white;">Delete_Product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: white;">Logout</a>
    </li>
  </ul>
  <form class="form-inline" action="Home.html">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn" type="submit" style="background-color:#fe9c00; color: white; ">Search</button>
  </form>
</div>
</nav>
<section>
  <div class="AddProduct">
    <div class="AddProductHead" style=""><h2>Add New Product</h2></div>
    <div class="jumbotron product_detail">
      <form action="addproduct.php" method="post" enctype="multipart/form-data">
        <label class="label">Product_Id:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="Product_Id"><br>
        <label class="label">Product_Name:</label>
        <input type="text" name="Product_Name"><br>
        <label class="label">Product_Type:</label>&nbsp;&nbsp;
        <input type="text" name="Product_Type"><br>
        <input type="file" name="image" class="btn" style="background-color:#fe9c00;">
        <div class="product_img">
          <img src="" alt="product_img"width="100px" height="100px">
         </div><br>
        <label class="label">Short_Description:</label>
        <input type="text" name="Product_desc"><br>
        <label class="label">price:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="Product_price"><br>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
      </form>
    </div>
  </div>
</section>
</div>
</body>
<?php
include("connection.php");
if(isset($_POST["submit"])){
  $pid=$_POST['Product_Id'];
  $pname=$_POST['Product_Name'];
  $ptype=$_POST['Product_Type'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    $pdec=$_POST['Product_desc'];
    $price=$_POST['Product_price'];
        /*
         * Insert image data into database
         */
        
        //DB details
        
        //Create connection and select DB
        //Insert image content into database
        $insert = $con->query("INSERT into addproduct (pid,pname,ptype,image,pdesc,price) VALUES ('$pid', '$pname','$ptype','$imgContent','$pdec','$price')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
</html>