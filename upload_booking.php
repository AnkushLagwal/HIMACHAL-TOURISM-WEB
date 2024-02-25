<?php
session_start();
include('config.php');
if(isset($_SESSION['userid']))
{
	$book_id=$_GET['book_id'];
		$book_title=$_GET['book_title'];
			$book_date=$_GET['book_date'];
				$book_type=$_GET['book_type'];
					$book_desc=$_GET['book_desc'];




$name=$_GET['name'];
$hotel_name=$_GET['hotel_name'];
$pack_name=$_GET['pack_name'];




$query="insert into packages(book_id,book_title,book_date,book_type,book_desc,name,hotel_name,pack_name) 
                      values($book_id,'$book_title','$book_date','$book_type','$book_desc','$name','$hotel_name','$pack_name')";
	if(mysqli_query($db,$query))
					  {
						  echo "Booking Confirm";
						     header("Refresh: 2;url=admin.php");
					  }
					  else
					  {
	                echo mysqli_error($db);
					  }
					  
}
else
{
	header("location:login.html");
	
}
?>