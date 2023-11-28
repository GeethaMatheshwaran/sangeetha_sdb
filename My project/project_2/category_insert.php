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
extract($_POST);
if(isset($_POST['temp_category']) && isset($_POST['temp_description']) && isset($_POST['temp_status']) )
{
	$sql = " insert into category2 (category,Description,Status) values ('$temp_category','$temp_description','$temp_status') ";
	$result = mysqli_query($con,$sql);
}

?>