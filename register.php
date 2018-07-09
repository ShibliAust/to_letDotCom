<!-- Create rental house page  -->
<!-- top, right, bottom, left //-->

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
				height: 560px;
				padding-top:30px;
			}
			
			#category_ul
			{
				background-color:gray;
			}
			#create_register_box
			{
				
				background-color:white;
				height:460px;
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
				<p style="font-size:30px;color:white;text-align:center;">Registration Form</p>
			</ul>
			
			<div id="create_register_box">
				<form name = "form_register"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<pre>Name<input name="register_name" type="text" size="30" style="height:30px"></pre>
					<br>
					<pre>Email<input name="register_mail" type="text" size="30" style="height:30px"></pre>
					<br>
					<pre>Password<input name="register_password" type="text" size="30" style="height:30px"></pre>
					<br>
					<pre>Repeat Password<input name="register_repeat_password" type="text" size="30" style="height:30px"></pre>
					<br>
					<pre>Contact No<input name="register_contact_no" type="number_format" size="30" style="height:30px"></pre>
					<br>
					<input type="SUBMIT" name = "sub" value="Register" style="font-size:20px;font-family:Georgia;color:white;background-color:black;float:middle; height:50px; width:90px;border-radius:10px;border: none;" ></input>
				</form>


			<?php
			
			
			function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
			

				function check_contact_no( $str ){
				$one = 1;$zero = 1;
				
				$len = strlen( $str );
				
				if( $len != 11 ) return false;
				#if( $str{0} != "0" ) return false;
				#if( $str{1} != "1" ) return false;
				return true;
			}
			function check_pass( $str1, $str2 ){
				if( empty($str1) || empty($str2 ) ) return false;
				if( strlen( $str1 ) < 6 ) return false;
				if( strcmp ( $str1 , $str2 ) !== 0 ){
					return false;
				}
				return true;

			}
			function check_email( $str ){
				if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
				    return true;
				}
				return false;
			}

				if( isset($_POST['sub'] )){



				$all_ok = 1;

				$Rname = $_POST["register_name"];
				$Remail = $_POST["register_mail"];
				$Rpass = $_POST["register_password"];
				$Rrepeat_pass = $_POST["register_repeat_password"];
				$Rphone = $_POST["register_contact_no"];
				
				
				$Rname=test_input($Rname);
				$Rpass=test_input($Rpass);
				$Rrepeat_pass = test_input($Rrepeat_pass);


				if( !check_contact_no($Rphone) ) $all_ok = 0;
				if( !check_pass( $Rpass, $Rrepeat_pass ) ) $all_ok = 0;
				if( !check_email($Remail ) ) $all_ok = 0;


				echo $Rname ."<br/>" . $Remail ."<br/>" . $Rrepeat_pass ."<br/>" . $Rphone."<br/>";
				if( $all_ok == 0 ){
					echo "please enter the data currectly !";
				}else{
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "test";

					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
    					die("Connection failed: " . $conn->connect_error);
					} else {
						$sql = "SELECT phone FROM login where phone = '".$Rphone."'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							echo "already registered" . "<br/>" ;
						}else {

							$sql = "INSERT INTO login (name,Email, Password, Phone )
									VALUES ( '$Rname', '$Remail', '$Rpass', '$Rphone' )";

							if ($conn->query($sql) == TRUE) {
    							?>
								<script type="text/javascript">  
								window.location.href = "http://localhost:8080/Sign_in.php";
								</script>  
								<?php
								exit();
    						}else{
    							echo"opsss error";
    						}


    						$conn->close();
						}
					}
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