<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

	<title>Display</title>

</head>
<body>
	<div class="container">
	<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
	<table class="table">
  	<thead>
    <tr>
      	<th scope="col">S.No</th>
      	<th scope="col">Name</th>
      	<th scope="col">Price</th>
      	<th scope="col">Operations</th>
    </tr>
  	</thead>

	<tbody>
  	<?php
        $sql = "SELECT * FROM veg";
      	$result = mysqli_query($con,$sql);
      	if ($result) 
  		  {
        	while ($row = mysqli_fetch_assoc($result))  //($row = $result->fetch_assoc())
        	{
            $no = $row['S_NO'];
            $name = $row['NAME'];
            $price = $row['PRICE'];
        	echo '<tr>
              	<td>'.$no.'</td>
              	<td>'.$name.'</td>
              	<td>'.$price.'</td>
              	<td>
        				<button class="btn btn-success"><a href="update.php? updateid='.$no.'" class="text-light">Update</a></button>
        				<button class="btn btn-danger "><a href= "delete.php? deleteid='.$no.'" class="text-light">Delete</a>
                </button>
              	</td>
              	</tr>';
            }
        }
    ?>
  	</tbody>
	</table>
	</div>
</body>
</html>