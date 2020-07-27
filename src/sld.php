 <html>
<head>
<title>Individual Corp Details</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body><br><br><br><br>
<font size="20"><center><b>Insert Corps Information</b></center></font><br><br><br>
<form action="sld.php" method="post">
<div id="main-wrapper">
<input class="inputvalues" type="text" placeholder="Corp ID" name="corpid" required/><br><br>
<input class="inputvalues" type="text" placeholder="First name" name="fname" required/><br><br>
<input class="inputvalues" type="text" placeholder="Last name" name="lname" required/><br><br>
<input class="inputvalues" type="text" placeholder="Address" name="address" required/><br><br>
<input class="inputvalues" type="date" placeholder="Date of Joining" name="doj" required/><br><br>
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
	  $sid =$_POST['corpid'];
      $sfname=$_POST['fname'];
      $slname=$_POST['lname'];
      $add=$_POST['address'];
      $doj=$_POST['doj'];
      $sql = "insert into corps values('$sid','$sfname','$slname','$add','$doj');";
      $result = $conn->query($sql);
     
      
  }


?>	
<center>

</div>	<br><br><br> 

</body>
</html>
