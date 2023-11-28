<!-- <?php 
session_start();
if(!isset($_SESSION['Username']))
{
  header('location:index.php');
}
else
?>
 -->
<style type="text/css">
  #outbox
  {
    margin-left: 230px;
  }
  
</style>
<?php
// include_once('menu_bar.php');
include 'connection.php';
if(isset($_POST['displaySend']))
{ ?>
<div id=outbox class="container">
<table id="tableData" class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>

  <tbody>
    <?php
    
       $sql = "SELECT * FROM category2";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result))  //($row = $result->fetch_assoc())
          {
            $Id=$row['Id'];
            $Status=$row['Status'];
           ?>
          <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['Category']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td id="status<?=$Id ?>">
                  <?php 
                  if($Status == 1)
                  {?>
                    <button type="button" class="btn btn-success" onclick="change_status(<?=$Id?>)">Active</button>
                  <?php
                  }
                  else
                  {?>
                    <button type="button" class="btn btn-danger" onclick="change_status(<?=$Id?>)">Deactive</button>
                  <?php } ?>
                </td>
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

<script type="text/javascript">
  function change_status(status_id)
  {
    $.ajax({
    url : "category_status.php",
    type : 'POST',
    data : {
      status_id : status_id
    },
    success : function(data,status){
      
      $('#status' + status_id).html(data);
    }
  });
  }
</script>
<!-- pagination link start -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

<script  type="text/javascript">
$(document).ready(function () 
{
    $('#tableData').DataTable();
});
</script>
 <!-- pagination link end -->

