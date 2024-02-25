<?php
session_start();
include('config.php');
if(isset($_SESSION['userid']))
{
$dest_id=$_GET['dest_id'];
$pack_name=$_GET['pack_name'];


$price=$_GET['price'];



$query="insert into packages(pack_name,price,dest_id) 
                      values('$pack_name',$price,$dest_id)";
	if(mysqli_query($conn,$query))
					  {
						  echo "package added";
						     header("Refresh: 2;url=admin.php");
					  }
					  else
					  {
	                echo mysqli_error($conn);
					  }
					  
}
else
{
	header("location:login.html");
	
}
?>