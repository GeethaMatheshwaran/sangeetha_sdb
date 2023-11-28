<?php
if(isset($_POST['Submit']))
{
	//$Input = $_POST['Input'];
	$Input =array('Hello','World!','Beautiful');
	$Output = implode(" ", $Input);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Implode</title>
</head>
<body align= "center">
	<h1 align="center">Implode</h1>
	<form method="post" action="#">
		<table align="center">
			<tr>
				<td>Input</td>
				<td><input type="text" name = "Input"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Click Here"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	print_r($Output);
?>