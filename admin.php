<?php
session_start();
if(isset($_SESSION['userid']))
{

echo'<html>
	
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  type="text/css" href="website/style4.css">

	<title>
		Welcome To Admin Page
	</title>
</head>
<link rel="stylesheet" type="text/css" href="admin_background.css">
<body style="text-align:center;">
	
	<h1 style="color:green;">
		Welcome To Login Page
	</h1>
	


<div class="myDiv">
<a href="update_dest.html" button style="margin-right:16px">

    <button a href="buttoncolor.css" class="button" >Update Destination</button>
	<br>
	<br>
	<br>
	


<a href="update_package.php" button style="margin-right:16px">
    <button a href="buttoncolor.css" class="button" >Update Packages</button>
	<br>

</div>

</head>

</html>';
}
else
{
	header("location:login3.html");
	
}
echo"<hr>";
echo"<p><b>To logout click here</b></p>";
echo"<a href='logout.php'>logout</a>";
?>