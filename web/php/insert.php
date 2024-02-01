<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="" method="post">
        Username: <input type="text" name="username" style="width: 200px;"><br><br>
        Password: <input type="password" name="password" style="width: 150px;"><br><br>
        Address: <textarea name="address" rows="5" cols="20"></textarea><br>
       
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other<br><br>
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>

<?php
session_start();
     $servername = "localhost";
$username = "root";
$password = "";
$dbname ="new";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    // Prepare and execute SQL query to insert data into the database table
    $sql = "INSERT INTO users VALUES ('$username','$password', '$address','$gender')";
    
    $result=mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Data inserted successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>