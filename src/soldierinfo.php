<?php


$servername = "localhost";
$username = "kumar";
$password="123";
$dbname = "military_database";
$xname =$_POST["name"];

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
echo "<script>alert('Invalid credentials');</script>";
} 

$sql = "SELECT ssn,name FROM soldier where name='$xname';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ssn"]."</td><td>".$row["name"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



?>