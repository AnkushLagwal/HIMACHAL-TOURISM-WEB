<?php
session_start();
include('config.php');
if((isset($_SESSION['user']))&&($_POST['change']))
{
	$cpsw=$_POST['cpass'];
    $npass=$_POST['npass'];
	$conpass=$_POST['conpass'];
	$dpass=$_SESSION['user'];
	$sql = "SELECT 
* from user where user_id='$dpass' ";				
$result = mysqli_query($db,$sql);

     $count = mysqli_num_rows($result);
   
        if($count==1) {
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
$upass = $row['password'];
		}
		if($cpsw!=$upass)
		{
				
		header("Refresh: 2;url=admin.php");
		echo "old passsword is incorrect "."<b> you will be redirected to admin page</b>";
		}
		
		
		
 
      
      
	if($npass!=$conpass)
	{
		
			
		header("Refresh: 2;url=admin.php");
		echo "new passsword and confirm password do not match"."<b> you will be redirected to admin page</b>";
		
		
}
else
{
	$query="update user set password='$npass' where user_id='$dpass'";
	if(mysqli_query($db,$query))
	{
		echo "password changed sucussfully<b> you will be again redirected to login page</b>";
				
		header("Refresh: 2;url=logout.php");
		
	}
	
	
	
}
}
?>