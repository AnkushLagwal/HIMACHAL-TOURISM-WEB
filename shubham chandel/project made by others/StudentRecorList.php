<?php
session_start();
include('config.php');
if(isset($_SESSION['userid']))
{
	$sem=$_GET['Semester'];
	$branch=$_GET['Branch'];
	
	echo '<html>
	
<head>
	<title>
		student record page
	</title>
</head>

<body style="text-align:center;">
	
	<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>

	
	<h1 style="color:green;">
		Welcome To Student Record Page
	</h1>
	<table border="2">
	<tr>
	<th>name</th>
	<th>rollno</th>
	<th>semester</th>
	<th>email</th>
	<th>Phone</th>
	<th>Branch</th>
	</tr>';
	$sql1 = "SELECT 
* from student where branch=$branch AND semester=$sem";				
$result1 = mysqli_query($db,$sql1);
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
   
      
       {
		   switch($row1["branch"])
		   {
			   case 0:
			   $branch11="Computer Engineering";
			   break;
			   case 1:
			   $branch11="Mechanical Engineering";
			   break;
			   case 2:
			   $branch11="Applied SCience";
			   break;
			   case 3:
			   $branch11="Electrical Engineering";
			   break;
			   case 4:
			   $branch11="ECE";
			   break;
		   }
        
	echo '<tr>
		<td>'.$row1["name"].'</td>
		<td>'.$row1["roll_no"].'</td>
			<td>'.$row1["semester"].'</td>	
			<td>'.$row1["email"].'</td>
			<td>'.$row1["phone"].'</td>
				<td>'.$branch11.'</td>		
			</tr>';
	   }
	   echo '</table>';
}

echo'
<br><br>
<hr>
<p><b> To logout click here</b></p>
<a href="logout.php">logout</a>
'
	   ?>
	
	