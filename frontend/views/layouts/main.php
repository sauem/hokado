<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\helper\HelperFunction;
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

    <link rel='shortcut icon' type='image/x-icon' href='<?= HelperFunction::Favicon() ?>'/>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="preloader">
        <div class="sk-cube-grid">
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
        </div>
    </div>
    <?= $this->render('../parts/header') ?>

    <?= $content ?>
    <?= $this->render('../parts/footer') ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
