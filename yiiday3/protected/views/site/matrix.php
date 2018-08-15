<?php

$this->pageTitle   = Yii::app()->name.' - Practice 10';
$this->breadcrumbs = array(
    'Practice 10',
);
?>

<h1 align="center">Matrix Anti-Clockwise Rotation</h1>

<table>
    <?php
    foreach ($matrix as $mx) {
        echo '<tr>'.implode($mx).'</tr>';
    }
    ?>
</table>

<table>
    <?php
    foreach ($new_matrix as $rm) {
        echo '<tr>'.implode($rm).'</tr>';
    }
    ?>
</table>