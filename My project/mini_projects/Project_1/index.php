<?php
session_start();

include 'connection.php';
if(isset($_POST['btn']))
{
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
        $sql = "select * from validation where Username='$Username' and Password = '$Password' ";
        $result = mysqli_query($con,$sql); //link
        $result_check = mysqli_num_rows($result);
        if($result_check > 0)
        {
            $_SESSION['Username'] = $_POST['Username'];
            header('location: main_page.php');
        }
        else
        {
            echo '<script>alert("Username or Password Incorrect!")</script>';
        }
}
?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>user login</title>
    <style type="text/css">
    	*
    	{
    		margin: 0;
    		padding: 0;
    		box-sizing: border-box;
    	}
    	body
    	{
    		min-height: 100vh;
    		background :#eee;
    		display: flex;
    		font font-family: sans-serif;
    	}
    	.container
    	{
    		margin: auto;
    		width: 500px;
    		max-width: 90%;
    	}
    	.container form
    	{
    		width: 100%;
    		height: 80%;
    		padding: 20px;
    		background: #87CEEB;
    		border-radius: 3px;
    		box-shadow: 0 8px 16px rgba(0,0,0,.3);
    	}
    	.container form h1
    	{
    		text-align: center;
    		margin-bottom: 24px;
    		color: #222;
    	}
    	.container form .form-control
    	{
    		width: 100%;
    		height: 40px;
    		background: white;
    		border-radius: 4px;
    		border :1px solid silver;
    		margin: 10px 0 18px 0 ;
    		padding: 0 10px;
    	}
    	.container form .btn
    	{
    		margin-left: 50%;
    		transform: translateX(-50%);
    		width:120px;
    		height: 34px;
    		border :none;
    		outline: none;
    		background: green;
    		cursor: pointer;
    		font-size: 16px;
    		text-transform: uppercase;
    		color: white;
    		border-radius: 4px;
    		transition: .3s;
    	}
    	.container form .btn:hover
    	{
    		opacity: .7;
    	}
    </style>
</head>
<body>
	<div class="container my-5">
        <form method="post" action="#">
        <h1>User Login</h1>
        
        <div class="form-group">
          <label>User Name</label>
          <input type="text" name="Username"required="" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label>Password </label>
          <input type="password"required="" name="Password" class="form-control" placeholder="Enter Password">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>