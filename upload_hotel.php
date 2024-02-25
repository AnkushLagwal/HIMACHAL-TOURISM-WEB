<?php
session_start();
include('config.php');
if(isset($_SESSION['userid']))
{
$dest_id=$_GET['dest_id'];
$Rent=$_GET['rent'];
$hname=$_GET['hname'];
$hdesc=$_GET['hdesc'];



$query="insert into hotel(hotel_name,Rent,description,dest_id) 
                      values('$hname',$Rent,'$hdesc',$dest_id)";
	if(mysqli_query($conn,$query))
					  {
						  echo "hotel added";
						  	echo "you will be redirected to admin page after 2 seconds";
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