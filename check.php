<?php
session_start();
include('config.php');
if(isset($_POST['login']))
{
$uname=$_POST['uname'];
$password=$_POST['psw'];
$sql="select * from demo where user_name='$uname' AND password='$password'";
$result=mysqli_query($conn,$sql) or die (mysqli_error($conn));
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
echo "login succusful<br>";
$_SESSION['userid']=$row['user_id'];
$_SESSION['username']=$row['user_name'];
$_SESSION['usercat']=$row['user_cat'];
header("Location:admin.php");
}
else
{
echo " incorect username or password";

}
}
else
{
echo "no data filled in form";
}
?>