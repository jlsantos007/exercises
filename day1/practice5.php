<?php

class PracticeFive
{
    public function multiple()
    {
        for ($counter = 1; $counter <= 1000; $counter++) {
            if ($counter % 3 === 0 && $counter % 5 === 0) {
                echo "FizzBuzz <br>";
            } elseif ($counter % 3 === 0) {
                echo "Fizz <br>";
            } elseif ($counter % 5 === 0) {
                echo "Buzz <br>";
            } else {
                echo $counter."<br>";
            }
        }
    }
}

$practice_five = new PracticeFive();
$practice_five->multiple();

