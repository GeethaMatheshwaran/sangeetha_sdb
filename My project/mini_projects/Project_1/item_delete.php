<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
?>

<?php
include 'connection.php';
if(isset($_GET['deleteid']))
{
	$deleteid = $_GET['deleteid'];
	$sql = "delete from items1 where Id=$deleteid";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		header('location:item_display.php');
	}
	else
	{
		die(mysqli_error($con));
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<title>Items Deletion</title>
</head>
<body>
    <h2 align="center" class="my-3">Items Deletion</h2>
</body>
</html>