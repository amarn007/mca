<?php

echo"<body bgcolor='lavender'></body><center><h1>DETAILS</h1></center><hr size='10' color='darkviolet'>";
$a=$_GET['login'];
$b=$_GET['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="verification";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{

die("connection is failed ".$conn->connect_error);

}
else
{

    $aa="select * from students where roll=$a";
     $c=mysqli_query($conn,$aa);
     
  $d=$c->fetch_assoc();
	




}
if($a==$d['roll'] and $b==$d['name'])
{

echo"<center><table>";
 echo "<tr><td align='left'><h3>roll no</h3></td>";
echo"<td><h3>:</h3></td>";
echo"<td><h3>";
 echo $d['roll'];
echo"</h3></td></tr>";
 echo "<tr><td align='left'><h3>Name</h3></td>";
echo"<td><h3>:</h3></td>";
echo"<td><h3>";
 echo $d['name'];
echo"</h3></td></tr>";
 echo "<tr><td align='left'><h3>Class</h3></td>";
echo"<td><h3>:</h3></td>";
echo"<td><h3>";
 echo $d['class'];
echo"</h3></td></tr>";
 echo "<tr><td align='left'><h3>MARK in %</h3></td>";
echo"<td><h3>:</h3></td>";
echo"<td><h3>";
 echo $d['mark%'];
echo"</h3></td></tr>";
echo "<tr><td align='left'><h3>Admission NO</h3></td>";
echo"<td width='20'><h3>:</h3></td>";
echo"<td><h3>";
 echo $d['adm NO'];
echo"</h3></td></tr>";
echo"</table></center>";



 
echo'<center><a href="login.html">back to login</a></center>';

if($a==2)
{
 echo"<center><a href='amar.html'>MY PHOTOS</a></center>";

}


}


?>