<?php

$this->pageTitle   = Yii::app()->name.' - Practice Three';
$this->breadcrumbs = array(
    'Practice 3',
);
?>

    <h1>Right Triangle</h1>

<?php
foreach ($right_triangle as $triangle) {
    echo implode($triangle);
    echo "<br>";
}
?>