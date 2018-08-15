<?php

$this->pageTitle   = Yii::app()->name.' - Practice 6';
$this->breadcrumbs = array(
    'Practice 6',
);
?>

<h1 align="center">Book Fine Calculation</h1>

<br>

<div class="container">
    <table>
        <tr>
            <th>Book Title</th>
            <th>Books Expected turned Date</th>
            <th>Books Returned Date</th>
            <th>Fine</th>
        </tr>
        <tbody>
        <tr>
            <td>Book 1</td>
            <td>9-25-2015</td>
            <td>9-29-2015</td>
            <td><?php echo $book_fine; ?></td>
        </tr>
        </tbody>
    </table>
</div>
