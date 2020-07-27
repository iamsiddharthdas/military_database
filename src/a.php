<html>
<head>
	<title>Welcome to Login Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="mltry.gif">
 <center><font color="#F9690E" size="20" style="Times New Roman"> Military Database </font></center><br><br><br><br>
	<div id="main-wrapper">
		<form action="a.php" method="post">
		<center><h2>Login</h2></center>
		<center><input class="inputvalues" type="text" placeholder="User name" name="name" required/><br><br>
		<input class="inputvalues" type="password" placeholder="Password" name="pwdd" required/><br><br>
		<input type="submit" id="submit_btn"><br><br>
		</form>
	</div>
	<?php
$servername = "localhost";
$username = $_POST["name"];
$password=$_POST["pwdd"];
$dbname = "military_database";
$pssn-$_POST["ssn"]
// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
   // die("<script>alert('Invalid credentials');</script> " . $conn->connect_error);
  echo "<script>alert('Invalid credentials')</script>";
} 
else
{

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
}
?>
</body>
</html>
