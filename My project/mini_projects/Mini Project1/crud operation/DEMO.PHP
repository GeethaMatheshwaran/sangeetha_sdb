 <?php

include 'connect.php';
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


$sql = "SELECT * FROM veg";
$result = mysqli_query($con,$sql);

if ($result) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["S_NO"]. " - Name: " . $row["NAME"]. " " . $row["PRICE"]. "<br>";
  }
}
?>

<!-- <?php
          $sql = "SELECT * FROM veg";
          $result = mysqli_query($con,$sql);

          if ($result) 
          {
            $row = mysqli_fetch_assoc($result);
            echo $row['NAME'];
            while ($row = mysqli_fetch_assoc($result))  //($row = $result->fetch_assoc())
            {
              //echo "id: " . $row["S_NO"]. " - Name: " . $row["NAME"]. " " . $row["PRICE"]. "<br>";
              $no = $row['S_NO'];
              $name = $row['NAME'];
              $price = $row['PRICE'];
            // echo '<tr>
            //       <th scope="row">'.$no.'</th>
            //       <td>'.$name.'</td>
            //       <td>'.$price.'</td>
            //       </tr>';
            }
          }

          ?> -->
