<?php

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "booleanhotel";
  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn && $conn->connect_error) {
   echo "Connection failed: " . $conn->connect_error;
 }

  $sql = "SELECT * FROM `stanze`";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $roomArray = [];
   // output data of each row
   while($row = $result->fetch_assoc()) {
    $roomArray[] = $row;
   }
   } elseif ($result) {
   echo "0 results";
   } else {
   echo "query error";
   }

  $conn->close();

 ?>
