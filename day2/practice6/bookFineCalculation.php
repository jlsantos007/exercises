<?php

class BookFineCalculator
{
    public function getFine()
    {
        $expected_year  = 2015;
        $expected_month = 9;
        $expected_day   = 25;
        $returned_year  = 2015;
        $returned_month = 9;
        $returned_day   = 29;
        $book_fine      = 0;

        if ($returned_day >= $expected_day && $returned_month === $expected_month && $returned_year === $expected_year) {
            $book_fine = abs($expected_day - $returned_day) * 15;
            echo number_format($book_fine, 2, '.', ',');
        } elseif ($returned_day >= $expected_day && $returned_month > $expected_month && $returned_year === $expected_year) {
            $book_fine = abs($expected_month - $returned_month) * 500;
            echo number_format($book_fine, 2, '.', ',');
        } elseif ($returned_year > $expected_year) {
            echo number_format(10000, 2, '.', ',');
        } else {
            echo number_format(0, 2);
        }

        return $book_fine;
    }
}

$fine_calculator = new BookFineCalculator();
$fine_calculator->getFine();
