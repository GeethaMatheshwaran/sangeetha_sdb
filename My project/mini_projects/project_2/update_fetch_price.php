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
$temp = $_POST["temp"];
$sql = "select * from item2 where Item ='$temp' ";
$result = mysqli_query($con,$sql);
$data=array();
while ($row = mysqli_fetch_assoc($result))
{
	$data['Price']=$row['Price'];
	$data['Quantity']=$row['Quantity'];
	// $data['update_Price']=$row['Price'];
	// $data['update_Quantity']=$row['Quantity'];
}
echo json_encode($data);
?>