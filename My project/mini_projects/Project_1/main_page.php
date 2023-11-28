<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>main_page</title>
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			font-family: red serif;
		}
		.container
		{
			margin-left: 350px;
			
		}
		.container .box
		{
			background: darkseagreen;
			position: relative;
			width: 200px;
			height : 150px;
			float: left;
			margin: 50px;
			box-sizing: border-box;
			overflow: hidden;
/*			border-radius: 10px;
*/		}
		.container .box .font
		{
			font-size: 40px;
			color: black;
			display:block;
			text-align:center;
			margin-left: 5px;
			margin-top: 35px;
		}
	</style>
</head>
<body>
	<?php include_once('menu_bar.php') ?>
	<h2 align="center" class="my-5">Welcome!</h2>
	<DIV class ="container my-5">
		<div class="box">
			<P><a class ="font" href="category_display.php"  >Category</a></P>
		</div>
		<div class="box">
			<P><a class ="font" href="item_display.php">    Items</a></P>
		</div>
		<div class="box">
			<P><a class ="font" href="sales_display.php">   sales</a></P>
		</div>
		
	</div>
</body>
</html>
