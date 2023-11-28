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
$Id= $_REQUEST['status_id'];
$sql = "SELECT * FROM category2 where Id = $Id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if($row['Status']==1)
{
	$sql = "update category2 set Status=0 where Id=$Id";
	$result = mysqli_query($con,$sql);
	?>
	<button type="button"   onclick="change_status('.$Id.')" class="btn btn-danger">Deactive</button>
	<?php 
}
else{
	$sql = "update category2 set Status=1 where Id=$Id";
	$result = mysqli_query($con,$sql);
	?>
	<button type="button"  onclick="change_status('.$Id.')"  class="btn btn-success">Active</button>
	<?php 
}
?>