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
    <?php
      // extract carID from GET array
      $carID = $_GET['carID'];

      // set value of carID to value from GET array
      $car_sql = "SELECT car.*, make.make FROM car, make WHERE car.makeID=make.makeID AND car.carID=$carID";
      $car_qry = mysqli_query($dbconnect, $car_sql);
      $car_aa = mysqli_fetch_assoc($car_qry);

      $numberplate = $car_aa['numberplate'];
      $colour = $car_aa['colour'];
      $driver = $car_aa['driver'];
      $make = $car_aa['make'];
      $model = $car_aa['model'];
      $image = $car_aa['image'];
    ?>
    <div class="cardetails">
      <h1><?php echo $numberplate; ?></h1>
      <p>Colour: <?php echo $colour; ?></p>
      <p>Driver: <?php echo $driver; ?></p>
      <p>Make and model: <?php echo "$make $model"; ?></p>
      <img src="images/<?php echo $image  ?>" alt="">

    </div>

  </body>
</html>
