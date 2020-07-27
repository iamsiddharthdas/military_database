<html>
<head>
<title>Indivisual Corp Details</title>
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
$depid =$_POST['did'];

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
echo "<script>alert('Invalid credentials');</script>";
} 

$sql = "SELECT * FROM department where dept_id='$depid';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Department ID  </th><th>Department Name  </th><th>Department head ID  </th></tr>";
     
    while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["dept_id"]."</td><td>".$row["dept_name"]."</td><td>".$row["dept_head_id"]."</td></tr>";
	
    }
   echo "</table>";
}

 else {
    echo "0 results";
}



?>	
</div>	<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		<a href="xx.php"> <input type="button" id="submit_btn" value="Go back"></a>
		</form>
</body>
</html>