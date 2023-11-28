 $sql = "SELECT * FROM items1";
      	$result = mysqli_query($con,$sql);
        $num = mysqli_num_rows($result);
        $n_page=3;
        $t_page=ceil($num/$n_page);
        // echo $t_page;
        for($btn=1 ; $btn<=$t_page ; $btn++)
        {
          echo '<button class="btn btn-dark mx-1 mb-3" ><a href="item_display.php? page='.$btn.' " class="text-light">'.$btn.'</a></button>';
        }
        if(isset($_GET['page']))
        {
          $page=$_GET['page'];
        }
        else
        {
          $page=1;
        }
        $start_lmt=($page-1)*$n_page;
        $sql = "SELECT * FROM items1 limit " .$start_lmt.','.$n_page;
        $result =$result = mysqli_query($con,$sql); 
        while ($row = mysqli_fetch_assoc($result))  //($row = $result->fetch_assoc())
        	{ ?>
        	 <tr>