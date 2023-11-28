<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
?>

<?php
include 'menu_bar.php';?>
<div class="wrapper">
<?php
  include 'connection.php';
  $u_id = $_GET['u_id'];

  $sql = "SELECT * FROM category1 WHERE Id=$u_id";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);

  $Category = $row['Category'];
  $Description = $row['Description'];
  $Status = $row['Status'];

  if(isset($_POST['submit']))
  {
    $u_id = $_GET['u_id'];
    $Category = $_POST['Category'];
    $Status = $_POST['Status'];
    $Description = $_POST['Description'];

    $sql = "UPDATE category1 set Id='$u_id',Category ='$Category',Description ='$Description',Status ='$Status' where Id='$u_id' ";
    $result = mysqli_query($con,$sql); //link
    if($result)
    {
      //echo("update success");
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

    <title>Category Update</title>
  </head>
  <body>
    <h2 align="center" class="my-3">Category Update</h2>
    <DIV class ="container my-5">
        <form method="post" action="#">
        <div class="mb-3">
          <label>Category</label>
          <input type="text" name="Category"required="" value="<?php echo $Category; ?>" class="form-control" placeholder="Enter Category Name">
        </div>
        <div class="mb-3">
        <label>Description</label>
        <input type="text" name="Description"required=""  value="<?php echo $Description; ?>" class="form-control">
        </div>
        <div class="mb-3">
        <label>Status</label>
        <input type="text" name="Status"required="" value="<?php echo $Status; ?>" class="form-control">
        </div>
        <button type="submit" name="submit"required="" class="btn btn-primary">Update</button>
        </form>
    </DIV>
  </body>
</html>
</div>