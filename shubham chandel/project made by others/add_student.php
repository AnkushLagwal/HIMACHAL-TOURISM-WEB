<?php
session_start();
if(isset($_SESSION['userid']))
{
echo'
<html>
<head>
<title> Add Student </title>
<body>

 <body style="background-color:#5F9EA0;">

<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>


<h2 style="text-align:center; font-size:40px; color:#fdf5e6;">Add Student</h2>

<form name="f1" action="upload_student.php" method="get">
  <label for="stu_id"><b> Roll no: </b></label><br>
  <input type="text" id="roll_no" name="roll_no" ><br><br>
  
  <label for="name"><b>Name: </b></label><br>
  <input type="text" id="name" name="name" ><br><br>

  
  
<label for="Branch"><b>Branch:  </b></label><br>
<select name="Branch" id="Branch"required>
<option value=""></option>
<option value="0">Computer Engineering</option>
<option value="1">Mechanical Engineering</option>
<option value="2">Applied Science</option>
<option value="3">Electrial Engineering</option>
<option value="4">Electronics</option>
</select>
<br><br>
  

<label for="Semester"><b>Semester:  </b></label><BR>
<select name="Semester" id="semester" required>

<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
<option value="6">6th</option>
</select>
<br><br>



  <label for="email"><b>Enter your email: </b></label><br>
  <input type="email" id="email" name="email" required><br><br>

  <label for="num"><b>Phone number: </b></label><br>
  <input type="num" id="num" name="num" value=""><br> <br>

<input type="submit" name="Add" value="Add">

</form>


</body>
</html>';
}
else
{
	header("location:login.php");
	
	
}
echo'
<hr>
<p><b> To logout click here</b></p>
<a href="logout.php">logout</a>
'
?>
