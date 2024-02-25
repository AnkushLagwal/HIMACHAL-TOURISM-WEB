<?php
session_start();
include('config.php');
if($_SESSION['usercat']==1)
{
	$name=$_GET['name'];
$branch=$_GET['Branch'];
$sem=$_GET['Semester'];
$email=$_GET['email'];
$phone=$_GET['num'];
$roll=$_GET['roll_no'];
$query="insert into student(name,branch,semester,email,phone,roll_no) 
                      values('$name',$branch,$sem,'$email',$phone,$roll)";
					  if(mysqli_query($db,$query))
					  {
						  echo "student added";
					  }
					  else
					  {
	                echo mysqli_error($db);
					  }
					  
					  
					  
					  
					  
}
else
{
	header("location:login.php");
	
}
?>


