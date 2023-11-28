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

?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

	<title>Sales</title>

</head>
<body>
  <h2 align="center" class="my-5">Sales</h2>
	<div class="container my-5">
	<button id="button" class="btn btn-primary my-3"><a href="sales_add.php" class="text-light">Add</a></button>
	<table id="tableData" class="table">
  	<thead>
    <tr>
      	<th scope="col">Id</th>
      	<th scope="col">Item</th>
      	<th scope="col">Quantity</th>
      	<th scope="col">Price</th>
        <th scope="col">Discount</th>
        <th scope="col">Total</th>
        <th scope="col">Operation</th>
    </tr>
  	</thead>

	<tbody>
  	<?php
        $sql = "SELECT * FROM sales1";
        $result = mysqli_query($con,$sql);
        	while ($row = mysqli_fetch_assoc($result))  //($row = $result->fetch_assoc())
        	{ ?>
        	  <tr>
              	<td><?php echo $row['Id'] ?></td>
              	<td><?php echo $row['Item'] ?></td>
              	<td><?php echo $row['Quantity'] ?></td>
                <td><?php echo $row['Price'] ?></td>
                <td><?php echo $row['Discount'] ?></td>
                <td><?php echo $row['Total'] ?></td>
                <td>
                <button class="btn btn-success"><a href="sales_update.php? updateid=<?php echo $row['Id'] ?> " class="text-light">Update</a>
                </button>
                <button class="btn btn-danger"><a href= "sales_delete.php? deleteid=<?php echo $row['Id'] ?>" class="text-light">Delete</a>
                </button>
                </td>
              	</tr>
          <?php } ?>
  	</tbody>
	</table>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js" ></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('#tableData').DataTable();
});
</script>
</html>
</div>