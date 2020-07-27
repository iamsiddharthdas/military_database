<html>
<head>
<title>Individual Corp Details</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form>
<div id="main-wrapper">
<?php

$servername = "localhost";
$username = "kumar";
$password="123";
$dbname = "military_database";
$xname =$_POST['name'];

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error)
 {
	echo "<script>alert('Invalid credentials');</script>";
 } 
 else
 {
  	if (isset($_POST['submit_btn'])) 
  	{
  		$sqll="select * from corps;";
  		$res= $conn->query($sqll);
  		if ($res->num_rows > 0)
  		{
 	 	$sql = "DELETE FROM corps where fname='$xname';";
  		$result = $conn->query($sql);

		echo "Corp details has been removed";
	    }
 else {
    echo "No data available to delete";
	}
}
}
?>	
<center>
<a href="xx.php"> <input type="button" id="submit_btn" value="Back"></a>
	</center>
</div>	<br><br><br> 
</form>
</body>
</html>
