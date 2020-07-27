<html>
<head>
<title>Indivisual Corp Details</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form>
<div id="main-wrapper">
<?php

echo"Indivisual details are shown below:";
$servername = "localhost";
$username = "kumar";
$password="123";
$dbname = "military_database";
$xname =$_POST['name'];

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
echo "<script>alert('Invalid credentials');</script>";
} 

$sql = "SELECT * FROM corps where fname='$xname';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Corp ID  </th><th>First Name  </th><th>Last Name  </th><th>Address  </th><th>Date of Joining  </th></tr>";
     
    while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["corps_id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["address"]."</td><td>".$row["d_o_j"]."</td></tr>";
	
    }
   echo "</table>";
}

 else {
    echo "0 results";
}



?>	
</div>	<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		<a href="index.php"> <input type="button" id="submit_btn" value="Logout"></a>
		</form>
</body>
</html>