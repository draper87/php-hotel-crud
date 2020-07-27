<?php

include __DIR__ . '/../env.php';
include __DIR__ . '/server.php';
include __DIR__ . '/../partials/header.php';

 ?>

 <header>
   <a href="<?php echo $localhost ?>">Torna alla lista delle stanze</a>
 </header>

 <main>



   <h2>Modifica stanza numero: <?php echo $row['room_number']; ?></h2>
   <form action="<?php echo $localhost . '/update/update.php' ?>" method="post">
     <input type="hidden" name="roomid" value="<?php echo $row['id'] ?>">
     <div>
       <label>Numero di stanza</label>
       <input type="text" name="stanza" value="<?php echo $row['room_number']; ?>">
     </div>
     <div>
       <label>Piano</label>
       <input type="text" name="piano" value="<?php echo $row['floor']; ?>">
     </div>
     <div>
       <label>Beds</label>
       <input type="text" name="letti" value="<?php echo $row['beds']; ?>">
     </div>

     <input type="submit" value="Salva">
   </form>

 </main>
