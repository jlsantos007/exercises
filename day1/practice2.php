<?php

class PracticeTwo
{
    public function getSum()
    {
        $sum = 0;
        for ($counter = 1; $counter < 30; $counter++) {
            $sum += $counter;
        }

        return $sum;
    }
}

$practice_two = new PracticeTwo();
echo $practice_two->getSum();

