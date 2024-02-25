<?php
$host="localhost";
$username="root";
$password="";
$database_name="result";

$db=mysqli_connect($host,$username,$password);
if($db)
{
	
	mysqli_select_db($db,$database_name);
}
else
{
	echo "could not connect to database";
}
?>