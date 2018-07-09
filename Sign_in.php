<!-- Create rental house page  -->
<!-- top, right, bottom, left //-->


<?php
	
	session_start();
	$_SESSION['pp'] = 'po';
	
?>
<html>

	<head>
	<title>LOG IN</title>

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
				margin-left:360px;
				background-color:#1F2739;
				width: 560px;
				height: 460px;
				padding-top:30px;
			}
			
			#category_ul
			{
				background-color:gray;
			}
			#create_log_in_box
			{
				
				background-color:white;
				height:360px;
				width:auto;
				padding-left:0px;
				padding-right:80px;
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
				padding-left:90px;
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
        <h1><a href="http://localhost:8080/subline.php"><strong>To</strong>_Let</a></h1>
    </div>
	
	<img src="phone.png" alt="No Image" style="width:20px;height:20px;padding-left:980px "><font size="3" color="white">01687842121
    <img src="email.png" alt="No Image" style="width:20px;height:20px;"> tolet_bd@gmail.com		
	<font color="black">	
	
</header>
		

		
		<div class="container">
			
			<ul id="category_ul">
				<p style="font-size:30px;color:white;text-align:center;">Log In Form</p>
			</ul>
			
			<div id="create_log_in_box">
				<form name = "form_login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<pre>Email   <input name="Lemail" type="text" size="40" style="height:30px"></pre>
					<br>
					<pre>Password<input name="Lpass" type="text" size="40" style="height:30px"></pre>
					<br>
					<input type="SUBMIT" name = "log" value="LogIn" style="font-size:20px;font-family:Georgia;color:white;background-color:black;float:middle; height:50px; width:90px;border-radius:10px;border: none;" ></input>
			
				</form>

			
			


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

				$Rname = "";
				$Remail = "";
				$Rpass = "";
				$Rrepeat_pass = "";
				$Rphone = "";

				$Remail = "";
				$Lpass = "";
				if( isset($_POST['log'] )){

				$Lemail = $_POST["Lemail"];
				$Lpass = $_POST["Lpass"];
				
				$Lemail = test_input($Lemail);
				

				if( check_email($Lemail) == true && strcmp($Lemail, "admin@gmail.com" ) == 0 && strcmp($Lpass, "212701" ) == 0){
					
					$ad = "ADMIN";
					#echo "asche";
					$_SESSION['user'] = 'admin';
					echo$_SESSION['user'];
					?>
						<script type="text/javascript">  
						window.location.href = "http://localhost:8080/subline.php";
						</script>  
						exit();
						
					<?php
				}

				#echo $Lemail ."<br/>" . $Lpass ."<br/>" ;
				if( check_email($Lemail) == true ){
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				}else{
					$sql = "SELECT Password FROM login where Email = '".$Lemail."' ";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							if( strcmp( $row["Password"] , $Lpass ) == 0 ){
								echo "Succesfully Logged In" . "<br/>" ;
								
								$uu = "public";
								$_SESSION['user'] = $uu;
								?>
								<script type="text/javascript">  
								window.location.href = "http://localhost:8080/subline.php";
								</script>  
								<?php

							}else{
								echo "Wrong Password" . "<br/>" ;
							}
						}
						
					}else{
						echo "Please Register" . "<br/>" ;
					}

					
				}
				$conn->close();






			}
				}


			?>
			</div>
		
		</div>
		<div id="footer">
		<p style="font-size:20px;color:white;text-align:center;padding-top:28px;">Copyright &copy; - Site maintained by To_Let.com</p>
</div>

	</body>

</html>