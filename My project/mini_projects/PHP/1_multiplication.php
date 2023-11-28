<!DOCTYPE html>
<html>
<body align = "center">
	<h1 style="color: green;">
			Multiplication Table
	</h1>
	<form method="POST" action="#">
		<table align="center">
			<tr>
				<td>Enter Number</td>
				<td><input type="text" name="Number"></td>
			</tr>
			<tr>
				<td>Enter Rows</td>
				<td><input type="text" name="Rows"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="Submit" name ="Submit" value="Click Here!"></td>
			</tr>
		</table><br>
	</form>
</body>
</html>
<?php
if(isset($_POST["Submit"]))
	{
		$num = $_POST["Number"];
		$Rows = $_POST["Rows"];
		if(empty($num))
		{
			echo '<script>alert("Please Enter Number")</script>';
			return false;
		}

		if(is_numeric($Number))
			true;
			else
			{
				echo '<script>alert("Please Enter valid Number")</script>';
				return false;
			}
		if(empty($Rows))
		{
			echo '<script>alert("Please Enter Rows")</script>';
			return false;
		}
		
		if(is_numeric($Rows))
			true;
			else
			{
				echo '<script>alert("Please Enter valid Rows")</script>';
				return false;
			}
		echo "<table border=1 eidth=90% align=center>";
		for($k = 1 ; $k<= $num ; $k++)
			{
				echo "<th>";
				echo "$k";
				echo "</th>";
			}
		for ($i = 1; $i <= $Rows ; $i++)
		{
			echo "<tr>";
			for ($j = 1; $j <= $num ; $j++)
			{
				echo "<td>";
				$result = $i * $j;
				echo "$i " . " * " . "$j" ." = " . "$result";
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>
