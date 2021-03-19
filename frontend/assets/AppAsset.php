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
        'https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&amp;family=Roboto:wght@400;700&amp;display=swap',
        '/usvn/css/all.css',
        '/usvn/css/libraries.css',
        '/usvn/css/style.css',
        '/usvn/css/custom.css',
    ];
    public $js = [
        '//cdn.jsdelivr.net/npm/sweetalert2@10',
        'https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js',
        '/usvn/js/plugins.js',
        '/usvn/js/main.js',
        '/usvn/js/templ.js?v=1.6',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        #  'yii\bootstrap\BootstrapAsset',
    ];
}
