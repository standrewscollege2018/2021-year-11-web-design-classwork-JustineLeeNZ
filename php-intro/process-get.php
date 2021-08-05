<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Which link was clicked?</title>
  </head>
  <body>
    <?php
      // check if anything sent in GET array
      if (isset($_GET['number'])) {
        $number = $_GET['number'];

        echo "You clicked link number $number";
      }
      else {
        echo "No info sent on GET array";
      }


     ?>

  </body>
</html>
