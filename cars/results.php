<?php
  include("dbconnect.php");
 ?>
<!-- Get the value entered in the search field and store it in a variable
  Make sure you check if it is set first -->
  <?php
    $search = $_POST['search_text'];
   ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search results</title>
  </head>
  <body>
    <!-- Search the car table to see if there are any cars that have a
          numberplate, make or model that matches the search.
          If there are, display them in a do while loop.
          If not, display "No results found". -->

        <?php
          $cars_sql = "SELECT numberplate FROM car WHERE numberplate = '$search'";
          $cars_qry = mysqli_query($dbconnect, $cars_sql);

          // check if there any results
          if(mysqli_num_rows($cars_qry == 0))
           {
              echo "No results";
           }
           else {

            $cars_aa = mysqli_fetch_assoc($cars_qry);



            do {
              $numberplate = $cars_aa['numberplate'];
              ?>
              <div class="card">
                <h1><?php echo "$numberplate";  ?></h1>
              </div>
              <?php
            } while ($cars_aa = mysqli_fetch_assoc($cars_qry));
          }
        ?>



  </body>
</html>
