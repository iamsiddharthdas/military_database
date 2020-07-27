<?php


$servername = "localhost";
$username = "kumar";
$password="123";
$dbname = "military_database";
$pssn =$_POST["ssn"];


// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    echo "<script>alert('Invalid credentials');</script>";
} 

$sql = "SELECT Dept_name,Dept_id from dept d,soldier s where s.ssn=d.ssn and s.ssn='$pssn';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Dept_name"]."</td><td>".$row["Dept_id"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



?>