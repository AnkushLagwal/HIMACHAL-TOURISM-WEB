<?php
session_start();
include('config.php');
if(isset($_SESSION['userid']))
{
$destination=$_GET['destination'];
$state=$_GET['state'];
$distt=$_GET['distt'];
$query="insert into destinations(name,state,distt) 
                      values('$destination','$state','$distt')";
	if(mysqli_query($conn,$query))
					  {
						  echo "destination added<br>";
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