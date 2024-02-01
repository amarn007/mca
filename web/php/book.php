<?php 
    $conn=new mysqli("localhost","root","","web");
   if($conn->connect_error)
    {

      echo "error";

    }

  else{

    if(isset($_POST['submit']))
      {
      $name=$_POST['name'];
    $id=$_POST['id'];
    $auther=$_POST['auther'];
    $date=$_POST['date'];
      $sql="insert into books values('$name','$id','$auther','$date')";
      if(mysqli_query($conn,$sql))
       {

         echo"<script>alert('successfully registered')</script>";
       } 

     }
       $sql="select * from books";
      $result=mysqli_query($conn,$sql);

    ?>
   <h1 style="color:red">issue book</h1>
  <table border="1"><tr><th>BOOK NAME</th><th>BOOK ID</th><th>AUTHER</th><th>DATE</th></tr>

   <?php
        while($row=$result->fetch_assoc())
           {


              echo "<tr><td>".$row['book_name']."</td><td>".$row['book_id']."</td><td>".$row['auther']."</td><td>".$row['date']."</td></tr>";

           }


    echo"</table>";
   


  }

 
?>