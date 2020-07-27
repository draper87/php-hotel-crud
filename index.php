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
               <td>
                <a href="<?php echo $localhost . '/view/view.php?id=' . $room['id']; ?>">View</a>
                  -
                <a href="<?php echo $localhost . '/update/edit.php?id=' . $room['id']; ?>">Change</a>

                <form action="<?php echo $localhost. '/delete/delete.php' ?>" method="post">
                  <input type="hidden" name="formid" value="<?php echo $room['id']; ?>">
                 <input type="submit" value="Delete">
               </form>
               </td>
             </tr>
             <!-- Fine singola stanza -->
           <?php } ?>

         </tbody>
       </table>
     </main>


   </body>
 </html>
