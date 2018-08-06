<?php

class PracticeOne
{
    public function incrementNumber()
    {
        for ($counter = 1; $counter <= 10; $counter++) {
            if ($counter <= 9) {
                echo $counter."-";
            } else {
                echo $counter;
            }
        }
    }
}

$practice_one = new PracticeOne();
$practice_one->incrementNumber();

