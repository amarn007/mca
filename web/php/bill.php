<html>
<head><title>bill</title></head>
<style>
table{

      text-align:center;

     }
</style>
<body>
<b><h1><u>BILL</u></h1></b>
<table>
<form action=""method="GET">
<tr><th>
please enter the custumer number:</th><th><input type ="text" name='txt'></th></tr>
<tr><th>please enter the consumed unit:</th><th><input type ="text" name='num'></th></tr>
<tr><th colspan="2"><input type="submit" name="submit" value="submit"></th></tr>
</form>


<?php

function fibonacci($n) {



             $bill=0;
            if($n<=50)
              {

                   $bill=$bill+($n*3.5);
                   
               }

              

                  
                  

                   elseif($n<=150)
              {

                    $bill=$bill+(50*3.5);
                    $b=$n-50;
                   $bill=$bill+($b*4.0);
                    


               }

            
                    elseif($n<=250)
              {
                    $bill=$bill+(50*3.5);
                   $bill=$bill+(100*4.0);
                     $b=$n-150;
                    $bill=$bill+($b*5.2);
              }

                   
                   elseif($n>250)
              {

                   $bill=$bill+(50*3.5);
                   $bill=$bill+(100*4.0);
                    
                    $bill=$bill+(100*5.2);
                     $b=$n-250;

                   $bill=$bill+($b*6.95);
                    


                  }

                return $bill;
               }
                 
           

if(isset($_GET['submit'])){
$n = $_GET['num']; 
$num = $_GET['txt']; 
$bill = fibonacci($n);
 echo  "<tr><th colspan='2'>electricity bill payable for ".$num." is : ".$bill."</th></tr>";
}

?>

</table>
</body>
</html>
