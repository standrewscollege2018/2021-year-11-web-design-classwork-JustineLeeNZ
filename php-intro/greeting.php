<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Say Greeting</title>
  </head>
  <body>

    <?php
      // does name-entered exist
      if(isset($_POST['name-entered'])) {
        // get value for name
        $name = $_POST['name-entered'];

        // display name
        echo "<p>Hi $name</p>";
      }
      else {
        // display error message
        echo "no value for name";
        }
      ?>


  </body>
</html>
