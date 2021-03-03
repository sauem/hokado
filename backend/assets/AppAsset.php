<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://unpkg.com/antd/dist/antd.css',
        '/js/lib/flag-icon-css/css/flag-icon.min.css',
        '/js/lib/gaxon-icon/style.css',
        '/js/lib/perfect-scrollbar/css/perfect-scrollbar.css',
        '/css/lite-style-1.min.css',
        '/css/customize.css?v=1.2',
    ];
    public $js = [
        # 'https://fb.me/react-with-addons-15.0.0.min.js',
        # 'https://cdnjs.cloudflare.com/ajax/libs/redux/3.0.4/redux.min.js',
        #'https://cdnjs.cloudflare.com/ajax/libs/react-redux/4.4.5/react-redux.min.js',
        '/js/lib/react.js',
        '/js/lib/dom.js',
        '/js/lib/babel.js',
        'https://unpkg.com/antd/dist/antd-with-locales.js',
        '/js/lib/axios.js',
        '/js/helper/Constant.js',
        '/js/helper/Helper.js',
        '/js/helper/Actions.js',
        'https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/react-redux/7.2.2/react-redux.min.js',
        'https://unpkg.com/moment/min/moment-with-locales.js',
        '/js/lib/moment/moment.js',
        '/js/lib/bootstrap/dist/js/bootstrap.bundle.min.js',
        '/js/lib/perfect-scrollbar/dist/perfect-scrollbar.min.js',
        '/js/lib/masonry-layout/dist/masonry.pkgd.min.js',
        '/js/lib/sweetalert2/dist/sweetalert2.js',
        '/js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
