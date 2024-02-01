<html>
<head>
<title>login</title>
</head>
<body bgcolor="lavender">
<h1><center>ENTER DETAILS</center></h1>
<hr size="5" color="darkviolet">
<form action="login1.php" method="GET">
<center>
<table>
<tr><td><h2>roll no:</h2></td>
<td></td>
<td><input type="text" name="roll" required></td></tr> 
<tr><td><h2>name:</h2></td>
<td></td>
<td><input type="text" name="name" required></td></tr> 
<tr><td><h2>class:</h2></td>
<td></td>
<td><input type="text" name="class" required></td></tr> 
<tr><td><h2>Age:</h2></td>
<td></td>
<td><input type="text" name="age" required></td></tr> 
<tr><td><h2>Admission NO:</h2></td>
<td width="20"></td>
<td><input type="text" name="adm" required></td></tr> 
</table>
<input type="submit" name="submit">

</form>
<hr>

<a href="login.html">back to login</a>

<?php

if(isset($_GET['submit']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="student_details";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{

die("connection is failed ".$conn->connect_error);

}
else
{
$a=$_GET['roll'];
$b=$_GET['name'];
$c=$_GET['class'];
$d=$_GET['age'];
$e=$_GET['adm'];

$sql="INSERT INTO student VALUES ('$a','$b','$c','$d','$e')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo"<h1>Registration sucessfull</h1>";
   
$sql1="select * from student";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) == 0) {
     echo"<table border='1'><tr><th>Roll no</th>
    <th>Name</th><th>calss</th><th>Age</th><th>Adm no</th></tr> <tr>
    <td>No rows found, nothing to print so am exiting</td></tr>";
    exit;
}else{
   echo"<table border='1'><tr><th>Roll no</th>
    <th>Name</th><th>calss</th><th>Age</th><th>Adm no</th></tr>";
while($row=$result->fetch_assoc())
   {
     

   echo"<tr><td>".$row['rollno']."</td><td>".$row['Name']."</td><td>".$row['Class']."</td><td>".$row['Age']."</td>
<td>".$row['Admno']."</td></tr>";  
      


   }

}

    


}
else
{
echo"error";

}

}

}
?>
</body>
</html>