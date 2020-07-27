<?php

include __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';

  $room = $_POST['formid'];

  $sql = "DELETE FROM `stanze` WHERE `id` = '$room'";

  $result = $conn->query($sql);

  if ($result) {
    echo 'Cancellazione avvenuta con successo' . '<br>';
    echo '<a href="' . $localhost . '">' . 'Torna alla pagina principale' . '</a>';
  } else {
    die('Query error');
  }

 ?>
