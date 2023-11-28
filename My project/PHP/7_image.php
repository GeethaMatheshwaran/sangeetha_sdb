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
	<br><br><h1 align="center">7  Wonders Of The World</h1><br><br>
    <img id="img" class="img-responsive resize" >
	<script>
    var slideimg = ["../images/img1.jpg",
                    "../images/img2.jpg",
                    "../images/img3.jpg",
                    "../images/img4.jpg",
                    "../images/img5.jpg",
                    "../images/img6.jpg",
                    "../images/img7.jpg"];
    var i = 0 ;
    var duration = 1000;

    function fun()
    {
      document.getElementById("img").src = slideimg[i];
      i++;

      if(i == slideimg.length)
      {
        i = 0;
      }
      setTimeout("fun()",duration);
    }
    fun();
	</script>
</body>
</html>
