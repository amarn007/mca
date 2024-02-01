<html>
<head><b><h1><u>electricity bill</u></h1></b></head>
<body>
<form action=""method="GET">
please enter the number:<input type ="text" name='txt'>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php

function bill($n) {


             $a=3.5;
             $b=4.0;
             $c=5.2;
             $d=6.5;

             $bill=0;
            if($n<50)
              {

                   $bill=$bill+($n*3.5);

               }

               elseif($n>50)
              {

                   $bill=$bill+(50*3.5);
                   $b=$n-50;

                   if($n<150)
              {

                   $bill=$bill+($b*4.0);

               }

               elseif($n>250)
              {
                    $bill=$bill+(100*4.0);
                   $b=$n-150;

               }

               }
   
             echo "Your electricity bill is :".$bill;
   
                       }

 
if(isset($_GET['txt'])){
$n = $_GET['txt']; 

 bill($n);



}

?>
