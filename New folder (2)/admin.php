<?php
session_start();
if(isset($_SESSION['userid']))
{
	echo "Welcome to admin page <br>";
	echo "<a href='logout.php'>logout</a>";
}
else
{
	header("location:login.php");
	
}
?>

<!DOCTYPE html>
<html>
	
<head>
	<title>
		Welcome To Login Page
	</title>
</head>

<body style="text-align:center;">
	
	<h1 style="color:green;">
		Welcome To Login Page
	</h1>
	



<div class='myDiv'>
    <button style='margin-right:16px' >Update Student</button>
    <a href="add_student.html" button style='margin-right:16px'>Add Student</button>
    <button>Update Marks</button>
</div>
<br><br>
<input type="submit" name="submit" value="submit">

</head>

</html>
