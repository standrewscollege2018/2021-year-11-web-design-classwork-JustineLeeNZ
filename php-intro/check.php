<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check name</title>
  </head>
  <body>

    <!-- check whether name matches desired name  -->
    <?php
      // gets value of name
      $name = $_POST['name-entered'];

      // check if name is a match
      if ($name == 'Rumplestiltskin') {
        // display message saying name is correct
        echo "How did you know my name?";
      }
      // name isn't a match
      else {
        // display message saying name isn't correct
        echo "That's not my name!";
      }




     ?>


  </body>
</html>
