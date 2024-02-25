<?php
$host="localhost";
$username="root";
$password="";
$database_name="tour_demo";

$conn=mysqli_connect($host,$username,$password,$database_name);
if(!$conn)
{
	
	
   die("Failed to connect to MySQL:" . mysqli_error());
}
else
{
	echo "database connected";
	
}
?>

