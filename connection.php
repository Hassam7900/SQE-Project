<?php
$servername="localhost";
$username= "root";
$userpassword= "";
$con=new mysqli($servername,$username,$userpassword,"mobile_shop");
if ($con->connect_error) {
	die("Coneection failed: ". $con->connect_error);
}
?>

