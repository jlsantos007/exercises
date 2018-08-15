<?php

$this->pageTitle   = Yii::app()->name.' - Practice 9';
$this->breadcrumbs = array(
    'Practice 9',
);
?>

<h1>Kaprekar Numbers</h1>

<div class="container">
    <div class="row">
        <label>List of Kaprekar Numbers:</label>
    </div>
    <div class="row">
        <select multiple class="multiple">
            <?php
            foreach ($kaprekar_num as $kaprekar) {
                echo '<option>'.$kaprekar.'</option>';
            }
            ?>
        </select>
    </div>
</div>
