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
if(isset($_POST['id']))
{
	$id = $_POST['id'];

	$sql = "SELECT * FROM category2 WHERE Id=$id";
  	$result = mysqli_query($con,$sql);
  	$response = array();
  	while($row = mysqli_fetch_assoc($result))
  	{
  		$response = $row;
  	}
  	echo json_encode($response);
}
else
{
	$response['status'] = 200;
	$response['message'] = "not update";
}

//update query
if(isset($_POST['hiddenData']))
  {
  	$hiddenData = $_POST['hiddenData'];
    $Category = $_POST['update_CategoryName'];
    $Description = $_POST['update_Description'];
    $Status = $_POST['update_Status'];
    

    $sql = "UPDATE category2 set Id='$hiddenData',Category ='$Category',Description ='$Description',Status ='$Status' where Id='$hiddenData' ";
    $result = mysqli_query($con,$sql); //link
}
?>