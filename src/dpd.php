<html>
<head>
<title>Individual Corp Details</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body><br><br><br><br><br><br><br>
<center><font color="blue" size="25"><b>Dependants Entry</b></font><br><br><br></center>
<form action="dpd.php" method="post">
<div id="main-wrapper">

<input class="inputvalues" type="text" placeholder="Dependant name" name="dname" required/><br><br>

<input class="inputvalues" type="text" placeholder="Address" name="address" required/><br><br>
<input class="inputvalues" type="text" placeholder="Corp ID" name="corpid" required/><br><br>
<input type="submit" id="submit_btn" name="submit_btn" value="Save">
<?php
$servername = "localhost";
$username = "kumar";
$password="123";
$dbname = "military_database";


// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error)
{
echo "<script>alert('Invalid credentials');</script>";
} 
else if(isset($_POST['submit_btn']))
{
	 
      $dname=$_POST['dname'];
      
      $add=$_POST['address'];
      $sid =$_POST['corpid'];
      $sql = "insert into dependants values('$dname','$add','$sid');";
      $result = $conn->query($sql);
     
      
  }


?>	
<center>

</div>	<br><br><br> 

</body>
</html>
