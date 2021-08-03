<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // check if number exists in GET array
    if(isset($_GET['number'])) {
      // get value of number from GET array & store in variable
      $guess = $_GET['number'];

      // display value of variable (echo)
      echo "<p>You chose $guess</p>";
    }
    else {
      echo "no value supplied for number";
    }




     ?>

  </body>
</html>
