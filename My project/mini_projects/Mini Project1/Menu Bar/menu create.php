<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet">
    <title>user page</title>
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
    	*
    	{
    		margin :0;
    		padding: 0;
    		outline: none;
    		border:none;
    		text-decoration: none;
    		box-sizing: border-box;
    		font-family: "poppins",sans-serif;
    	}
    	body
    	{
    		background: #FFF0F5;
    	}
    	.container
    	{
    		display: flex;
    	}
    	nav
    	{
    		position: relative;
    		top: 0;
    		bottom: 0;
    		height: 100vh;
    		left: 0;
    		background:white ;
    		width: 280px;
    		overflow: hidden;
    		box-shadow: 0 40px 55px rgba(0,0,0,0.1);
    	}
    	.logo
    	{
    		text-align: center;
    		display: flex;
    		margin:20px 0 0 10px;
    	}
    	.logo img
    	{
    		width: 65px;
    		height: 65px;
    		border-radius: 50%;
    	}
    	.logo span
    	{
    		font-weight: bold;
    		padding-left: 15px;
        padding-bottom: 10%;
    		font-size: 18px;
    		text-transform: uppercase;
    	}
    	a
    	{
    		position: relative;
    		font-size: 16px;
    		display: table;
    		width: 280px;
    		padding: 20px;
    	}
    	.nav-item
    	{
    		position: relative;
    		top: 5px:;
    		margin-left: 10px;
    	}
    	a:hover
    	{
    		background: #EE82EE;
    	}
    	.logout
    	{
    		position: absolute;
    		bottom: 0;
    	}
    </style>
  </head>
  <body>
  	<DIV class="container">
	<nav>
  		<ul>
  			<li>
          <a href="#"class="logo"><img src="download.jpg"	alt="">
          <span class="nav-item">Welcome</span></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-list-alt"></i>
          <span class="nav-item">DashBoard</span>
        </a>
        </li>
  			<li>
          <a href="#">
          <i class="fa fa-list-alt"></i>
  				<span class="nav-item">Catagery</span></a>
        </li>
  			<li>
          <a href="#"><i class="fa fa-list-alt"></i>
  				<span class="nav-item">Items</span>
  			</a>
        </li>
  			<li>
          <a href="#"><i class="fa fa-list-alt"></i>
  				<span class="nav-item">Sales</span></a>
        </li>
  			<li>
          <a href="#" class="logout"><i class="fa fa-sign-out"></i>
  			  <span class="nav-item">logout</span></a>
        </li>		 		
  		</ul>
  	</nav>
  	</DIV>
  	
  </body>