<html>
<head>
<title>Individual Corp Details</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<a href="sld.php"> <input type="button" id="button" value="Corp Details Entry"></a><br><br><br><br><br><br>
<a href="sold_del.php"> <input type="button" id="button" value="Corps data deletion"></a><br><br><br>
<form>
<div id="main-wrapper">
<?php

echo"Individual details are shown below:";
$servername = "localhost";
$username = "kumar";
$password="123";
$dbname = "military_database";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
echo "<script>alert('Invalid credentials');</script>";
} 

$sql = "SELECT * FROM corps;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Corp ID  </th><th>First Name  </th><th>Last Name  </th><th>Address  </th><th>Date of Joining  </th></tr>";
     
    while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["corps_id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."&nbsp</td><td>".$row["address"]."</td><td>".$row["d_o_j"]."</td></tr>";
	
    }
   echo "</table>";
}

 else {
    echo "0 results";
}
?>	
<center>
<a href="xx.php"> <input type="button" id="submit_btn" value="back"></a>
		</form></center>
</div>	<br><br><br> 


</body>
</html>
