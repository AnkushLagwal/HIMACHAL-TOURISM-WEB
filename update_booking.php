<?php
session_start();
include('config.php');
if(isset($_SESSION['userid']))
{
echo '<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.Addbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.Addbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>


  <div class="container">
    <h1>Booking</h1>
   <form name="bookingform" action="upload_booking.php" method="get">

    <label for="book_id">Book id</label>
	<input type="number" name="book_id" ><br>
	<br>
	<br>
	<label for="book_title">Book Title</label>
	<input type="text" name="book_title" ><br>
	
	<label for="book_date">Book Date</label>
	<input type="date" name="book_date" class="form-control select-text">
	<input type="text" name="book_date" class="form-control select-date">
	<br>
	<br>
	<br>
	<label for="book_type">Book Type</label>
	<input type="text" name="book_type" ><br>
	
    <label for="book_desc">Book Description</label>
	<input type="text" name="book_desc" ><br>

  
    
	   <label for="rent">Select Destination</label>
      <select name="name" id="name">';
		$sql1 = "SELECT 
* from destinations";				
$result1 = mysqli_query($db,$sql1);
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
		{
		echo '<option value='.$row1["name"].'>'.$row1["name"].'</option>';
		}
		echo '</select>
		<br>
		<br>
		
	  <label for="rent">Select Hotel:																										</label>
      <select name="hotel_name" id="name">';
		$sql1 = "SELECT 
* from hotel";				
$result1 = mysqli_query($db,$sql1);
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
		{
		echo '<option value='.$row1["hotel_name"].'>'.$row1["hotel_name"].'</option>';
		}
		
       echo '</select>
 <br>
 <br>
 
 <label for="rent">Select Package:   </label>
      <select name="pack_name" id="name">';
		$sql1 = "SELECT 
* from packages";				
$result1 = mysqli_query($db,$sql1);
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
		{
		echo '<option value='.$row1["pack_name"].'>'.$row1["pack_name"].'</option>';
		}
		
       echo '</select>
 <br>
 <br>
 
   
    <button type="Add" class="Addbtn">Add</button>
  </div>

  <div class="container signin">
  
  </div>
</form>
</head>
</html>';
}
else
{
	header("location:login.html");
	
}
?>