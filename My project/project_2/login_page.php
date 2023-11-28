<?php
$con = NEW mysqli("localhost","root","","sangeetha");

if(!$con)
{
    die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login_Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

    <div id="div_login">
        <h1>Login Page</h1>
        <div id="message"></div>
        <div class="mb-3">
            <input type="text" class="form-control textbox" id="Username" name="Username" placeholder="Username" />
        </div>
        <div class="mb-3"s>
            <input type="password" class="form-control textbox" id="Password" name="Password" placeholder="Password"/>
        </div>
        <div class="mb-3" >
            <input type="button" value="Submit" name="Submit" id="Submit" />
        </div>
    </div>
</div>
</body>
</html>
