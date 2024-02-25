<?php
session_start();
if(isset($_SESSION['userid']))
{
	echo "Welcome to admin page <br>";
	
	echo '<html>
	
<head>
	<title>
		Welcome To Login Page
	</title>
</head>

<body style="text-align:center;">
	
	<h1 style="color:green;">
		Welcome To Login Page
	</h1>
	



<div class="myDiv">
    <a href="#" button style="margin-right:16px">
	<button style="margin-right:16px">Update Subject</button></a>
	
    <a href="add_student.php" button style="margin-right:16px">
	<button style="margin-right:16px">Add Student</button></a>
	
    <a href="#" button style="margin-right:16px">
	<button>Update Marks</button></a>
</div>
<br><br>



<hr>
<h2> View Student List</h2>

    <body> 
    
     <form method="GET" action="StudentRecorList.php">
       

<label for="Branch"><b>Select Branch:  </b></label><br>
<select name="Branch" id="Branch"required>
<option value=""></option>
<option value="0">Computer Engineering</option>
<option value="1">Mechanical Engineering</option>
<option value="2">Applied Science</option>
<option value="3">Electrial Engineering</option>
<option value="4">Electronics</option>
</select>
<br><br>

<label for="Semester"><b>Select Semester:  </b></label><BR>
<select name="Semester" id="semester" required>

<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
<option value="6">6th</option>
</select>
<br><br>

<input type="submit" name="submit" value="submit">

<br>
</form>

</head>

</html><br><br>';


	
	
	
}
else
{
	header("location:login.php");	
}

echo"<hr>";
echo"<p><b> To logout click here</b></p>";
echo "<a href='logout.php'>logout</a>";
?>


