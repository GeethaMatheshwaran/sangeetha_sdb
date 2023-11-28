
<!DOCTYPE html>
<html>
<head>
	<title>Age Calc</title>
</head>
<body align = "center">
	<form method="post" action="#">
		<table align="center">
			<h1 align= "center">Age Calculator</h1>
			DOB :<input type="date" name="input"><br><br>
			<input type="submit" name = "submit"  value="Click Here!"><br><br>
 			</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	//$dateOfBirth= "29-02-2020";
	$dateOfBirth = $_POST['input'];
	$today = date("Y-m-d");
	$diff = date_diff(date_create($dateOfBirth),date_create($today));

	if($dateOfBirth==null || $dateOfBirth=='' || 
	  ($dateOfBirth !='' && date_create($dateOfBirth) > date_create($today)))
	{  
      	echo '<script>alert("Choose a proper date please!")</script>';   
	}
	else
	{
		printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
	}
}

?>