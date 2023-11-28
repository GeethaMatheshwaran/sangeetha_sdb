<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
?>

<?php 
include 'connection.php';
$temp = $_POST["temp"];
$sql = "select * from items1 where Item ='$temp' ";
$result = mysqli_query($con,$sql);
$data=array();
while ($row = mysqli_fetch_assoc($result))
{
	$data['Price']=$row['Price'];
	$data['Quantity']=$row['Qty'];
}
echo json_encode($data);
?>