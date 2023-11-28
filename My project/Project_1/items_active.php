<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
?>

<?php 
include 'connection.php';
$Id= $_GET['Id'];
$Status = $_GET['Status'];
$sql = "update items1 set Status=$Status where Id=$Id";
$result = mysqli_query($con,$sql); //link
    if($result)
    {
      header('location:item_display.php');
    }
    else
    {
      die(mysqli_error($con)); 
    }
?>