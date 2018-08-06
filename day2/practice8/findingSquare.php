<?php

    function isPerfectSquare($x) {

    $square_root = sqrt($x);

    return (($square_root - floor($square_root)) == 0);
    }

    $square_count = 0;

    for ($i=10; $i <= 10000; $i++) { 
      if (isPerfectSquare($i)) {
         echo "<option>$i</option>";
        $square_count++;
      }
    }
     
?>
