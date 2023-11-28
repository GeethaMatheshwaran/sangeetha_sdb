<?php 
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
	<title>Category_display</title>
	<style type="text/css">
		#button
	    {
	     margin-right: 900px;
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
        <h5  class="modal-title" id="exampleModalLabel">Category Creation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
	      <div class="modal-body">
	      <div class="mb-3">
	        <label>Category</label>
	        <input type="text" id="Category" name="Category" class="form-control"  placeholder="Enter Category Name">
	        </div>
	        <div class="mb-3">
	        <label>Description</label>
	        <input type="text" id="Description" name="Description" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Status</label>
	        <input type="text" id="Status" name="Status"class="form-control">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" onclick="Category_add()"  class="btn btn-primary">Submit</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>
    </div>
  </div>
</div>

<div class="container my-3">
	<center><h3><?php echo "welcome to ".$_SESSION['Username'] ?></h3></center>
	<button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#completeModal" id="button">Add</button><br><br>
	<div class="container my-5" id="displayDataTable"></div>
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
	        <label>Category</label>
	        <input type="text" id="update_CategoryName" name="update_CategoryName" class="form-control"  placeholder="Update Name">
	        </div>
	        <div class="mb-3">
	        <label>Description</label>
	        <input type="text" id="update_Description" name="update_Description" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Status</label>
	        <input type="text" id="update_Status" name="update_Status"class="form-control">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function()
{
	Category_display();	
});

function Category_display()
{
	var displayData = "true";
	$.ajax({
		url : "Category_display.php",
		type : 'POST',
		data : {
			displaySend : displayData
		},
		success : function(data,status){
			$('#displayDataTable').html(data);
		}
	});
}

function Category_add()
{
	var Category1 = $('#Category').val();
	var Description1 = $('#Description').val();
	var Status1 = $('#Status').val();
	$.ajax({
		url : "category_insert.php",
		type : 'POST',
		data : {
			temp_category : Category1,
			temp_description : Description1,
			temp_status : Status1
		},
		success: function (data,status)
		{
		// alert(Category1);
  //   	alert("Data: " + data + "\nStatus: " + status);
    	//$('#completeModal').modal('hide');
    	//Category_display();
    	window.location.reload();
		}
	});
}

function delete_function(deleteid){
	$.ajax({
		url : "category_delete.php",
		type : 'POST',
		data : {
			deleteid : deleteid
		},
		success: function (data,status)
		{
			// alert("Data: " + data + "\nStatus: " + status);

    	Category_display();
		}
	});
}

function update_details(id)
{
	$('#hiddenData').val(id);
	
	$.post("category_update.php",{id:id},function(data,status){
		
		var temp = JSON.parse(data);
		$('#update_CategoryName').val(temp.Category);
		$('#update_Description').val(temp.Description);
		$('#update_Status').val(temp.Status);

	});
}
function update_function()
{
	var update_CategoryName = $('#update_CategoryName').val();
	var update_Description = $('#update_Description').val();
	var update_Status = $('#update_Status').val();
	var hiddenData = $('#hiddenData').val();

	$.post("category_update.php",{
		update_CategoryName : update_CategoryName,
		update_Description : update_Description ,
		update_Status : update_Status,
		hiddenData : hiddenData
	},function(data,status)
	{
		// alert(data);
		// $('#updateModal').modal('hide');
		//$('#updateModal').css('display','none');
		window.location.reload();
		//Category_display();
	})
}
</script>
</body>
</html>