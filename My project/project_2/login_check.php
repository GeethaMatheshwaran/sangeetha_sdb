<?php
include "login_page.php";

$Username = mysqli_real_escape_string($con,$_POST['Username']);
$Password = mysqli_real_escape_string($con,$_POST['Password']);

if ($Username != "" && $Password != ""){

    $sql_query = "select count(*) as cntUser from validation where Username='".$Username."' and Password='".$Password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['Username'] = $Username;
        echo 1;
    }else{
        echo 0;
    }
}
