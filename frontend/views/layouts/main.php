<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="page-wrapper">
    <?= $this->render('../parts/header') ?>
    <?= $this->render('../parts/banner') ?>
    <?= $content ?>
    <?= $this->render('../parts/footer') ?>
</div>
<div class="search-popup">
    <button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
    <button class="close-search"><span class="icofont-arrow-up"></span></button>
    <form method="post" action="https://htmldemo.hasthemes.com/consultix/consultix/blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
