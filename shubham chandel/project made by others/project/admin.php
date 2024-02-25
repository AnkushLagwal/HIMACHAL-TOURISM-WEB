<?php
session_start();
if(isset($_SESSION['user']))
{
include('config.php');echo '
	<html>
  <head>
  <style>
  button 
  {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
	border-radius:15px;
}
body 
{
font-family: Arial, Helvetica, sans-serif;
background-image: url("6.jpg");
}
form
{
font-family: Arial, Helvetica, sans-serif;
background-image: url("3.jpg");

border-radius:50px;
}
h1
{
font-family: Arial;
font-size:40px;
color: brown;
}
h2
{
font-family: Arial;
font-size:15px;
color: green;
}
h5
{
font-family: Arial;
font-size:20px;
color: blue;
}
option{
	background-color:red;
	font-family: Arial;
}
select{
	color: black;
	display: block;
	background-color: orange;
	font-family: Helvetica;
}
	
  </style>
    </head>
  <body>
 <center><h1>
Admin page Abvgiet  </center></h1>';


if((isset($_SESSION['user']))&&($_SESSION['user_cat']==0))
{
	


	echo '<br> <div>
      <center>
      <h1>WELCOME   '.$_SESSION['username'].'</h1>
	 	<hr width="100%" colour="red"><br>
</center></div>
<div align="center">
<h2>Change Password</h2>
	<table border="0">
	
	<form method="post" name="pswchange" action="changepsw.php">
	<tr><td>current password:</td><td><input type="text" name="cpass"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="npass"></td></tr>
	<tr><td>confirm Password</td><td><input type="password" name="conpass"></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="change" value="change password"></td></tr>
	<br>

	</table>
	</form>
	<p><a href="manage.php" >manage Lesson Plan/Notice</a></p>
	</div>
		<hr width="100%" colour="red"><br>

	<center>
	<h2>Upload lesson Plan<h2>
	
	
	<form method="post" name="lesson" action="uploadlesson.php" enctype="multipart/form-data">
    

<center>

	  <h2>
	  <b>Subject name</b>
	  
      <input type="text" name="subject" >
     </h2>
	 
	 </center>
	 <center>

	  <h2>
	  <b>Teacher name</b>
	  
      <input type="text" name="teacher" >
     </h2>
	 
	 </center>
	 
	 <center>
	 
	 <h2>
      <b>semester</b>
	  <select name="semester">
	  <option name="1" value="1">Ist</option>
	  <option name="2" value="2">2nd</option>
	  <option name="3" value="3">3rd</option>
	  <option name="4" value="4">4th</option>
	  <option name="5" value="5">5th</option>
	  <option name="6" value="6">6th</option>
	  </select>
      
        </h2>
		</center>
		<h2>
      <b>Branch</b>
	  <select name="dept">
	  <option name="1" value="1">Applied Science</option>
	  <option name="2" value="2">Computer Engg</option>
	  <option name="3" value="3">ECE</option>
	  <option name="4" value="4">EE</option>
                   <option name="5" value="5">ME</option>
	  </select>
      
        </h2>
		</center>
		<center>
		
		<b> upload document </b>
		<input type="file" name="document" id="filetouplode">
		</center>
		
		<center>
		
      <button type="submit" name="SUBMIT">SUBMIT</button></a>
      </div>
	  </center>
	  
	  <center>
	  <div>
		 <a href="logout.php"> <button type ="button" class="cancelbtn">logout</button></a>
	  </div>
	 
	</center>
  </form>
  </body>
  </html>
</div>
</center>';

	
}
else if((isset($_SESSION['user']))&&($_SESSION['user_cat']==1))
{
	
	echo '<br> <div>
      <center>
      <h1>WELCOME   '.$_SESSION['username'].'</h1>
	 	<hr width="100%" colour="red"><br>
</center></div>
<div align="center">
<h2>Change Password</h2>
	<table border="0">
	
	<form method="post" name="pswchange" action="changepsw.php">
	<tr><td>current password:</td><td><input type="text" name="cpass"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="npass"></td></tr>
	<tr><td>confirm Password</td><td><input type="password" name="conpass"></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="change" value="change password"></td></tr>
	<br>

	</table>
	</form>
	<p><a href="manage.php" >manage Lesson Plan/Notice</a></p>
	</div>
		<hr width="100%" colour="red"><br>

	<center>
	<h2>Upload lesson Plan Applied<h2>
	
	
	<form method="post" name="lesson" action="uploadlesson.php" enctype="multipart/form-data">
    

<center>

	  <h2>
	  <b>Subject name</b>
	  
      <input type="text" name="subject" >
     </h2>
	 
	 </center>
	 <center>

	  <h2>
	  <b>Teacher name</b>
	  
      <input type="text" name="teacher" >
     </h2>
	 
	 </center>
	 
	 <center>
	 
	 <h2>
      <b>semester</b>
	  <select name="semester">
	  <option name="1" value="1">Ist</option>
	  
	  </select>
      
        </h2>
		</center>
		<h2>
      <b>Branch</b>
	  <select name="dept">
	  <option name="1" value="1">Applied Science</option>
	 
	  </select>
      
        </h2>
		</center>
		<center>
		
		<b> upload document </b>
		<input type="file" name="document" id="filetouplode">
		</center>
		
		<center>
		
      <button type="submit" name="SUBMIT">SUBMIT</button></a>
      </div>
	  </center>
	  
	  <center>
	  <div>
		 <a href="logout.php"> <button type ="button" class="cancelbtn">logout</button></a>
	  </div>
	 
	</center>
  </form>
  </body>
  </html>
</div>
</center>';

	
}
else if((isset($_SESSION['user']))&&($_SESSION['user_cat']==2))
{
	
	echo '<br> <div>
      <center>
      <h1>WELCOME   '.$_SESSION['username'].'</h1>
	 	<hr width="100%" colour="red"><br>
</center></div>
<div align="center">
<h2>Change Password</h2>
	<table border="0">
	
	<form method="post" name="pswchange" action="changepsw.php">
	<tr><td>current password:</td><td><input type="text" name="cpass"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="npass"></td></tr>
	<tr><td>confirm Password</td><td><input type="password" name="conpass"></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="change" value="change password"></td></tr>
	<br>

	</table>
	</form>
	<p><a href="manage.php" >manage Lesson Plan/Notice</a></p>
	</div>
		<hr width="100%" colour="red"><br>

	<center>
	<h2>Upload lesson Plan Computer Engineering</h2>
	
	
	<form method="post" name="lesson" action="uploadlesson.php" enctype="multipart/form-data">
    

<center>

	  <h2>
	  <b>Subject name</b>
	  
      <input type="text" name="subject" >
     </h2>
	 
	 </center>
	 <center>

	  <h2>
	  <b>Teacher name</b>
	  
      <input type="text" name="teacher" >
     </h2>
	 
	 </center>
	 
	 <center>
	 
	 <h2>
      <b>semester</b>
	  <select name="semester">
	  <option name="3" value="3">3rd</option>
	  <option name="4" value="4">4th</option>
	  <option name="5" value="5">5th</option>
	  <option name="6" value="6">6th</option>
	  
	  </select>
      
        </h2>
		</center>
		<h2>
      <b>Branch</b>
	  <select name="dept">
	  <option name="2" value="2">Computer Engineering</option>
	 
	  </select>
      
        </h2>
		</center>
		<center>
		
		<b> upload document </b>
		<input type="file" name="document" id="filetouplode">
		</center>
		
		<center>
		
      <button type="submit" name="SUBMIT">SUBMIT</button></a>
      </div>
	  </center>
	  
	  <center>
	  <div>
		 <a href="logout.php"> <button type ="button" class="cancelbtn">logout</button></a>
	  </div>
	 
	</center>
  </form>
  </body>
  </html>
</div>
</center>';

	
}
else if((isset($_SESSION['user']))&&($_SESSION['user_cat']==3))
{
	
	echo '<br> <div>
      <center>
      <h1>WELCOME   '.$_SESSION['username'].'</h1>
	 	<hr width="100%" colour="red"><br>
</center></div>
<div align="center">
<h2>Change Password</h2>
	<table border="0">
	
	<form method="post" name="pswchange" action="changepsw.php">
	<tr><td>current password:</td><td><input type="text" name="cpass"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="npass"></td></tr>
	<tr><td>confirm Password</td><td><input type="password" name="conpass"></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="change" value="change password"></td></tr>
	<br>

	</table>
	</form>
	<p><a href="manage.php" >manage Lesson Plan/Notice</a></p>
	</div>
		<hr width="100%" colour="red"><br>

	<center>
	<h2>Upload lesson Plan Electronics and Communications Engineering</h2>
	
	
	<form method="post" name="lesson" action="uploadlesson.php" enctype="multipart/form-data">
    

<center>

	  <h2>
	  <b>Subject name</b>
	  
      <input type="text" name="subject" >
     </h2>
	 
	 </center>
	 <center>

	  <h2>
	  <b>Teacher name</b>
	  
      <input type="text" name="teacher" >
     </h2>
	 
	 </center>
	 
	 <center>
	 
	 <h2>
      <b>semester</b>
	  <select name="semester">
	  <option name="3" value="3">3rd</option>
	  <option name="4" value="4">4th</option>
	  <option name="5" value="5">5th</option>
	  <option name="6" value="6">6th</option>
	  
	  </select>
      
        </h2>
		</center>
		<h2>
      <b>Branch</b>
	  <select name="dept">
	  <option name="3" value="3">ECE</option>
	 
	  </select>
      
        </h2>
		</center>
		<center>
		
		<b> upload document </b>
		<input type="file" name="document" id="filetouplode">
		</center>
		
		<center>
		
      <button type="submit" name="SUBMIT">SUBMIT</button></a>
      </div>
	  </center>
	  
	  <center>
	  <div>
		 <a href="logout.php"> <button type ="button" class="cancelbtn">logout</button></a>
	  </div>
	 
	</center>
  </form>
  </body>
  </html>
</div>
</center>';

	
}
else if((isset($_SESSION['user']))&&($_SESSION['user_cat']==4))
{
	
	echo '<br> <div>
      <center>
      <h1>WELCOME   '.$_SESSION['username'].'</h1>
	 	<hr width="100%" colour="red"><br>
</center></div>
<div align="center">
<h2>Change Password</h2>
	<table border="0">
	
	<form method="post" name="pswchange" action="changepsw.php">
	<tr><td>current password:</td><td><input type="text" name="cpass"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="npass"></td></tr>
	<tr><td>confirm Password</td><td><input type="password" name="conpass"></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="change" value="change password"></td></tr>
	<br>

	</table>
	</form>
	<p><a href="manage.php" >manage Lesson Plan/Notice</a></p>
	</div>
		<hr width="100%" colour="red"><br>

	<center>
	<h2>Upload lesson Plan Electrical Engineering</h2>
	
	
	<form method="post" name="lesson" action="uploadlesson.php" enctype="multipart/form-data">
    

<center>

	  <h2>
	  <b>Subject name</b>
	  
      <input type="text" name="subject" >
     </h2>
	 
	 </center>
	 <center>

	  <h2>
	  <b>Teacher name</b>
	  
      <input type="text" name="teacher" >
     </h2>
	 
	 </center>
	 
	 <center>
	 
	 <h2>
      <b>semester</b>
	  <select name="semester">
	  <option name="3" value="3">3rd</option>
	  <option name="4" value="4">4th</option>
	  <option name="5" value="5">5th</option>
	  <option name="6" value="6">6th</option>
	  
	  </select>
      
        </h2>
		</center>
		<h2>
      <b>Branch</b>
	  <select name="dept">
	  <option name="4" value="4">EE</option>
	 
	  </select>
      
        </h2>
		</center>
		<center>
		
		<b> upload document </b>
		<input type="file" name="document" id="filetouplode">
		</center>
		
		<center>
		
      <button type="submit" name="SUBMIT">SUBMIT</button></a>
      </div>
	  </center>
	  
	  <center>
	  <div>
		 <a href="logout.php"> <button type ="button" class="cancelbtn">logout</button></a>
	  </div>
	 
	</center>
  </form>
  </body>
  </html>
</div>
</center>';


}
else if((isset($_SESSION['user']))&&($_SESSION['user_cat']==5))
{
	
	echo '<br> <div>
      <center>
      <h1>WELCOME   '.$_SESSION['username'].'</h1>
	 	<hr width="100%" colour="red"><br>
</center></div>
<div align="center">
<h2>Change Password</h2>
	<table border="0">
	
	<form method="post" name="pswchange" action="changepsw.php">
	<tr><td>current password:</td><td><input type="text" name="cpass"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="npass"></td></tr>
	<tr><td>confirm Password</td><td><input type="password" name="conpass"></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="change" value="change password"></td></tr>
	<br>

	</table>
	</form>
	<p><a href="manage.php" >manage Lesson Plan/Notice</a></p>
	</div>
		<hr width="100%" colour="red"><br>

	<center>
	<h2>Upload lesson Plan Mechanical Engineering</h2>
	
	
	<form method="post" name="lesson" action="uploadlesson.php" enctype="multipart/form-data">
    

<center>

	  <h2>
	  <b>Subject name</b>
	  
      <input type="text" name="subject" >
     </h2>
	 
	 </center>
	 <center>

	  <h2>
	  <b>Teacher name</b>
	  
      <input type="text" name="teacher" >
     </h2>
	 
	 </center>
	 
	 <center>
	 
	 <h2>
      <b>semester</b>
	  <select name="semester">
	  <option name="3" value="3">3rd</option>
	  <option name="4" value="4">4th</option>
	  <option name="5" value="5">5th</option>
	  <option name="6" value="6">6th</option>
	  
	  </select>
      
        </h2>
		</center>
		<h2>
      <b>Branch</b>
	  <select name="dept">
	  <option name="5" value="5">ME</option>
	 
	  </select>
      
        </h2>
		</center>
		<center>
		
		<b> upload document </b>
		<input type="file" name="document" id="filetouplode">
		</center>
		
		<center>
		
      <button type="submit" name="SUBMIT">SUBMIT</button></a>
      </div>
	  </center>
	  
	  <center>
	  <div>
		 <a href="logout.php"> <button type ="button" class="cancelbtn">logout</button></a>
	  </div>
	 
	</center>
  </form>
  </body>
  </html>
</div>
</center>';

	

}
}
else
{





        echo "you are not logged in <b> you will be again redirected to login page</b>";
				
		header("Refresh: 2;url=logout.php");
		


}
   
?>
