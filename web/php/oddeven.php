<html>
<head><b><h1><u>ODD OR EVEN</u></h1></b></head>
<body>
<form action="" method="GET">
please enter the number:<input type ="text" name='txt'>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if(isset($_GET['txt'])){
echo"<b><u>NUMBER IS ODD OR EVEN</u></b><br>";
$n=$_GET['txt'];
if($n%2==0)
echo"$n is even";
else
echo"$n is odd";
}
?>