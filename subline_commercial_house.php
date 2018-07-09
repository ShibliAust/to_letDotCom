<!-- Create Commercial Space Page -->
<!-- top, right, bottom, left //-->

<html>
	<head>
	
			<style>
		
		  body{
		background-color:#1F2739;
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
			.container
			{   
				margin-left:330px;
				background-color:#1F2739;
				width: 660px;
				height: 700px;
				padding-top:30px;
			}
			
			#category_ul
			{
				background-color:gray;
			}
			#create_commercial_space_box
			{
				
				background-color:white;
				height:600px;
				width:auto;
				padding-left: 10px;
				padding-right:50px;
				padding-top:10px;				
			}
			input{
					float:right;
			}
			textarea{
				float:right;
			}
			pre
			{
				font-family:Georgia;
				font-size:15px;
				padding-left:110px;
			}
			
			#footer
			{
				background-color:black;
				width:100%;
				height:80px;
				background:url(../images/header-pattern.gif) 50% 0 #1d1d1d;
			}
			
			
		</style>
		
	</head>
	
	<body>
			
<header>
    <div class="logo">
      <h1><a href="#"><strong>To</strong>_Let</a></h1>
    </div>
	
	<img src="phone.png" alt="No Image" style="width:20px;height:20px;padding-left:980px "><font size="3" color="white">01687842121
    <img src="email.png" alt="No Image" style="width:20px;height:20px;"> tolet_bd@gmail.com		
	<font color="black">
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	<input type="SUBMIT" name = "Log_out" value="Sign Out" style="margin-left:1200px;font-size:20px;font-family:Georgia;color:black;background-color:Lightgrey;float:middle; height:30px; width:90px;border-radius:10px;border: none;" ></input>
	</form>
	
	<?php
	
			if( isset($_POST['Log_out'] )){
				?>
				<script type="text/javascript">  
				window.location.href = "http://localhost:8080/Cover_page.php";
				</script> 
				<?php
				exit();
			}
	
	?>
	
    <nav>
    <ul>
			<li><a href="http://localhost:8080/subline.php">Home</a></li>
			<li><a href="http://localhost:8080/About_us.php">About Us</a></li>
			<li><a href="http://localhost:8080/Contact_us.php">Contact Us</a></li>
			<li><a href="http://localhost:8080/terms_and_conditions.php">Terms & Conditions</a></li>

	</ul>
    </nav>
	
</header>

		
		<div class="container">
			
			<ul id="category_ul">
				<p style="font-size:30px;color:white;text-align:center;">Create Commercial Space</p>
			</ul>
			
			<div id="create_commercial_space_box">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<pre>Title/Heading<input name="title" type="text" size="50" style="height:30px"></pre>
					<pre>Catagory	           <select name = "cat">
				  						<option value="Office">Office</option>
										 <option value="Shop">Shop</option>
										 <option value="Garage">Garage</option>
										 
									</select></pre>
					<pre>Division<input name="division" type="text"size="50"style="height:30px"></pre>
					<pre>District<input name="district" type="text"size="50"style="height:30px"></pre>
					<pre>Address<input name="address" type="text"size="50"style="height:30px"></pre>
					<pre>Rent<input name="rent" type="number_format"size="50"style="height:30px"></pre>
					<pre style="padding-left:215px;font-size:12px;"><b><i>Enter rent amount or Keep blank to show "Negotiable".</i></b></pre>
					<pre>Size<input name="size" type="number_format"size="50"style="height:30px"></pre>
					<pre>Description<textarea name = "description" rows="4" cols="52"></textarea></pre>
					<br></br>
					
					<pre>Contact No.<input name="contact" type="number_format"size="50"style="height:30px"></pre>
					<br></br>
					<button type="SUBMIT" name = "sub" value="SUBMIT" style="font-size:20px;font-family:Georgia;color:white;background-color:black;float:right; height:50px; width:90px;border-radius:10px;border: none;" >Submit</button>
			
				</form>

				<?php
					function test_input($data) {
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}
					
					
					function yes_no($data)
					{
						if( strcmp($data,"Yes") == 0 ||strcmp($data,"No") == 0 )return true;
						else return false;
					}

					$curdate = date('Y-m-d');

					if( isset($_POST['sub'] )){

						

						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "test";

						$conn = new mysqli($servername, $username, $password, $dbname);

						if ($conn->connect_error) {
	    					die("Connection failed: " . $conn->connect_error);
						}else{

							$title = "";
							$Division = "";
							$District = "";
							$Address = "";
							$Rent = "";
							$Size = "";
							$Description = "";
							$Category = "";
							$Contact = "";

							$title = $_POST["title"];
							$cat = $_POST["cat"];
							$Division = $_POST["division"];
							$District = $_POST["district"];
							$Address = $_POST["address"];
							$Rent = $_POST["rent"];
							$Size = $_POST["size"];
							$Description = $_POST["description"];
							
							$Contact= $_POST["contact"];
							
							$title = test_input($title);
							$Division = test_input($Division);
							$District = test_input($District);
							$Address = test_input($Address);
							$Rent = test_input($Rent);
							$Size = test_input($Size);
							$Description = test_input($Description);
							$Contact = test_input($Contact);

							$sql = "INSERT INTO commercial_space (Title, Catagory, Division,District, Address, Rent, Size,Description, Contact_No, curdate  )

									VALUES ( '$title' , '$cat', '$Division' , '$District', '$Address', '$Rent',      '$Size', '$Description',  '$Contact', '$curdate'  )";

							if ($conn->query($sql) == TRUE) {
    							echo "New record created successfully";
    						}else{
    							echo"opsss error";
    						}

						}

					}
					
					#echo $curdate;


				?>


			</div>
			
			
			
		</div>
		
		<div id="footer">
		<p style="font-size:20px;color:white;text-align:center;padding-top:28px;">Copyright &copy; - Site maintained by To_Let.com</p>
</div>

		
	

	</body>

</html>