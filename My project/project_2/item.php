<?php 
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
}
else
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
	<title>Item_display</title>
	<style type="text/css">
		#button
	    {
	     margin-right:950px;
	     position:absolute;
	     top:30px;
	     right:0;
	    }
	    
	</style>
</head>
<body>
<!--Add Modal start-->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="exampleModalLabel">Item Creation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
	      <div class="modal-body">
	      <div class="mb-3">
	        <label>Item</label>
	        <input type="text" id="Item" class="form-control"  placeholder="Enter Item Name">
	        </div>
	        <div class="mb-3">
	          <label>Category</label>
	          <select id="Category" class="form-control">
	          <option value="">Select Item</option>
	          <?php
	            include 'connection.php';
	            $sql = "SELECT * FROM category2";
	            $result = mysqli_query($con,$sql);
	            while ($row = mysqli_fetch_assoc($result))
	            {
	              $k = $row['Category'];
	              echo '<option value="'.$k.'">'.$k.'</option>' ;
	            } ?>
	           </select>
	        </div>
	        <div class="mb-3">
	        <label>Price</label>
	        <input type="text" id="Price"  class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Quantity</label>
	        <input type="text" id="Quantity" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Description</label>
	        <input type="text" id="Description" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Status</label>
	        <input type="text" id="Status" class="form-control">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" onclick="item_add()"  class="btn btn-primary">Submit</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>
    </div>
  </div>
</div>

<div class="container my-5">
	<center><h3><?php echo "welcome to ".$_SESSION['Username']; ?></h3></center>
	<button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#completeModal" id="button">Add</button><br><br>
	<div class="container my-5"  id="displayDataTable"></div>
</div>
<!-- Add model end -->

<!-- update model start -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="exampleModalLabel">Category Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
	      <div class="modal-body">
	      <div class="mb-3">
	        <label>Item</label>
	        <input type="text" id="update_ItemName" class="form-control"  placeholder="Enter Item Name">
	        </div>
	        <div class="mb-3">
	          <label>Category</label>
	          <select id="update_CategoryName" required="" class="form-control">
	          <option value="">Select Item</option>
	          <?php
	            include 'connection.php';
	            $sql = "SELECT * FROM category2";
	            $result = mysqli_query($con,$sql);
	            while ($row = mysqli_fetch_assoc($result))
	            {
	              $k = $row['Category'];
	              echo '<option value="'.$k.'">'.$k.'</option>' ;
	            } ?>
	           </select>
	        </div>
	        <div class="mb-3">
	        <label>Price</label>
	        <input type="text" id="update_Price"  class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Quantity</label>
	        <input type="text" id="update_Quantity" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Description</label>
	        <input type="text" id="update_Description" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Status</label>
	        <input type="text" id="update_Status" class="form-control">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button"  class="btn btn-primary" onclick="update_function()" >Update</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <input type="hidden" id="hiddenData" >
	      </div>
    </div>
  </div>
</div>

<!-- update model end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

<script type="text/javascript">

$(document).ready(function()
{
	item_display();	
});

function item_display()
{
	var displayData = "true";
	$.ajax({
		url : "item_display.php",
		type : 'POST',
		data : {
			displaySend : displayData
		},
		success : function(data,status){
			$('#displayDataTable').html(data);
		}
	});
}

function item_add()
{
	var Item1 = $('#Item').val();
	var Category1 = $('#Category').val();
	var price1 = $('#Price').val();
	var Quantity1 = $('#Quantity').val();
	var Description1 = $('#Description').val();
	var Status1 = $('#Status').val();
	$.ajax({
		url : "item_insert.php",
		type : 'POST',
		data : {
			temp_item : Item1,
			temp_category : Category1,
			temp_price : price1,
			temp_quantity : Quantity1,
			temp_description : Description1,
			temp_status : Status1
		},
		success: function (data,status)
		{
    	//alert("Data: " + data + "\nStatus: " + status);
    	//$('#completeModal').modal('hide');
    	//item_display();
    	window.location.reload();
		}
	});
}

function delete_function(deleteid){
	$.ajax({
		url : "item_delete.php",
		type : 'POST',
		data : {
			deleteid : deleteid
		},
		success: function (data,status)
		{
			// alert("Data: " + data + "\nStatus: " + status);
    	item_display();
		}
	});
}

function update_details(id)
{
	$('#hiddenData').val(id);
	
	$.post("item_update.php",{id:id},function(data,status){
		
		var temp = JSON.parse(data);
		$('#update_ItemName').val(temp.Item);
		$('#update_CategoryName').val(temp.Category);
		$('#update_Price').val(temp.Price);
		$('#update_Quantity').val(temp.Quantity);
		$('#update_Description').val(temp.Description);
		$('#update_Status').val(temp.Status);

	});
}
function update_function()
{
	var update_ItemName = $('#update_ItemName').val();
	var update_CategoryName = $('#update_CategoryName').val();
	var update_Price = $('#update_Price').val();
	var update_Quantity = $('#update_Quantity').val();
	var update_Description = $('#update_Description').val();
	var update_Status = $('#update_Status').val();
	var hiddenData = $('#hiddenData').val();

	$.post("item_update.php",{
		update_ItemName : update_ItemName,
		update_CategoryName : update_CategoryName,
		update_Price : update_Price,
		update_Quantity : update_Quantity ,
		update_Description : update_Description ,
		update_Status : update_Status,
		hiddenData : hiddenData
	},function(data,status)
	{
		//$('#updateModal').css('display','none');
		//item_display();
		window.location.reload();
	})
}
</script>
</body>
</html>