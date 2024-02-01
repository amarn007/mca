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

function generateFibonacci($limit) {

    $n1=0;
    $n2 = 1;
    $num=0;
 echo "Fibbnocci numbers upto " .$limit. " are : ";
  while ($num <$limit )  
    {  
     if($num==0)
      {
       
            echo $n1.' '; 
          

      }

   else if($num==1)
    {
       echo $n2.' ';
       
    }
else{
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    
   
}

     $num = $num + 1; 
    }

}
if(isset($_GET['txt'])){
$limit= $_GET['txt']; 
 generateFibonacci($limit);


}


?>
