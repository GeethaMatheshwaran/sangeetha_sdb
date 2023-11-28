<?php
session_start();
$con = NEW mysqli("localhost","root","","sangeetha");

if(!$con)
{
	die(mysqli_error($con));
}

if(isset($_POST['Username']) )
{
	$sql = "select * from validation where Username='".$_POST['Username']."' and Password = '".$_POST['Password']."' ";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0)
	{
		$_SESSION['Username'] = $_POST['Username'];
		echo "success";
	}
	else
	{
		echo "No";
	}
}
?>
