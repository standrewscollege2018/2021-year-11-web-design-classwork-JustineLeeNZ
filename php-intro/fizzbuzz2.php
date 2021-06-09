<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fizzbuzz 2</title>
  </head>
  <body>
    <!-- code to play Fizz Buzz -->
    <!-- runs for the number of times specified in enter-number.php -->
    <?php
      // get number entered in form
      $stop_value = $_POST['stop_value'];


      // set initial counter value
      $number = 1;

      // loop from 1 to end value
      do {
        // display current value

        // divisible by both 5 and 3
        if ($number % 5 == 0 AND $number % 3 == 0) {
          echo "<p>FizzBuzz</p>";
        }
        // divisible by 5 but not 3
        elseif ($number % 5 == 0) {
          echo "<p>Buzz</p>";
        }
        // divisible by 3 but not 5
        elseif ($number % 3 == 0) {
          echo "<p>Fizz</p>";
        }
        // not divisible by either 3 or 5
        else {
          echo "<p>$number</p>";
        }


        // add 1 to counter
        $number = $number + 1;


        // continue until greater than number specified
      } while ($number <= $stop_value);

     ?>
  </body>
</html>
