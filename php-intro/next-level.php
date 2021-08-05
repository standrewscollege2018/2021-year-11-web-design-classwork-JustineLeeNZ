<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Process user input from GET array</title>
  </head>
  <body>
    <?php
       // get user choice from GET array
       $door_number = $_GET['door'];

      // display message based on user input
       echo "<p>You chose door $door_number</p>";

       // if door 1 chosen say "Phew, you made the right choice"
       // else say "Sorry, you're off to the dungeon"

       if($door_number == 1) {
         echo "Phew, you made the right choice";
       }
       else {
         echo "Sorry, you're off to the dungeon";
       }




    ?>
  </body>
</html>
