<!-- <?php

if(isset($_POST['btn']))
{
$username = $_POST['username'];
$password = $_POST['password'];

//echo $username ,$password;
$con = mysqli_connect("localhost","root","","mini_project1");
$sql = "select * from user_details where Username='$username' and Password = '$password' ";
$result = mysqli_query($con,$sql); //link
$result_check = mysqli_num_rows($result);


if($result_check > 0)
{
//header('location:"../Mini Project1/crud operation/display.php" '); //../images/img1.jpg
//header('location:send_mail.php');
//header("location:../../display.php");
	header('location: http://localhost/sangeetha/Mini%20Project1/crud%20operation/display.php');
}
else
{
	echo ("Username or Password Incorrect!");
}
}
?> -->

<?php

include '../crud operation/connect.php';
if( (isset($_POST['username'])) & (isset($_POST['password'])) )
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username))
	{
		//header("location: userpage.php? error=Email is required");
		echo '<script>alert("Username is required")</script>';
		return false;
	}
	elseif(empty($password))
	{
		//header("location: userpage.php? error=Password is required");
		echo '<script>alert("Password is required")</script>';
		return false;	}
	else
	{
		//echo "string";
		// $stmt = $con->prepare("select * from user_details where username=?")
		// $stmt -> execute($username);
		// if($stmt -> rowcount()===1)
		// {

		// }
		$con = mysqli_connect("localhost","root","","mini_project1");
		$sql = "select * from user_details where Username='$username' and Password = '$password' ";
		$result = mysqli_query($con,$sql); //link
		$result_check = mysqli_num_rows($result);
		if($result_check > 0)
		{
		//header('location:"../Mini Project1/crud operation/display.php" '); //../images/img1.jpg
		//header('location:send_mail.php');
		//header("location:../../display.php");
			header('location: http://localhost/sangeetha/Mini%20Project1/crud%20operation/display.php');
		}
		else
		{
			echo ("Username or Password Incorrect!");
		}
	}
}
?>