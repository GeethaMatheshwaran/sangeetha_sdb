<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
?>

<?php
include 'menu_bar.php';
?>
<div class="wrapper">
<?php
  include 'connection.php';

  if(isset($_POST['submit']))
  {
    $Category = $_POST['Category'];
    $Status = $_POST['Status'];
    $Description = $_POST['Description'];

    $sql = "insert into category1 (Category,Description,Status) values ('$Category','$Description','$Status')";
    $result = mysqli_query($con,$sql); //link
    if($result)
    {
      header('location:category_display.php');
    }
    else
    {
      die(mysqli_error($con)); 
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Category Creation</title>
  </head>
  <body>
    <h2 align="center" class="my-3">Category Creation</h2>
    <DIV class ="container my-5">
        <form method="post" action="#">
        <div class="mb-3">
          <label>Category</label>
          <input type="text" name="Category" class="form-control" required="" placeholder="Enter Category Name">
        </div>
        <div class="mb-3">
        <label>Description</label>
        <input type="text" name="Description"required="" class="form-control">
        </div>
        <div class="mb-3">
        <label>Status</label>
        <input type="text" name="Status"required="" class="form-control">
        </div>
        <button type="submit" name="submit"required="" class="btn btn-primary">Submit</button>
        </form>
    </DIV>
  </body>
</html>
</div>