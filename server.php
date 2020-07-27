<?php

  include __DIR__ . '/database.php';

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
