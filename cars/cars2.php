<?php
  include("dbconnect.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars example</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="content-container">
    <?php
      $cars_sql = "SELECT carID, numberplate FROM car";
      $cars_qry = mysqli_query($dbconnect, $cars_sql);
      $cars_aa = mysqli_fetch_assoc($cars_qry);



      do {
        $carID = $cars_aa['carID'];
        $numberplate = $cars_aa['numberplate'];
        ?>
        <div class="card">
          <p><?php echo "<a href='car2.php?car_id=$carID'>$numberplate</a>"; ?></p>
        </div>
        <?php
      } while ($cars_aa = mysqli_fetch_assoc($cars_qry));
    ?>


    </div>
  </body>
</html>
