<?php 


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "crud";


  $conn = @new mysqli(
 
     $servername,
     $username,
     $password,
     $dbname

  );


  // check condition

  if($conn->connect_error) {

    die("Connection failed:".$conn->connect_error);
  }

?>