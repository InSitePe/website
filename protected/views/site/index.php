<?php

$this->pageTitle = Yii::app()->name;
?>

<?php
if (isset($msg)) {
    echo $msg;
} else {
    echo '';
}
?>