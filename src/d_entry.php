 <html>

 <head>
   <title>Individual Corp Details</title>
   <link rel="stylesheet" type="text/css" href="style1.css">
 </head>

 <body><br><br><br><br>
   <font size="20">
     <center><b>Insert Department Information</b></center>
   </font><br><br><br>
   <form action="d_entry.php" method="post">
     <div id="main-wrapper">
       <input class="inputvalues" type="text" placeholder="Department ID" name="did" required /><br><br>
       <input class="inputvalues" type="text" placeholder="Department Name" name="dname" required /><br><br>
       <input class="inputvalues" type="text" placeholder="Department Head ID" name="dhid" required /><br><br>
       <input type="submit" id="submit_btn" name="submit_btn" value="Save">
       <?php
        $servername = "localhost";
        $username = "siddharth";
        $password = "123";
        $dbname = "military_database";


        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          echo "<script>alert('Invalid credentials');</script>";
        } else if (isset($_POST['submit_btn'])) {
          $did = $_POST['did'];
          $dname = $_POST['dname'];
          $hid = $_POST['dhid'];
          $sql = "insert into department values('$did','$dname','$hid');";
          $result = $conn->query($sql);
        }


        ?>
       <center>

     </div> <br><br><br>

 </body>

 </html>
