<?php
//REPLACE
	if(isset($_POST['Replace']))
	{
		$Find = $_POST['Find'];
		$change = $_POST['change'];

		$Input = $_POST['Input'];
		if(empty($Input))
		{
			echo '<script>alert("Please Enter Input")</script>';
			return false;
		}

		if(empty($Find))
		{
			echo '<script>alert("Please Enter Find value")</script>';
		}
		if(empty($change))
		{
			echo '<script>alert("Please Enter change value")</script>';
		}

		$replace_res = str_replace($Find,$change,$Input);
		//echo $replace_res;
	}
//index
	if(isset($_POST['Index']))
	{
		$Index = $_POST['Index_btn'];
		$Input = $_POST['Input'];

		if(empty($Input))
		{
			echo '<script>alert("Please Enter Input")</script>';
		}
		if(empty($Index))
		{
			echo '<script>alert("Enter any One Charecter!")</script>';
		}
		$index_res =strpos($Input, $Index);
		//echo $index_res;
	}
//COUNT
	if(isset($_POST['Count']))
	{
		$Input = $_POST['Input'];
		if(empty($Input))
		{
			echo '<script>alert("Please Enter Input")</script>';
		}
		$count_res = strlen($Input);
		//echo $count_res;
	}
//UPPER
	if(isset($_POST['Upper']))
	{
		$Input = $_POST['Input'];
		if(empty($Input))
		{
			echo '<script>alert("Please Enter Input")</script>';
		}
		$upper_res = strtoupper($Input);
		//echo $upper_res;
	}
//lower
	if(isset($_POST['Lower']))
	{
		$Input = $_POST['Input'];
		if(empty($Input))
		{
			echo '<script>alert("Please Enter Input")</script>';
		}
		$lower_res = strtolower($Input);
		//echo $lower_res;
	}
//reverse
	if(isset($_POST['Reverse']))
	{
		$Input = $_POST['Input'];
		if(empty($Input))
		{
			echo '<script>alert("Please Enter Input")</script>';
		}
		$reverse_res = strrev($Input);
		//echo $reverse_res;
	}
?><!DOCTYPE html>
<html>
<head>
	<title>String Function</title>
</head>
<body>
	<h1 align="center" >Function</h1>
	<form method="POST" action="#">
		<table align="center">
			<tr>
				<td>Input</td>
				<td><input type="text" name="Input"></td>
			</tr>
			
			<tr>
				<td>Find</td>
				<td><input type="text" name="Find" ></td>
			</tr>
			<tr>
				<td>Replace</td>
				<td><input type="text" name="change" ></td>
			</tr>
			<tr>
				<td>Index</td>
				<td><input type="text" name="Index_btn" ></td>
			</tr>
			<tr>
	 			<td ><input type="submit"  name="Replace" value ="Replace" ></td> 
	 			<td ><input type="text" value="<?php echo $replace_res; ?>" ></td> 
			</tr>
			<tr>
	 			<td ><input type="submit"  value ="Index" ></td> 
	 			<td ><input type="text" value="<?php echo $index_res; ?>" ></td> 
			</tr>
			<tr>
				<td ><input type="submit" name="Count" value="Count" ></td>
				<td ><input type="text"  value="<?php echo $count_res; ?>"></td> 
			</tr>
			<tr>
				<td ><input type="submit" name="Upper" value="Upper"></td>
				<td ><input type="text"  value="<?php echo $upper_res; ?>" ></td> 
			</tr>
			<tr>
				<td ><input type="submit" name="Lower" value="Lower"></td>
				<td ><input type="text"  value="<?php echo $lower_res; ?>" ></td> 
			</tr>
			<tr>
				<td ><input type="submit" name ="Reverse" value="Reverse"></td>
				<td ><input type="text"  value="<?php echo $reverse_res; ?>"></td> 
			</tr>
		</table>
	</form>
</body>
</html>