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
if( isset($_POST['temp_item'])  && isset($_POST['temp_price'])  && isset($_POST['temp_quantity'])  && isset($_POST['temp_discount']) && isset($_POST['temp_total']) )
{
	$sql = " insert into sales2 (Item,Price,Quantity,Discount,Total) values ('$temp_item','$temp_price','$temp_quantity','$temp_discount','$temp_total') ";
	$result = mysqli_query($con,$sql);
}
?>