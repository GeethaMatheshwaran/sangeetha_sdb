<!DOCTYPE html>
<html>
<head>
	<title>Image_Slider</title>
	<style >
        .resize
        {
          height: 380px;
          width: 600px;
        }
        *
		{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body
		{
/*			background-image:url("../images/img2.jpg");
*/			background-size: cover; 
			background-position: center; 
			font-family: sans-serif;		
		}
		.menu
		{
			background: green;  /*rectangle box create*/
			text-align: center; /* text center -one bye one*/
		}
		.menu ul
		{
			display: inline-flex; /* straight line */
			list-style: none;  /* remove the list(eg.dot) - .Home.About => HomeAbout*/
			color: white; /* font color change*/
		}
		.menu ul li
		{
			width: 120px; /*Home About*/
			margin: 15px; /*rectangle size increasing*/
			padding : 10px;
		}
    </style>
    
</head>
	
<body align = "center">
	<div class="menu">
		<ul>
		<li>Home</li>
		<li>About Us</li>
		<li>Services</li>
		<li>Clients</li>
		<li>Investors</li>
		<li>Review</li>
		</ul>
	</div>
</body>
</html>
<?php
	$slideimg = ["../images/img1.jpg",
                    "../images/img2.jpg",
                    "../images/img3.jpg",
                    "../images/img4.jpg",
                    "../images/img5.jpg",
                    "../images/img6.jpg",
                    "../images/img7.jpg"];
    $i = 0;
    function fun($slideimg,$i)
    {
    	echo '<br><br>';
    	echo "<img src = '$slideimg[$i]' class='img-responsive resize' />";
    	      		sleep(200);


    }
    for ($i=0; $i < count($slideimg); $i++) 
    { 

    	if($i == count($slideimg))
      	{
        	$i = 0;
      	}
      	else
      	{
      		fun($slideimg,$i);
      		//setTimeout("fun()",1000);

      	}

    }
?>