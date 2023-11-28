<!DOCTYPE html>
<html>
<head>
	<title>CHECK_SELECT</title>
</head>
<body>
	<form method="post" action="function.php">
		<table align="center">
			<h2 align="center">CHECK BOX & SELECT BOX</h2>
			<tr>
				<td>Languages</td>
				<td><input type="checkbox" name="Languages[]" value="C">C
					<input type="checkbox" name="Languages[]" value="C++">C++
				    <input type="checkbox" name="Languages[]" value="Python">Python
					<input type="checkbox" name="Languages[]" value="Null">Null</td>
			</tr>
			<tr>
				<td>Department</td>
				<td><select name="Dept1">
				    <option value="">SELECT</option>
				    <option value="ECE">ECE</option>
				    <option value="EEE">EEE</option>
				    <option value="MECH">MECH</option>
				    <option value="IT">IT</option>
				    <option value="CIVIL">CIVIL</option>
					</select></td>
			</tr>
			<tr>
				<td colspan="2"align="center"><input type="submit" value="Click Here!" name="output"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['output']))
{
	if(empty($_POST['Languages']))
	{
		echo '<script>alert("You Must select any one Language!")</script>';
	}
	
	if(($_POST['Dept1'])=="")
	{
		echo '<script>alert("You Must select any one Department!")</script>';
	}
}
?>