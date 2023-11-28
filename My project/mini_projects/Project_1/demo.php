<!-- <script type="text/javascript">
  $(document).ready(function())
  {
    $('#Category').change(function()
    {
      var id= $(this).find(':selected')[0].id;
      $.ajex
      ( {
          method : 'POST',
          url : 'fetch_product.php',
          data : {id:id},
          datatype : 'json',
          success : function(data)
          {
            alert(data.Price);
            //$('#Price').text(data.Price);
          }
        } );
    });
  }
</script>

$(document).ready(function() {
    timer = window.setTimeout(function() {
        $.ajax({
            url: '/jrt/?Id=$data.jet.id',
            method: "GET",
            cache: false,
            success: function(data) {
                //$("#gt").append(data);
                $('#gt').html(data);
                if (state == 'jr' || state == 'jt')
                {
                    window.clearTimeout(timer);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('error ' + textStatus + " " + errorThrown);
            }
        })
    }, 10000);
}); -->
nav ul 
    {
      margin: 0;
      padding: 0;
      height: 100%;
      width: 260px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #262626;
    }
    nav ul li 
    {
      list-style: none;
    }
    /*nav ul li a 
    {
      display: block;
      font-family: 'Montserrat', sans-serif;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 20px;
      color: #fff;
      position: relative;
      padding: 25px 0 25px 38px;
    }*/
    /*nav ul li a:before 
    {
      content: '';
      position: absolute;
      top: 0px;
      right: 0px;
      width: 0%;
      height: 100%;
      background: #e3e9f7;
      border-radius: 40px 0px 0px 40px;
      z-index: -1;
      transition: all 300ms ease-in-out;
    }*/
    /*nav ul li a:hover 
    {
      color: #2b2626;
    }
    nav ul li a:hover:before 
    {
      width: 95%;
    }*/
    .wrapper 
    {
      margin-left: 260px;
    }
    .section 
    {
      display: grid;
      place-items: center;
      min-height: 100vh;
      text-align: center;
    }
    .box-area h2 
    {
      text-transform: uppercase;
      font-size: 50px;
    }
    .box-area p 
    {
      line-height: 2;
    }
    .box-area 
    {
      width: 75%;
    }
    .logo
    {
      width: 100px;
      height: 150px;
      border-radius: 60%;
/*      overflow: hidden;
*/      margin: 60px auto;
    }
    .logo img
    {
      width: 65px;
        height: 65px;
        border-radius: 50%;
    }
<nav>
    <ul>
      <li class="logo"><img alt="" src="download (1).jpg"></li>
      <li>
        <a href="#"><i class="fa fa-home"></i>   DashBoard</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-book"></i>   Category</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-users"></i>   Item</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-picture-o"></i>   Sales</a>
      </li>
    </ul>
  </nav>

  nav a  /* except box - create black box_scnd half */
      {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 260px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #262626;
      }
     nav a div  /* font crt - neat box */
      {
        display: block;
        font-family: 'Montserrat', sans-serif;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 16px;
        color: #fff;
        position: relative;
        padding: 25px 0 25px 38px;
      }
      .logo
      {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        margin: 40px auto;
      }
      .logo img
      {
        width: 90px;
        height: 90px;
        border-radius: 50%;
      }

      <div>
  <nav>
    <a href="">
      <div></div>Dashboard <?php echo $page = substr($_SERVER['SCRIPT_NAME']); ?>
    </a>
    <a href="">
      <div>Category</div>
    </a>
    <a href="">
      <div>Items</div>
    </a>
    <a href="">
      <div>Sales</div>
    </a>
  </nav>
</div>
#button
    {
     margin-right: 200px;
     position:absolute;
     top:80px;
     right:0;
    }