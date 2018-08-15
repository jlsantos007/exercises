<?php

$this->pageTitle   = Yii::app()->name.' - Practice 8';
$this->breadcrumbs = array(
    'Practice 8',
);
?>

<h1>Square of an Integer</h1>
<div class="container">
    <div class="row">
        <label>Integer Range:</label>
    </div>
    <div class="row">
        <input type="text" value="10-10000" disabled>
    </div>
    <br>
    <div class="row">
        <label>Perfect Squares:</label>
    </div>
    <div class="row">
        <select multiple class="multiple">
            <?php
            foreach ($square_root as $sr) {
                echo '<option>'.$sr.'</option>';
            }
            ?>
        </select>
    </div>
    <br>
    <div class="row">
        <label>Number of Perfect Squares:</label>
    </div>
    <div class="row">
        <input type="text" value="<?php echo $square_count; ?>" disabled>
    </div>
</div>
