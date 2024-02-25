<html> 
<head>
<title> Login Page </title>

<style>
h1 {text-align: center;}
h1 {color:blue;}
</style>

</head>
<body>
<h1  style="font-size:60px;" > Login Page </h1>
<form action="check.php" method="post">
<b>Username:</b><input type="text" placeholder="Enter Username" name="uname"id="name"> <br> <br>



<label for="psw"><b>Password:</b></label>
<input type="password" placeholder="Enter Password" name="psw" required><br><br>
<br>

<label for="login as"><b>Login as :  </b></label>
<select name="login as" id="Login"required>
<option value="">None</option>
<option name ="A" value="0">Admin</option>
<option name="T" value="1">Teacher</option>
<option name="S" value="2">Student</option> <br><br>


<input type="submit" name="login" value="login">



</select>


</form>

</body>
</html>