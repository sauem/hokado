<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use common\helper\HelperFunction;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
$this->params['header_type'] = 'light';
?>
<section class="google-map py-0">
    <div id="map" class="height-500"></div>
    <script src="/usvn/js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&amp;callback=initMap"
            async defer></script>
</section><!-- /.GoogleMap -->

<!-- ==========================
    contact layout 1
=========================== -->
<section class="contact-layout1 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 mb-3">
                <?= $this->render('../parts/form-contact', [
                    'model' => $model
                ]) ?>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-4 offset-lg-1 mb-3">
                <div class="contact-info d-flex flex-column justify-content-between">
                    <div class="bg-img"><img src="/usvn/images/contact/1.jpg" alt="banner"></div>
                    <div>
                        <h4 class="contact-info__title"><?= Yii::t('app', 'usvn_info') ?></h4>
                        <p class="contact-info__desc">
                            <strong><?= Yii::t('app', 'address') ?> :
                                <?= HelperFunction::setting('address_1', true) ?>
                                <br>
                                <?= HelperFunction::setting('address_2', true) ?>
                            </strong>
                        </p>
                        <p class="contact-info__desc">
                            <strong><?= Yii::t('app', 'email') ?> :
                                <a class="text-white"
                                   href="mailto:<?= HelperFunction::setting('email') ?>">
                                    <?= HelperFunction::setting('email') ?></a>
                            </strong>
                        </p>
                        <p class="contact-info__desc">
                            <strong><?= Yii::t('app', 'hotline') ?> :
                                <a class="text-white" href="tel:<?= HelperFunction::setting('hotline_1') ?>">
                                    <?= HelperFunction::setting('hotline_1') ?>
                                </a>
                                <br>
                                <a class="text-white" href="tel:<?= HelperFunction::setting('hotline_2') ?>">
                                    <?= HelperFunction::setting('hotline_2') ?>
                                </a>
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
