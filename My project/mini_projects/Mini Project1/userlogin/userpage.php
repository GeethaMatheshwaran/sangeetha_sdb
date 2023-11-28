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
    		width: 85%;
    		height: 100%;
    		padding: 20px;
    		background: #87CEEB; /*light purple*/
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
	<DIV class="container my-5">
        <form method="post" action="validation.php">
        <h1>User Login</h1>
        <!-- <?php if($_GET['error']){ ?>
        <div class="alert alert-danger" role="alert">
        	<?=$_GET['error']?>
		</div>
		<?php } ?> -->
        <div class="form-group">
          <label>User Name</label>
          <input type="text" name="username" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label>Password </label>
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
        </form>
    </DIV>
</body>
</html>