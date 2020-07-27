<?php

  include __DIR__ . '/../env.php';
  include __DIR__ . '/../partials/header.php';
  include __DIR__ . '/server.php';

 ?>

 <header>
   <a href="<?php echo $localhost ?>">Torna alla lista delle stanze</a>
 </header>

 <main>

   <h2>Stanza numero: <?php echo $row['room_number']; ?></h2>
   <ul>
     <li>ID: <?php echo $row['id']; ?></li>
     <li>Numero stanza: <?php echo $row['room_number']; ?></li>
     <li>Piano: <?php echo $row['floor']; ?></li>
     <li>Letti: <?php echo $row['beds']; ?></li>
     <li>Data di creazione: <?php echo $row['created_at']; ?></li>
   </ul>

 </main>
