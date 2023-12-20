<?php
  $servername = "localhost";
$username = "root";
$password = "";
$dbname ="new";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    
  die("Connection failed: " . $conn->connect_error);
}
else{
 $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        ?>
<html>
<head><title>classs</title></head>
<body>
<table border="1">
      <tr><th>NAME</th><th>AGE</th><th>COURCE</th><th>duration</th></tr> <?php
         while($rows = $result->fetch_assoc()){
        ?><tr><td><?php echo $rows['username']; ?></td>
        <td><?php echo $rows['age']; ?></td>
        <td><?php echo $rows['couce']; ?></td>
        <td><?php echo $rows['duration']; ?></td>
        </tr><?php
      
        }

}
?>  
