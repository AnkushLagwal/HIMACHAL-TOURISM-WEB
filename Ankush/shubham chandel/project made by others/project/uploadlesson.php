<?php
session_start();
include('config.php');
if((isset($_SESSION['user']))&&(isset($_FILES['document'])))
{
	$errors=array();
$file_name=$_FILES['document']['name'];
$file_size=$_FILES['document']['size'];
$file_temp=$_FILES['document']['tmp_name'];
$file_type=$_FILES['document']['type'];
$file_ext=strtolower(end(explode(".",$file_name)));
$extensions=array("pdf","jpeg");
$dir="./documents/".$_SESSION['user']."/";
if(!is_dir($dir))
{
	
	mkdir($dir);

}
	
$file_dest=$dir.$file_name;


$subject=$_POST['subject'];
$semester=$_POST['semester'];
$dept=$_POST['dept'];
$teacher=$_POST['teacher'];





if(in_array($file_ext,$extensions)===false)
{
$errors[0]="only pdf files are allowed";
}
if($file_size>2097152456)
{
$errors[1]="file size cannot exceed 5mb";
}

$query="insert into lesson(lesson_subject,url,semster,dept,teacher) 
                      values('$subject','$file_dest',$semester,$dept,'$teacher')";
if(mysqli_query($db,$query))
{
	move_uploaded_file($file_temp,$file_dest);
	echo "lesson plan uploaded succussfuly you will be directed to managment page";
                header("Refresh: 2;url=manage.php");
}
else
	echo mysqli_error($db);

}
else{
	echo "not set";
	
}

?>