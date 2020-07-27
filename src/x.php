<html>
<body>

Welcome <br>
<?php 
echo $_POST["name"]; 

$servername = "localhost";
$username =$_POST["name"];
$password =$_POST["email"];
$dbname="military_database";
$conn= mysqli_connect("localhost","$username","$password") or die ("Make sure you have entered valid username and password);
mysqli_select_db($conn,"military_database") or die ("no database");  
$sql = "SELECT Dept_name FROM dept where ssn='1001';";
//$result = mysqli_query($conn, $sql);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<br><br>Name  : " . $row["Dept_name"];
   }
} else {
   echo "0 results";
}


?>



</body>
</html>