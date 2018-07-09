<!-- Projects begins here -->
<!-- top, right, bottom, left //-->
<!DOCTYPE html>
<?php

	session_start();
?>


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
	
	
	.reb
	{
		height:110px;
		width:620px;
		border-radius:10px;
	}
	

.reb li {
    float: left;
}

.reb li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

.reb li a:hover {
    background-color: #111111;
}
	
	.reb ul{
		list-style-type: none;
		margin: 0;
		overflow: hidden;
		background-color:#003366;
	}
	
	
	
			.container
			{   
				margin-left:270px;
				background-color:#1F2739;
				width: 720px;
				height: 160px;
				height: 160px;
				padding-top:30px;
			}
			
		
			.dropbtn {
			    background-color:#ff3333;
			    color: white;
			    padding: 16px;
			    font-size: 16px;
			    border: none;
			    cursor: pointer;
			}

			.dropdown {
			    position: absolute;
			    display: inline-block;
			    margin-top:30px;
				margin-left:818px;

			}

			.dropdown-content {
			    display: none;
			    position: absolute;
			    background-color: #f9f9f9;
			    min-width: 160px;
			    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			    z-index: 1;
			}

			.dropdown-content a {
			    color: black;
			    padding: 12px 16px;
			    text-decoration: none;
			    display: block;
			}

			.dropdown-content a:hover {background-color: grey}

			.dropdown:hover .dropdown-content {
			    display: block;
			}

			.dropdown:hover .dropbtn {
			    background-color: #3e8e41;
			}
			#rental_name
			{
				padding-top:12px;
				text-align: center;
				background-color:#ff3333;
				height:40px;
				width:200px;
				border-radius:5px;
				margin-left:260px;
			}

			#footer
			{
				background-color:black;
				width:100%;
				height:80px;
				background:url(../images/header-pattern.gif) 50% 0 #1d1d1d;
			}
			
		
			#test{
				background-color: white;
				width:660px;
				height:450px;
			}
			
	<!-- table er style start -->
	
	.blue { color: #185875; }
.yellow { color: #FFF842; }

.container1 th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: white;
}

.container1 td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container1 {
	  text-align: left;
	  overflow: hidden;
	  width: 60%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container1 td, .container1 th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container1 tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container1 tr:nth-child(even) {
	  background-color: #2C3446;
}

.container1 th {
	  background-color: #1F2739;
}

.container1 td:first-child { color: #FB667A; }

.container1 tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container1 td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container1 td:nth-child(4),
.container1 th:nth-child(4) { display: none; }
}
		
h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
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
	
	<input type="SUBMIT" name = "Log_out" value="Sign Out" style="margin-top:10px;margin-left:1200px;font-size:20px;font-family:Georgia;color:black;background-color:Lightgrey;float:middle; height:30px; width:90px;border-radius:10px;border: none;" ></input>
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
			
			<div id="rental_name">
			
			<font size="4" color="white">Check Contact Us!
			
			</div>
			<font size="3" color="black">

			<br>
		</div>

				<table class = "container1">

					<thead>
  					<tr>

   				      <th><h1>Name</h1></th>
				      <th><h1>Email</h1></th> 
				      <th><h1>Contact</h1></th>
					  <th><h1>Subject</h1></th>
					  <th><h1>Message</h1></th>
					  <th><h1>Delete</h1></th>
					  
				      
				    </tr>
					</thead>
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
							$sql = "SELECT C_ID, Name, Email, Contact, Sub, Message FROM contact_us" ;
							$result = $conn->query($sql);
							$formid = "form";
							$arr = array(100);
							$arrid = 0;
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									

									
										$formid = "form";

										$a_id = $row["C_ID"];
										$arr[$arrid] = $a_id;
										$formid .= $arrid; 
										$arrid++;
										#echo "check ". $formid . "</br>";

										$a = $row["Name"];
										$b = $row["Email"];
										$c = $row["Contact"];
										$d = $row["Sub"];
										$e = $row["Message"];

										?>
										<tr>
									      <td><?php echo $a; ?></td>
									      <td><?php echo $b; ?></td>
									      <td><?php echo $c; ?></td>
									      <td><?php echo $d; ?></td>
									      <td><?php echo $e; ?></td>
									      <td><form method = "post" ><input name = <?php echo $formid  ?> type="SUBMIT" value="delete" style="width:100%"></form></td>
									    </tr>


									    <?php
									    
									    

								}
							}



						}
	

				    ?>

				    


				    </tbody>


				</table>

				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
		    		die("Connection failed: " . $conn->connect_error);
				}else{
			
					for( $i = 0; $i < $arrid; $i++ ){
						$tmp = "form";
						$tmp .= $i;

						if( isset($_POST[$tmp] )){
							echo  $arr[$i] . "</br>";
							$sql = "DELETE FROM contact_us WHERE C_ID = $arr[$i]";
							if ($conn->query($sql) === TRUE) {
								echo "Record updated successfully";
							} else {
								 echo "Error updating record: " . $conn->error;
							}

						}
					}
					
				}

			?>
				

		<div id="footer">
		<p style="font-size:20px;color:white;text-align:center;padding-top:28px;">Copyright &copy; - Site maintained by To_Let.com</p>
</div>
		
		
	
	</body>






</html>