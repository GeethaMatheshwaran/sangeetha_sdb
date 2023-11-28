<?php
  include 'connect.php';

  if(isset($_POST['submit']))
  {
    $no = $_POST['no'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "insert into veg (s_no,name,Price) values ('$no','$name','$price')";
    $result = mysqli_query($con,$sql); //link
    if($result)
    {
      echo '<script>alert("Data Inserted Successfully!!")</script>';
      header('location:display.php');
    }
    else
    {
      die(mysqli_error($con)); 
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>user page</title>
  </head>
  <body>
    <DIV class ="container my-5">
        <form method="post" action="#">
        <div class="mb-3">
          <label>S.No</label>
          <input type="text" name="no" class="form-control">   
        </div>
        <div class="mb-3">
          <label>Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
        </div>
        <div class="mb-3">
          <label>Price</label>
          <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </DIV>
  </body>
</html>