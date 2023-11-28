<?php 
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
}
else
?>
<?php
include 'connection.php';
if(isset($_POST['deleteid']))
{
	$deleteid = $_POST['deleteid'];
	$sql = "delete from category2 where Id=$deleteid";
	$result = mysqli_query($con,$sql);
}

?>