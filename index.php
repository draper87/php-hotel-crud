<?php

  include __DIR__ . '/env.php';
  include __DIR__ . '/server.php';
  include __DIR__ . '/partials/header.php';

 ?>


     <main>
       <table>
         <thead>
           <tr>
             <th>ID</th>
             <th>Numero stanza</th>
             <th>Piano</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach ($roomArray as $room) { ?>
             <!-- Singola stanza -->
             <tr>
               <td><?php echo $room['id']; ?></td>
               <td><?php echo $room['room_number']; ?></td>
               <td><?php echo $room['floor']; ?></td>
               <td>View</td>
             </tr>
             <!-- Fine singola stanza -->
           <?php } ?>

         </tbody>
       </table>
     </main>


   </body>
 </html>
