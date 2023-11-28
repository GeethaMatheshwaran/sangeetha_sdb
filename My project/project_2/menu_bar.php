<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>Menu Bar</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

	<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	 -->	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 -->	
	<style type="text/css">
		body 
		{
			margin: 0;
			padding: 0;
			font-family: 'Montserrat', sans-serif; 
			background: #e3e9f7;
		}
		nav ul  
	    {
	      margin: 0;
	      padding: 0;
	      height: 100%;
	      width: 260px;
	      position: fixed;
	      top: 0;
	      left: 0;
	      background-color: #262626;
	    }
		 nav ul li a  /* font crt - neat box */
	    {
	      display: block;
	      font-family: 'Montserrat', sans-serif;
	      text-decoration: none;
	      text-transform: uppercase;
	      font-size: 16px;
	      color: #fff;
	      position: relative;
	      padding: 25px 0 25px 38px;
	    }
	    .wrapper 
	    {
			margin-left: 180px;
		}
		.logo
	    {
	      width: 80px;
	      height: 80px;
	      border-radius: 50%;
	      overflow: hidden;
	      margin: 40px auto;
	    }
	    .logo img
	    {
	      width: 90px;
	      height: 90px;
	      border-radius: 50%;
	    }

	    
</style>
</head>
<body>
	<div id="link">
	<nav>
		<ul>
			<li class="logo"><img alt="" src="download (1).jpg"></li>
			<li>
				<a href="dashboard.php"></i>   DashBoard</a>
			</li>
			<li>
				<a href="category.php">   Category</a>
			</li>
			<li>
				<a href="item.php">   Item</a>
			</li>
			<li>
				<a href="sales.php">   Sales</a>
			</li>
			<li id="logout">
				<a href="logout.php">Logout</a>
			</li>
		</ul>
	</nav>
	</div>
	<div id="page"></div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- <script type="text/javascript">
	jQuery(document).ready(function($){
		$("a").click(function(event)
		{
			link = $(this).attr("href");
			$.ajax({
				url : link,
			})
			.done(function(html){
				$("#page").empty().append(html);
			})
			.fail(function(){
				console.log("error");
			})
			.always(function()
			{
				console.log("complete");
			});
			return false;
		})
	})
</script> -->
