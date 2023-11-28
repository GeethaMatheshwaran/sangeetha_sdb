<?php
if(isset($_POST['Submit']))
{
	$Input = "Hello world. It's a beautiful day";
	//$Input = $_POST['Input'];
	$Output = explode(" ", $Input);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Explode</title>
</head>
<body align= "center">
	<h1 align="center">Explode</h1>
	<form method="post" action="#">
		<table align="center">
			<tr>
				<td>Input</td>
				<td><input type="text" name="Input"></td> 	<!-- Hello world. It's a beautiful day -->

			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Click Here!"></td>
			</tr>
			<!-- <tr>
				<td>Output</td>
				<td><input type="text" value="<?php print_r($Output); ?>"></td>
			</tr> -->
		</table>
	</form>
</body>
</html>
<?php
print_r($Output);
?>