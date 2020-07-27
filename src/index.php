<html>
<head>
	<title>Welcome to Login Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="ina.jpg">
 <center><font color="#22313F" size="20" style="Times New Roman"> Military Database </font></center><br><br><br><br>
	<div id="main-wrapper">
		<form action="index.php" method="post">
		<center><h2>Login</h2></center>
		<center><input class="inputvalues" type="text" placeholder="User name" name="name" required/><br><br>
		<input class="inputvalues" type="password" placeholder="Password" name="pwdd" required/><br><br>
		<input type="submit" id="submit_btn" name="submit_btn" value="Login"><br><br>
		</form>
	</div>
<?php
$servername = "localhost";
$dbname = "military_database";

if(isset($_POST['submit_btn']))
{	$username=$_POST["name"];
	$password=$_POST["pwdd"];

	if(($username=='kumar' AND $password=='123') OR ($username=='adarsh' AND $password=='111'))
	{
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		header('location:xx.php');
	}
	/*else if($username=='adarsh' AND $password=='111')
	{
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		header('location:xx.php');
	}*/
	else
	{
       echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
	}
}
	?>
	
</body>
</html>
  