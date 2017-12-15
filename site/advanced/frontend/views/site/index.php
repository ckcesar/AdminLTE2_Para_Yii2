<?php

/* @var $this yii\web\View */

$this->title = 'Movimente';

//Página index onde  roda as views.......

if(!isset(Yii::$app->user->identity->username)){
    echo "<script>location.href='index.php?r=site/login';</script>";
}

?>