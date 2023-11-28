<?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
else
?>
<style type="text/css">
  #outbox
  {
    margin-left: 160px;
  }
  
</style>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
</head>
<body>

</body>
</html>
<?php
include_once('menu_bar.php');

include 'connection.php';
if(isset($_POST['displaySend']))
{ ?>
<div id="outbox" class="container">
<table id="tableData" class="table my-5">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Item</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Discount</th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>
    </tr>
    </thead>

  <tbody>
    <?php
    include 'connection.php';

       $sql = "SELECT * FROM sales2";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result))  //($row = $result->fetch_assoc())
          {
            $Id=$row['Id'];
           ?>
          <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['Item']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                <td><?php echo $row['Quantity']; ?></td>
                <td><?php echo $row['Discount']; ?></td>
                <td><?php echo $row['Total']; ?></td>
                <td>
                <button class="btn btn-success" data-toggle="modal" data-target="#updateModal" onclick="update_details(<?=$Id?>)" >Update</button>
                <button class="btn btn-danger" onclick="delete_function(<?=$Id?>)" >Delete</button>
                </td>
                </tr>
           <?php } ?>
    </tbody>
  </table>
</div>
<?php } ?>
<!-- pagination link start -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
$(document).ready(function () 
{
    $('#tableData').DataTable();
});
</script>
 <!-- pagination link end -->