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
    <h1>Add Packages</h1>
   <form name="destform" action="upload_package.php" method="get">

    <label for="pack_name">pack  Name</label>
	<input type="text" name="pack_name" ><br>
	
 
 <label for="price">price</label>
      <select name="price" id="price">
        <option value="1000">1000</option>
		<option value="2000">2000</option>
		<option value="3000">3000</option>
		<option value="4000">4000</option>
		<option value="5000">5000</option>
		<option value="6000">6000</option>
		<option value="7000">7000</option>
       </select><br><br>
    
	   <label for="rent">Select Destination</label>
      <select name="dest_id" id="rent">';
		$sql1 = "SELECT 
* from destinations";				
$result1 = mysqli_query($conn,$sql1);
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
		{
		echo '<option value='.$row1["dest_id"].'>'.$row1["name"].'</option>';
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