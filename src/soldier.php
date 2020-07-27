<html>
<head>
<title>Individual Corp Details</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action="soldier.php" method="post">
<div id="main-wrapper">
<input class="inputvalues" type="text" placeholder="name" name="sname" required/><br><br>
<input class="inputvalues" type="text" placeholder="id" name="corpid" required/><br><br>
<input type="submit" id="submit_btn" name="submit_btn" value="Save Data">
<?php
$servername = "localh
ost";
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
	  $sname =$_POST['sname'];
      $solid=$_POST['corpid'];
      $sql = "insert into uid values('$sname','$solid');";
      $result = $conn->query($sql);
      echo $result;
}
?>	
<center>
</div>	<br><br><br> 
</body>
</html>
