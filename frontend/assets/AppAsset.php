<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/theme/css/main.css',
        '/theme/css/responsive.css',
        '/theme/css/custom.css',
    ];
    public $js = [
        '/theme/js/popper.min.js',
        '/theme/js/jquery.mCustomScrollbar.concat.min.js',
        '/theme/js/jquery.fancybox.js',
        '/theme/js/appear.js',
        '/theme/js/owl.js',
        '/theme/js/wow.js',
        '/theme/js/parallax.min.js',
        '/theme/js/parallax.min.js',
        '/theme/js/tilt.jquery.min.js',
        '/theme/js/jquery.paroller.min.js',
        '/theme/js/jquery-ui.js',
        '/theme/js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
