<?php

$this->pageTitle   = Yii::app()->name.' - Practice Two';
$this->breadcrumbs = array(
    'Practice 2',
);
?>

<h2>Sum of numbers between 0-30</h2>

<div class="container">
    <div class="row">
        <div class="form">
            <label>Sum of numbers between 0-30 is:</label>
            <input type="text" value="<?php echo $sum; ?>">
        </div>
    </div>
</div>
