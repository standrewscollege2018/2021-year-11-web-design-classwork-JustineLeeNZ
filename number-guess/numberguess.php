<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
    <?php
      $counter = 1;
      do {
        echo "<a href='checknumber.php?number=$counter'>";
        echo "<div class='card'>Number $counter</div>";
        echo "</a>\n";
        $counter += 1;
      } while ($counter <=10);

     ?>
     </div>
  </body>
</html>
