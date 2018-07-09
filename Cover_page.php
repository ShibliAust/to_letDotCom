<!DOCTYPE html>
<html>

<head>

<title>Cover Page</title>

<style>
.mySlides {display:none;}

body{
		background-color: black;
		font-family:Arial, Helvetica, sans-serif;
		font-size:100%;
		line-height:1.125em;
	}
	
header {
	height:110px;
	overflow:hidden;
	border-bottom:2px solid #2a2a2a;
	background:url(../images/header-pattern.gif) 50% 0 #1d1d1d;
}


 header .logo {
	position:absolute;
	left:45px;
	top:30px;
	background:url(../images/logo.png) no-repeat 0 0;
	padding:10px 0 0 20px;
}
header .logo h1 {
	font-size:38px;
	line-height:1.2em;
	color:#c3c3c3;
	font-weight:normal;
	font-style:italic;
	letter-spacing:-1px;
}
header .logo h1 a {
	color:#c3c3c3;
	text-decoration:none;
}
header .logo h1 a strong {
	color:#fff;
}
header nav {
	position:absolute;
	right:25px;
	top:77px;
}
header nav ul li {
	float:left;
	padding-left:6px;
}
header nav ul li a {
	float:left;
	color:#fff;
	text-decoration:none;
	width:180px;
	text-align:center;
	line-height:31px;
	font-size:14px;
}
	
header nav ul li a:hover, header nav ul li a.current {
	background:url(../images/nav-bg.gif) 0 0 repeat-x;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
}



a {
	color:#c0c0c0;
	outline:none;
}
a:hover {
	text-decoration:none;
}


ul{
		list-style-type: none;
		margin: 0;
		overflow: hidden;
		background-color: #333333;
	}
			
#footer
		{
			background:url(../images/header-pattern.gif) 50% 0 #1d1d1d;
			width:100%;
			height:80px;
			
		}
		
</style>

</head>

<body>

<header>
    <div class="logo">
      <h1><a href="#"><strong>To</strong>_Let</a></h1>
    </div>
	
    <nav>
      <ul>
        <li><a href="http://localhost:8080/Sign_in.php">Sign In</a></li>
        <li><a href="http://localhost:8080/register.php">Sign Up</a></li> 
      </ul>
    </nav>
	
</header>

<div>
  <img class="mySlides" src="ap1.jpg" style="width:100%">
  <img class="mySlides" src="ap2.jpg" style="width:100%">
  <img class="mySlides" src="ap3.jpg" style="width:100%">
  <img class="mySlides" src="ap4.jpg" style="width:100%">
</div>

<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
		   x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 5000); // Change image every 2 seconds
	}
</script>


<div id="footer">
				<p style="font-size:20px;color:white;text-align:center;">@Copyright Notice Here - Site maintained by Swapnil Biswas and Shahariar Shibli</p>
</div>

</body>
</html>
