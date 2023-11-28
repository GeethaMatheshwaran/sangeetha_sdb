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
if( isset($_POST['temp_item'])  && isset($_POST['temp_category'])  && isset($_POST['temp_price'])  && isset($_POST['temp_quantity'])  && isset($_POST['temp_description']) && isset($_POST['temp_status']) )
{
	$sql = " insert into item2 (Item,Category,Price,Quantity,Description,Status) values ('$temp_item','$temp_category','$temp_price','$temp_quantity','$temp_description','$temp_status') ";
	$result = mysqli_query($con,$sql);
}
?>