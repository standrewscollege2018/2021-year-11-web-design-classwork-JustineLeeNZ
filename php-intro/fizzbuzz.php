<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fizzbuzz</title>
  </head>
  <body>
    <!-- code to play Fizz Buzz -->
    <?php
      // loop from 1 to 100
      $number = 1;

      do {
        // display current value

        if ($number % 5 == 0 AND $number % 3 == 0) {
          echo "<p>FizzBuzz</p>";
        }
        else {
          echo "<p>$number</p>";
        }


        // add 1 to counter
        $number = $number + 1;


      } while ($number <= 100);

     ?>
  </body>
</html>
