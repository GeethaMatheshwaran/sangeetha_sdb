<?php
  include 'connect.php';

  $updateid=$_GET['updateid'];

  $sql = "SELECT * FROM veg WHERE S_NO=$updateid";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $name = $row['NAME'];
  $price = $row['PRICE'];

  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "update veg set S_NO='$updateid',NAME ='$name',PRICE ='$price' where S_NO='$updateid' ";
    $result = mysqli_query($con,$sql); //link
    if($result)
    {
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
       <!--  <div class="mb-3">
          <label>S.No</label>
          <input type="text" name="no" class="form-control">   
        </div> -->
        <div class="mb-3">
          <label>Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter Product Name"  value="<?php echo $name; ?>">
        </div>
        <div class="mb-3">
          <label>Price</label>
          <input type="text" name="price" class="form-control" placeholder="Enter Product Price" value="<?php echo $price; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Update</button>
        </form>
    </DIV>
  </body>
</html>