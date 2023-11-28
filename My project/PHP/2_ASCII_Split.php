<!-- <?php
if(isset($_POST['Submit']))
{
	$input = $_POST["input"];
	$len = strlen($input);
	$alpha = "";
	$num = "";
	$Spl - "";

	if(empty($input))
	{
		echo '<script>alert("Please Enter Input")</script>';
		//return false;
	}
	for($i =0 ; $i<=$len ; $i++)
	{  
		if((ord($input[$i])>=65 && ord($input[$i])<=90) || (ord($input[$i])>=97 && ord($input[$i])<=122))
		{
			$alpha .= $input[$i];

		}
		if(ord($input[$i])>=48 && ord($input[$i])<=57)
		{
			$num .= $input[$i];  
		}
		if((ord($input[$i])>=0 && ord($input[$i])<=47)  || 
		   (ord($input[$i])>=58 && ord($input[$i])<=64) || 
		   (ord($input[$i])>=91 && ord($input[$i])<=96) || 
		   (ord($input[$i])>=123 && ord($input[$i])<=126))
		{
			$Spl .= $input[$i];  
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>
	<h1 align="center" style="color: purple;">Function</h1>

	<form method="POST" action="#">
		<table align="center">
			<tr>
				<td>Enter Input</td>
				<td><input type="text" name="input"></td>
			</tr>
			<tr>
				<td>Alphabets</td>
				<td><input type="text" name="Alphabets"  value="<?php echo $alpha; ?>"></td>
 				<td>Count</td>
				<td><input type="text" value="<?php echo strlen($alpha); ?>"></td>
			</tr>
			<tr>
				<td>Numeric</td>
				<td><input type="text" name="num"  value="<?php echo $num; ?>"></td>
				<td>Count</td>
				<td><input type="text" value="<?php echo strlen($num); ?>"></td>
			</tr>
			<tr>
				<td>Spl Char</td>
				<td><input type="text" name="Spl"  value="<?php echo $Spl; ?>"></td>
				<td>Count</td>
				<td><input type="text" value="<?php echo strlen($Spl); ?>"></td>
			</tr>
			<tr>
				<td><input type="Submit" name ="Submit" value="Click Here!"></td>
			</tr>
		</table><br>
	</form>
</body>
</html>
-->

 <?php
if(isset($_POST['submit']))
{
  echo "string";  
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mail_Creation</title>
</head>
<body>
    <form method="post" action="#">
    <h1 align="center">Mail</h1>
    <table align="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Subject  </td>
            <td><textarea rows="3" name="subject" cols="21"></textarea></td>
        </tr>
        <tr>
            <td>Message  </td>
            <td><textarea  name= "message" rows="10" cols="21" placeholder="#Type......"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>