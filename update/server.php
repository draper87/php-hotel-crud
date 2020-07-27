<?php

  include __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';

  $stanza = $_GET['id'];

  $sql = "SELECT * FROM `stanze` WHERE `id` = $stanza";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
   // output data of each row
   $row = $result->fetch_assoc();
   } elseif ($result) {
   echo "0 results";
   } else {
   echo "query error";
   }

  $conn->close();

 ?>
