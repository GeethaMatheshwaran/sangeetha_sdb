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
  $updateid=$_GET['updateid'];

  // echo "$updateid";
  $sql = "SELECT * FROM sales1 WHERE Id=$updateid";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);

  $Item = $row['Item'];
  $Quantity = $row['Quantity'];
  $Price = $row['Price'];
  $Discount = $row['Discount'];
  $Total = $row['Total'];

  if(isset($_POST['submit']))
  {
    $Item = $_POST['Item'];
    $Quantity = $_POST['Quantity'];
    $Price = $_POST['Price'];
    $Discount = $_POST['Discount'];
    $Total = $_POST['Total'];

    $sql = "UPDATE sales1 set Id='$updateid',Item ='$Item',Quantity ='$Quantity',Price ='$Price',Discount ='$Discount' ,Total='$Total' where Id='$updateid' ";
    $result = mysqli_query($con,$sql); //link
    if($result)
    {
      //echo "success";
      header('location:sales_display.php');
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
    <script type="text/javascript" src="grtprice.js"></script>
    <title>Sales</title>
  </head>
  <body>
     <h2 align="center" class="my-3">Sales</h2>
    <DIV class ="container my-5">
        <form method="post" action="#">
          <div>
          <label>Items</label>
          <select class="form-control"  id="Item" onchange="fun()" class="mb-3" name="Item" >
          <option value="">Select Item</option>
          <?php
            include 'connection.php';
            $sql = "SELECT * FROM items1";
            $result = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($result))
            {
              $k = $row['Item'];
              echo '<option value="'.$k.'">'.$k.'</option>' ;
            }
          ?>
          </select>
        </div>
        <div class="mb-3">
        <label>Quantity</label>
        <input type="number" id="Quantity"  onchange="getTotalPrice()" name="Quantity" class="form-control">
        </div>
        <div class="mb-3">
        <label>Price</label>
        <input type="text"  id="Price"  name="Price" class="form-control">
        </div>
        <div class="mb-3">
        <label>Discount</label>
        <input type="text" id="Discount"  name="Discount" class="form-control">
        </div>
        <div class="mb-3">
        <label>Total</label>
        <input type="text"  id="Total" name="Total" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type="text/javascript">
     function fun()
    {
      var Item = document.getElementById("Item").value;
      
      $.ajax({
        url:"fetch_price.php",
        method :"POST",
        data :{
          temp :Item
        },
        dataType : "JSON",
        success : function(data)
        {
        var dis = data.Price-5;
        document.getElementById("Price").value = data.Price;
        document.getElementById("Discount").value = dis;
        }
      })
    }
    function getTotalPrice()
    {
      var user_qty =document.getElementById("Quantity").value;
      var Item = document.getElementById("Item").value;
      $.ajax({
        url:"fetch_price.php",
        method :"POST",
        data :{
          temp :Item
        },
        dataType : "JSON",
        success : function(data)
        {
          var dis = data.Price-5;
          var Total = user_qty * dis;
          var stock_qty = data.Quantity;
          // alert("user qty : "+user_qty);
          // alert("Stock : "+stock_qty);
          if(user_qty < stock_qty)
          {
            document.getElementById("Total").value = Total;
          }
          else
          {
            alert("HIGH");
          }
        }
      })
      
    }
   </script>
</html>
</div>