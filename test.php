<?php
$x="rupee";
echo "pakistan currency is $x";
/*###########################################
              Create Connection with mysql
#############################################*/
$host="localhost";
$name="root";
$password="";
$con=mysqli_connect($host,$name,$password);
if(!$con)
{
die(mysqli_connect_error());
}
else
{
 echo "sucessfully connected";
}


/*###########################################
                           Create Database
#############################################*/
$db="create database db";
if (mysqli_query($con, $db)) {
	echo "<br>database is successfully created";
}

/*###########################################
                           Select Database
#############################################*/
$db_selected = mysqli_select_db($con,'db' );

/*###########################################
                           Create Table
#############################################*/
$val = mysqli_query($con,'select 1 from `student` LIMIT 1');
if($val !== false)
{
	//table exist
}
else
{
$table="create table student(
Reg int(6) AUTO_INCREMENT PRIMARY KEY,
Name varchar(30) NOT NULL,
Department varchar(50) NOT NULL
) ";
if (mysqli_query($con,$table)) {
	echo "table is sucessfully created";
}
else
{
	echo mysqli_error($con);
}
}
/*###########################################
                    insert data in Table
#############################################*/
echo "table hai bhae";
	$table_data="INSERT INTO student (Reg,Name,Department) VALUES('160','Afham','D-phrm')";
if (mysqli_query($con,$table_data)) {
	echo "<script>".'alert("sucessfully inserted data");'."</script>";
}
	else
{
	mysqli_error($con);
}
?>
