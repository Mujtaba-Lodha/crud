<?php 



  $stu_id =  $_GET['id'];
 
  $conn = @new mysqli("localhost", "root", "","crud") or die("Connection Failed");
   
  $sql = "delete from student where sid = {$stu_id}";

  $result = mysqli_query($conn, $sql) or die("Query unseccessfully");

  header("LOCATION: index.php");

  mysqli_close($conn);

?>