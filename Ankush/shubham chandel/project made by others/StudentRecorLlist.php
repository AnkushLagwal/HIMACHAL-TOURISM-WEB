<?php
session_start();
if(isset($_SESSION['userid']))
{
	$sem=$_GET['Semester'];
	$Branch=$_GET['Branch'];
	
	echo '<html>
	
<head>
	<title>
		student record page
	</title>
</head>

<body style="text-align:center;">
	
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
* from student where branch=$branch AND semster=$sem";				
$result1 = mysqli_query($db,$sql1);
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
   
      
       {
        
	echo '<tr>
		<td>'.$row1["name"].'</td>
		<td>'.$row1["roll_no"].'</td>
			<td>'.$row1["Semester"].'</td>	
			<td>'.$row1["email"].'</td>
			<td>'.$row1["phone"].'</td>
				<td>'.$row1["branch"].'</td>		
			</tr>';
	   }
	   echo '</table>';
	   
	   ?>
	
	