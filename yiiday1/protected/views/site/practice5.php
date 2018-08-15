<?php

$this->pageTitle   = Yii::app()->name.' - Practice Five';
$this->breadcrumbs = array(
    'Practice 5',
);
?>

<h1>Fizz Buzz</h1>

<div class="row">
    <label>List of numbers ranging 1-1000:</label>
</div>
<br>
<div class="row">
    <select multiple class="multiple">
        <?php
        foreach ($fizz_buzz as $fb) {
            echo '<option>"'.($fb).'"</option>';
        }
        ?>
    </select>
</div>
