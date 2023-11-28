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
	
	<title>Sales_display</title>
	<style type="text/css">
		#button
	    {
	     margin-right: 970px;
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
        <h5  class="modal-title" id="exampleModalLabel">Sales Creation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
	      <div class="modal-body">
	        <div class="mb-3">
	          <label>Item</label>
	          <select onchange="getPrice()" required="" id="Item" class="form-control">
	          <option value="">Select Item</option>
	          <?php
	            include 'connection.php';
	            $sql = "SELECT * FROM item2";
	            $result = mysqli_query($con,$sql);
	            while ($row = mysqli_fetch_assoc($result))
	            {
	              $k = $row['Item'];
	              echo '<option value="'.$k.'">'.$k.'</option>' ;
	            } ?>
	           </select>
	        </div>
	        <div class="mb-3">
	        <label>Price</label>
	        <input type="text" id="Price" disabled=""  class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Quantity</label>
	        <input type="number" onchange="getTotalPrice()" id="Quantity" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Discount</label>
	        <input type="text" id="Discount" disabled="" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Total</label>
	        <input type="text" id="Total" disabled="" class="form-control">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" onclick="sales_add()"  class="btn btn-primary">Submit</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>
    </div>
  </div>
</div>

<div class="container my-5">

<center><h3><?php echo "welcome to ".$_SESSION['Username']; ?></h3></center>	
	<button type="button" id="button" class="btn btn-primary my-5" data-toggle="modal" data-target="#completeModal">Add</button>
	<div class="container my-5" id="displayDataTable"></div>
</div>
<!-- Add model end -->

<!-- update model start -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="exampleModalLabel">Sales Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
	      <div class="modal-body">
	        <div class="mb-3">
	          <label>Item</label>
	          <select onchange="update_getPrice()" id="update_ItemName"   required="" class="form-control">
	          <option value="">Select Item</option>
	          <?php
	            include 'connection.php';
	            $sql = "SELECT * FROM item2";
	            $result = mysqli_query($con,$sql);
	            while ($row = mysqli_fetch_assoc($result))
	            {
	              $k = $row['Item'];
	              echo '<option value="'.$k.'">'.$k.'</option>' ;
	            } ?>
	           </select>
	        </div>
	        <div class="mb-3">
	        <label>Price</label>
	        <input type="text" id="update_Price" disabled=""  class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Quantity</label>
	        <input type="number" onchange="update_getTotalPrice()" required="" id="update_Quantity" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Discount</label>
	        <input type="text" id="update_Discount" disabled="" class="form-control">
	        </div>
	        <div class="mb-3">
	        <label>Total</label>
	        <input type="text" id="update_Total" disabled="" class="form-control">
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

 <!-- pagination link start -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
$(document).ready(function () 
{
    $('#example').DataTable();
});
</script>
 <!-- pagination link end -->


<script type="text/javascript">

$(document).ready(function()
{
	sales_display();	
});

function sales_display()
{
	var displayData = "true";
	$.ajax({
		url : "sales_display.php",
		type : 'POST',
		data : {
			displaySend : displayData
		},
		success : function(data,status){
			$('#displayDataTable').html(data);
		}
	});
}

function sales_add()
{
	var Item1 = $('#Item').val();
	var price1 = $('#Price').val();
	var Quantity1 = $('#Quantity').val();
	var Discount1 = $('#Discount').val();
	var Total1 = $('#Total').val();
	$.ajax({
		url : "sales_insert.php",
		type : 'POST',
		data : {
			temp_item : Item1,
			temp_price : price1,
			temp_quantity : Quantity1,
			temp_discount : Discount1,
			temp_total : Total1
		},
		success: function (data,status)
		{
		// alert(Item1);
  //   	alert("Data: " + data + "\nStatus: " + status);
    	//$('#completeModal').modal('hide');
    	window.location.reload();
    	//sales_display();
		}
	});
}
function delete_function(deleteid){
	$.ajax({
		url : "sales_delete.php",
		type : 'POST',
		data : {
			deleteid : deleteid
		},
		success: function (data,status)
		{
			// alert("Data: " + data + "\nStatus: " + status);
    	sales_display();
		}
	});
}

function update_details(id)
{
	$('#hiddenData').val(id);
	
	$.post("sales_update.php",{id:id},function(data,status){
		
		var temp = JSON.parse(data);
		$('#update_ItemName').val(temp.Item);
		$('#update_Price').val(temp.Price);
		$('#update_Quantity').val(temp.Quantity);
		$('#update_Discount').val(temp.Discount);
		$('#update_Total').val(temp.Total);

	});
}
function update_function()
{
	var update_ItemName = $('#update_ItemName').val();
	var update_Price = $('#update_Price').val();
	var update_Quantity = $('#update_Quantity').val();
	var update_Discount = $('#update_Discount').val();
	var update_Total = $('#update_Total').val();
	var hiddenData = $('#hiddenData').val();

	$.post("sales_update.php",{
		update_ItemName : update_ItemName,
		update_Price : update_Price,
		update_Quantity : update_Quantity ,
		update_Discount : update_Discount ,
		update_Total : update_Total,
		hiddenData : hiddenData
	},function(data,status)
	{
		//$('#updateModal').modal('hide');
		//$('#updateModal').css('display','none');
		window.location.reload();
		//sales_display();
	})
}
function getPrice()
{
  var user_qty =document.getElementById("Quantity").value;
  var Item = document.getElementById("Item").value;
//  var update_ItemName = $('#update_ItemName').val();
// var update_CategoryName = $('#update_CategoryName').val();
  $.ajax({
    url:"fetch_price.php",
    method :"POST",
    data :{
      temp :Item
    },
    dataType : "JSON",
    success : function(data)
    {
	    var dis = data.Price - 5 ;
	    document.getElementById("Price").value = data.Price;
	    document.getElementById("Discount").value = dis;
	    $('#completeModal').modal('hide');
    	sales_display();
    }
  })
}
function update_getPrice()
{

  var user_qty =document.getElementById("update_Quantity").value;
  var Item = document.getElementById("update_ItemName").value;
  $.ajax({
    url:"update_fetch_price.php",
    method :"POST",
    data :{
      temp :Item
    },
    dataType : "JSON",
    success : function(data)
    {
    
     	// alert("Data: " + data + "\nStatus: " + status);
	    var dis = data.Price - 5 ;
	    document.getElementById("update_Price").value = data.Price;
	    document.getElementById("update_Discount").value = dis;
	    $('#completeModal').modal('hide');
    	sales_display();
    }
  })
}
function getTotalPrice()
{
  var user_qty =parseInt(document.getElementById("Quantity").value);
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
      //alert("user qty : "+user_qty + "-  Stock : "+stock_qty);
      if(user_qty < stock_qty)
      {
        document.getElementById("Total").value = Total;
      }
      else
      {
        alert("Please Choose Below  " +stock_qty + " Kg! ");
        return false;
      }
      return true;
      $('#completeModal').modal('hide');
    	sales_display();
    }
  })
}
function update_getTotalPrice()
{
  var user_qty =document.getElementById("update_Quantity").value;
  var Item = document.getElementById("update_ItemName").value;
  $.ajax({
    url:"update_fetch_price.php",
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
      alert("user qty : "+user_qty + "-  Stock : "+stock_qty);
      if(user_qty < stock_qty)
      {
        document.getElementById("update_Total").value = Total;
      }
      else
      {
        alert("Please Choose Below  " +stock_qty + " Kg! ");
        return false;
      }
      return true;
      $('#completeModal').modal('hide');
    	sales_display();
    }
  })
}
</script>
</body>
</html>