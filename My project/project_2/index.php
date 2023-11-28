<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>main_page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>
	<center><h1>Welcome</h1></center><br/><br/>
	<!-- Button trigger modal -->

    <form method="post" action="#">
	<div id="exampleModal" class="container">
    <div class="form-group">
      <label>User Name</label>
      <input type="text" id="Username"required="" class="form-control" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label>Password </label>
      <input type="password"required="" id="Password" class="form-control" placeholder="Enter Password">
    </div >
    <button type="button" id="login_button" class="btn btn-primary">Submit</button>
    </div>
    </form>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#login_button').click(function(){
			var Username = $('#Username').val();
			var Password = $('#Password').val();
			if(Username!="" && Password!="")
			{
				//window.location="home.php";
				$.ajax({
					url : "validate.php",
					type : 'POST',
					data : {Username : Username , Password: Password},
					success : function(data)
					{
						//alert(data);
						if(data=='No')
						{
							alert("Username or Password Incorrect");
						}
						else
						{
							$('#exampleModal').hide();
							window.location="main_page.php";
							//location.reload();
						}
					}
				})
			}
			else
			{
				alert("All Fields are Required");
			}
		});
	});
</script>