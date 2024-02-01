<Html>
<head>
<title>login</title>
</head>
<body bgcolor="lavender">
<h1><center>LOGIN</center></h1>
<CENTER><form action="" method="POST">
<h2>Username<input type="text" name="username" placeholder="roll no"required></h2> 
<h2>Password<input type="text" name="password" placeholder="Name" required></h2>
<input type="submit" name="submit">
</form>
<a href="registration.php"><h3>Create an account</h3></a>

<?php

 $servername = "localhost";
$username = "root";
$password = "";
$dbname ="new";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    
    $sql = "select * from users where username='$username'and password='$password'";
    
    $result=mysqli_query($conn,$sql);
    if ($result) {
           
                if (mysqli_num_rows($result))
                   {

                       echo "<h1>login successfull</h1>";           
 

                  }

                else{


                       echo "<h1>invallid credintials</h1>";


                   }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
</center>
</body>
</html>