<html>
<head><b><h1><u>fibb</u></h1></b></head>
<body>
<form action=""method="GET">
please enter the number:<input type ="text" name='txt'>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

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

   echo $bill;
               }
                 
             
              

              
          

              
   
                       

    


if(isset($_GET['txt'])){
$n = $_GET['txt']; // You can change this value to generate Fibonacci sequence up to a different number

$fibonacciSequence = fibonacci($n);



}

?>
