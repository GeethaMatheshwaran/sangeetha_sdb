<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
else
?>
<?php
include 'connection.php';
if(isset($_POST['id']))
{
  $id = $_POST['id'];

  $sql = "SELECT * FROM sales2 WHERE Id=$id";
    $result = mysqli_query($con,$sql);
    $response = array();
    while($row = mysqli_fetch_assoc($result))
    {
      $response = $row;
    }
    echo json_encode($response);
}
else
{
  $response['status'] = 200;
  $response['message'] = "not update";
}

//update query
if(isset($_POST['hiddenData']))
  {
    $hiddenData = $_POST['hiddenData'];
    $Item = $_POST['update_ItemName'];
    $Price = $_POST['update_Price'];
    $Quantity = $_POST['update_Quantity'];
    $Discount = $_POST['update_Discount'];
    $Total = $_POST['update_Total'];
    

    $sql = "UPDATE sales2 set Id='$hiddenData',Item = '$Item', Price = '$Price',Quantity = '$Quantity',Discount ='$Discount',Total ='$Total' where Id='$hiddenData' ";
    
    $result = mysqli_query($con,$sql); //link

}
?>