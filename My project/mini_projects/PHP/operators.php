<?php
	if(isset($_POST['Submit']))
	{
		$A = $_POST['A'];
		$B = $_POST['B'];
		$add = $A + $B;
		$sub = $A - $B;
		$mul = $A * $B;
		$div = $A / $B;

		if(( empty($A) || empty($B) ) || ( empty($A) && empty($B) ))
		{
			echo '<script>alert("Empty value cant be accepted")</script>';
			return false;
		}
		//echo "Addition = "."$add" . "<br>"."Subtraction =  " . "$sub" ."<br>". "Multiplication =  " . "$mul" ."<br>".  "Division =  " . "$div";
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Operators</title>
</head>
<body>
	<h1 style="color: purple;" align="center">Operators</h1>
	<form method="POST" action="#">
		<table align="center">
			<tr>
				<td>A</td>
				<td><input type="text" name="A"></td>
			</tr>
			<tr>
				<td>B</td>
				<td><input type="text" name="B"></td>
			</tr>
			<tr>
				<td>Addition</td>
				<td><input type="text" name="add" value="<?php echo $add; ?>"></td>
			</tr>
			<tr>
				<td>Subtraction</td>
				<td><input type="text" name="sub" value="<?php echo $sub; ?>"></td>
			</tr>
			<tr>
				<td>Multiplication</td>
				<td><input type="text" name="mul" value="<?php echo $mul; ?>"></td>
			</tr>
			<tr>
				<td>Division</td>
				<td><input type="text" name="div" value="<?php echo $div; ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="Submit" name ="Submit" value="Click Here!"></td>
			</tr>
		</table><br>
	</form>
</body>
</html>