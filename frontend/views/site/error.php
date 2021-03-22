<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<section class="page-404 mt--100 py-0 bg-overlay">
    <div class="bg-img"><img src="/usvn/images/banners/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center align-items-center vh-100">
                <div class="error-wrapper text-center">
                    <h1 class="error-code">404</h1>
                    <p class="error__desc">The page requested couldn't be found. This could be a spelling error in the
                        URL or a removed page.
                    </p>
                    <a href="/" class="btn btn__primary btn__icon">
                        <span>Back To Home</span> <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
