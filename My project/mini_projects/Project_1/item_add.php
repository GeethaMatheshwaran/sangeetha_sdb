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

  if(isset($_POST['submit']))
  {
    $Item = $_POST['Item'];
    $Category = $_POST['Category'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Qty'];
    $Description = $_POST['Description'];
    $Status = $_POST['Status'];
    
    $sql = "insert into items1 (Item,Category,Price,Qty,Description,Status) values ('$Item','$Category','$Price','$Quantity','$Description','$Status')";
    $result = mysqli_query($con,$sql); //link
    if($result)
    {
      header('location:item_display.php');
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

    <title>Items Creation</title>
  </head>
  <body>
    <h2 align="center" class="my-3">Items Creation</h2>
    <DIV class ="container my-5">
        <form method="post" action="#">
        <div class="mb-3">
          <label>Item</label>
          <input type="text" name="Item"required="" class="form-control" placeholder="Enter Item Name">
        </div>
        <div class="mb-3">
          <label>Category</label>
          <select name="Category"required="" class="form-control">
          <option value="">Select Item</option>
          <?php
            include 'connection.php';
            $sql = "SELECT * FROM category1";
            $result = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($result))
            {
              $k = $row['Category'];
              echo '<option value="'.$k.'">'.$k.'</option>' ;
            }
          ?>
          </select>
        </div>
        <div class="mb-3">
        <label>Price</label>
        <input type="text"required="" name="Price" class="form-control">
        </div>
        <div class="mb-3">
        <label>Quantity</label>
        <input type="text"required="" name="Quantity"placeholder="Enter Kg Format" class="form-control">
        </div>
        <div class="mb-3">
        <label>Description</label>
        <input type="text"required="" name="Description" class="form-control">
        </div>
        <div class="mb-3">
        <label>Status</label>
        <input type="text"required="" name="Status" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </DIV>
  </body>
</html>
</div>