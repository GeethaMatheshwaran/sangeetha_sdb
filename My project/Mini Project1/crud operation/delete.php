<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
	$deleteid = $_GET['deleteid'];
	$sql = "delete from veg where S_NO=$deleteid";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		header('location:display.php');
	}
	else
	{
		die(mysqli_error($con));
	}

}

?>