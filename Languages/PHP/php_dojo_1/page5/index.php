<?php
for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) { // ketika $i adalah kelipatan 3 dan 5
    echo 'FizzBuzz';
  } elseif ($i % 3 == 0) { // ketika $i adalah kelipatan 3
    echo 'Fizz';
  } elseif ($i % 5 == 0) { // ketika $i adalah kelipatan 5
    echo 'Buzz';
  } else {
    echo $i;
  }
  echo '<br>';
}
?>