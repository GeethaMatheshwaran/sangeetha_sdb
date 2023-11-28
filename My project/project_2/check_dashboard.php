<?php 
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
}
else
?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<div id="link">
		<a href="category.php">cate</a>
		<a href="sales.php">sales</a>
	</div>
	<div id="page"></div>
</body>
</html>