<?php
$isPost=false;
$username="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
?>
<?php
$isPost=false;
$Password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$username=$_POST["pass"];
	//echo "button clicked";
}
?>


<!DOCTYPE HTML>
<html>
	<head> 
		<title> Login Page </title>
	</head>

	<body style= "background-color:LightGrey;">
		<section>
		<div style="margin-top:50px">
				<form action="#" method="post">
					<div style="width:40%; float:left">
						<div style="Background-color:LightGrey; height:600px; text-align:center; padding=10px">
									<h1 style="color:blue"> Polythene & Plastic <br>Collector </h1>
									<h2 style="color: green"> <b> Welcome To Our Login Page </b></h2>
							<div style="background-color:LightGrey; width 450px; height: 160px; border: 5px solid green;padding:30px"
										<p> <h4 style="color:green"><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
										</h5></p>
							</div>
						
						</div>
					</div>
					
					
					<div style="width:60%; float:right">
						<div style="Background-color:LightGrey; height:600px; padding=50px; margin-top:25px;  border-radius: 10px; float:right; width:85%">
								<br>
								<div style="padding-left:100px">
									<img src="OIP.png" alt="Profile" width="100px" height="100px">
								</div>
										<br>
										<br>
									
										<input style="padding:8px; border-radius: 10px; width:280px;"  type="text" placeholder= "USER NAME" id="uname" name="uname">
									<?php
									if($isPost==true && $username=="")
									 echo "<span style='color:red;'>Required</span>";
									?>
									
										<br>
										<br>
										<input style="padding:8px; border-radius: 10px; width:280px" type="password" placeholder= "Password" id="pass" name="pass">
										
									<?php
									if($isPost==true && $Password=="")
									 echo "<span style='color:red;'>Required</span>";
									?>
									<br>
									<br> 
							<div style="padding-left:100px">
							
								<input style="padding:8px; border-radius: 10px; width:100px; align:center";  type="submit" value= "Log in" name="btnClick">
							</div>
							<br>
							<br>
							<a href="Registration.php"> No Account? Create a new Account.</a>
							<br>
							<br>
							

						</div>
					</div>
				</form>
			</div>
		</section>
		</body>
	</html>
