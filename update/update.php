<?php

  include __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';

  $room_id = $_POST['roomid'];
  $stanza = $_POST['stanza'];
  $piano = $_POST['piano'];
  $letti = $_POST['letti'];

  $sql = "UPDATE `stanze` SET `room_number` = $stanza, `floor` = $piano, `beds` = $letti WHERE `id` = $room_id";

  $result = $conn->query($sql);

  if ($result) {
    echo 'Update avvenuto con successo' . '<br>';
    echo '<a href="' . $localhost . '">' . 'Torna alla pagina principale' . '</a>';
  } else {
    die('Query error');
  }

  $conn->close();

 ?>
