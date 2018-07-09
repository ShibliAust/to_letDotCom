<!-- Projects begins here -->
<!-- top, right, bottom, left //-->

<html>
	<head>
	
		<style>
		
		    body
			{
				background-color:silver;
			}
			
			header
			{
				margin-left:150px;	
			}
			
			ul{
				position:relative;
				list-style-type: none;
				margin: 0;
				padding-left: 10;
				overflow: hidden;
				background-color: #333333;
			}
			li{
				font-family:Verdana;
				font-size:20px;
				float: left;
			}
			li a{
				
				display: block;
				color: white;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}
			
			li:hover
			{
				background-color: gray;
			}
			
			.container
			{   
				margin-left:290px;
				background-color: lightgray;
				width: 660px;
				height: 960px;
				padding-top:30px;
				padding-left:40px;
				padding-right:40px;
			}
			
			#rental_name
			{
				padding-top:12px;
				text-align: center;
				background-color:white;
				height:40px;
				width:200px;
				border-radius:5px;
			}
			
			
			
			#category
			{
				background-color:white;
				height:130px;
				width:580px;
				border-radius:10px;
				
			}
			
			#category_a
			{
				display: block;
				color: black;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}
			#category_ul
			{
				background-color:white;
				padding-left:20px;
			}
			
			#footer
			{
				background-color:black;
				width:100%;
				height:80px;
			}
			
			#login
			{
				position:absolute;
				background-color:white;
				margin-top:30px;
				margin-left:10px;
				width:260px;
				height:240px;
				text-align:center;
				border-radius:20px;
			}
			
			#register
			{
				position:absolute;
				background-color:white;
				margin-top:30px;
				margin-left:1060px;
				width:260px;
				height:460px;
				text-align:center;
				border-radius:15px;
				
			}
			#test{
				background-color: white;
				width:660px;
				height:450px;
			}
			
		
		</style>
		
	
	</head>
	
	
	<body>
		
		
		<header>
			<h2> 
				To_Let.com
				<img src="image/phone.png" alt="No Image" style="width:20px;height:20px;padding-left:600px "> 01687842121 
				<img src="image/email.png" alt="No Image" style="width:20px;height:20px;"> tolet_bd@gmail.com		
			</h2>
			
		</header>
		

		
		
		<ul>
			<li style="margin-left:140px;"><a href="file:///C:/xampp/htdocs/category.php">Home</a></li>
			<li><a href="file:///C:/xampp/htdocs/project_test.php">About Us</a></li>
			<li><a href="file:///C:/xampp/htdocs/project_test.php">Contact Us</a></li>
			<li><a href="file:///C:/xampp/htdocs/project_test.php">Terms & Conditions</a></li>

		</ul>
		
		<div id="login">

			<form name = "form_login" action="subline.php" method="post">

			<p style="font-family:Georgia;font-size:15px;"><b>Email</b></p>
			
					<input name="Lemail" type="text" size="30" style="height:30px">
			
			
			<p style="font-family:Georgia;font-size:15px;"><b>Password</b></p>
			
				<input name="Lpass" type="text" size="30" style="height:30px">
			
			
			<input type="SUBMIT" name = "log" value="LogIn" style="font-size:20px;font-family:Georgia;color:white;background-color:black;float:middle; height:50px; width:90px;border-radius:10px;border: none;" ></input>

			</form>
		
		</div>

		



		
		
		<div id="register">

			<form name = "form_register" action="subline.php" method="post">

		
			<p style="font-family:Georgia;font-size:15px;"><b>Name</b></p>
			
					<input name="register_name" type="text" size="30" style="height:30px">
			
			
			<p style="font-family:Georgia;font-size:15px;"><b>Email</b></p>
			
					<input name="register_mail" type="text" size="30" style="height:30px">
			
			
			<p style="font-family:Georgia;font-size:15px;"><b>Password</b></p>
			
				<input name="register_password" type="text" size="30" style="height:30px">
			
			
			<p style="font-family:Georgia;font-size:15px;"><b>Repeat Password</b></p>
			
				<input name="register_repeat_password" type="text" size="30" style="height:30px">
			
			
			<p style="font-family:Georgia;font-size:15px;"><b>Contact No.</b></p>
			
				<input name="register_contact_no" type="number_format" size="30" style="height:30px">
			
			
			
			<input type="SUBMIT" name = "sub" value="Register" style="font-size:20px;font-family:Georgia;color:white;background-color:black;float:middle; height:50px; width:90px;border-radius:10px;border: none;" ></input>
			</form>
		
		</div>





		
		
		
		<div class="container">
			
			
			<div id="rental_name">
			
			Rental Category
			
			</div>
			
			
			<div id="category">
			
				<ul id="category_ul">
					<li><a id="category_a" href="http://localhost:8080/subline.php">Garage</a></li>
					<li><a id="category_a" href="http://localhost:8080/subline.php">Garage</a></li>
					<li><a id="category_a" href="http://localhost:8080/subline.php">Sublet</a></li>
					<li><a id="category_a" href="http://localhost:8080/subline.php">Female Mess</a></li>
				</ul>
				
				<ul id="category_ul">
					<li><a id="category_a" href="file:///C:/xampp/htdocs/project_test.php">Family House</a></li>
					<li><a id="category_a" href="file:///C:/xampp/htdocs/project_test.php">Office</a></li>
					<li><a id="category_a" href="file:///C:/xampp/htdocs/project_test.php">Shop</a></li>
				</ul>
			</div>


			

			<?php

			echo "asche"."<br/>"; 

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

				echo $Lemail ."<br/>" . $Lpass ."<br/>" ;

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
		
			

			if( isset($_POST['sub'] )){

				$all_ok = 1;

				$Rname = $_POST["register_name"];
				$Remail = $_POST["register_mail"];
				$Rpass = $_POST["register_password"];
				$Rrepeat_pass = $_POST["register_repeat_password"];
				$Rphone = $_POST["register_contact_no"];


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
    							echo "New record created successfully";
    						}else{
    							echo"opsss error";
    						}


    						$conn->close();
						}
					}
				}
			}





				

			

			?>

			<div id = "test" >
				

				<table style="width:100%" border="1">


  					<tr>
   				      <th>Name</th>
   				      <th>Mail</th>
   				      <th>Password</th>
				      <th>Contact</th> 
				      
				      
				      
				    </tr>
				    <tbody>

				    <?php
				    	$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "test";

						$conn = new mysqli($servername, $username, $password, $dbname);

						if ($conn->connect_error) {
		    				die("Connection failed: " . $conn->connect_error);
						}else{
							$sql = "SELECT name, Email, Password, Phone FROM login" ;
							$result = $conn->query($sql);


							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {


										$a = $row["name"];
										$b = $row["Email"];
										$c = $row["Password"];
										$d = $row["Phone"];
										
										

										?>
										<tr>
									      <td><?php echo $a; ?></td>
									      <td><?php echo $b; ?></td>
									      <td><?php echo $c; ?></td>
									      <td><?php echo $d; ?></td>
									      
									      
									    </tr>


									    <?php					


								}
							}

						}
					

				    ?>

				    


				    </tbody>


				</table>

			</div>

		</div>
		
		<div id="footer">
				<p style="font-size:20px;color:white;text-align:center;">@Copyright Notice Here - Site maintained by Swapnil Biswas and Shahariar Shibli</p>
		</div>
		
		
	
	</body>


</html>