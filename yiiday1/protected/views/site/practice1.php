<?php

$this->pageTitle   = Yii::app()->name.' - Practice One';
$this->breadcrumbs = array(
    'Practice 1',
);
?>

<h1>Print numbers ranging 1-10 with "-" between each number</h1>

<br>

<div class="container">
    <h3><?php echo implode($count_print); ?></h3>
</div>