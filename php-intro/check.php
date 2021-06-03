<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check name</title>
  </head>
  <body>

    <?php

      $name = $_POST['name-entered'];

      if ($name == 'Rumplestiltskin') {
        echo "How did you know my name!";
      }
      else {
        echo "That's not my name!";
      }




     ?>


  </body>
</html>
