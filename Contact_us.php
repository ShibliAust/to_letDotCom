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
				height: 760px;
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
				<p style="font-size:30px;color:white;text-align:center;">Contact Us</p>
			</ul>
			
			<div id="create_commercial_space_box">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<pre>Name</pre>
					<input name="name" type="text" size="70" style="height:30px"><br></br>
					<pre>Email</pre>
					<input name="email" type="text"size="70"style="height:30px"><br></br>
					<pre>Contact No.</pre>
					<input name="phn" type="text"size="70"style="height:30px"><br></br>
					<pre>Subject</pre>
					<input name="subject" type="text"size="70"style="height:30px"><br></br>
					<pre>Message</pre>
					<textarea name = "msg" rows="6" cols="72"></textarea><br></br>
					<br></br><br></br>
					<button type="SUBMIT" name = "sub" value = "SUBMIT"  style="float:right;font-size:20px;font-family:Georgia;color:white;background-color:black; height:50px; width:90px;border-radius:10px;border: none;" >Submit</button>
			        <br></br>
					<pre style="padding-left:80px;font-size:12px;"><b><i>Don't create any spam message.</i></b></pre>
				</form>
			</div>


			<?php
				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				function check_email( $str ){
					if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
						return true;
					}
					return false;
				   }
					
			

				if( isset($_POST['sub'] )){

					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "test";

					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
	    				die("Connection failed: " . $conn->connect_error);
					}else{

						$name = "";
						$email = "";
						$contact = "";
						$sub = "";
						$msg = "";

						$name = $_POST["name"];
						$email = $_POST["email"];
						$contact = $_POST["phn"];
						$sub = $_POST["subject"];
						$msg = $_POST["msg"];
						
						$name = test_input($name);
						
						
						$contact = test_input($contact);
						$sub = test_input($sub);
						$msg = test_input($msg);
						
						if( check_email($email)){
						


						$sql = "INSERT INTO contact_us (Name, Email,Contact, Sub, Message )

									VALUES ( '$name' , '$email' , '$contact', '$sub', '$msg' )";

						if ($conn->query($sql) == TRUE) {
    							echo "New record created successfully";
    						}else{
    							echo"opsss error";
    						}
							
						}

					}

				}


			?>
			
			
			
		</div>
		<div id="footer">
		<p style="font-size:20px;color:white;text-align:center;padding-top:28px;">Copyright &copy; - Site maintained by To_Let.com</p>
</div>

	

	</body>

</html>