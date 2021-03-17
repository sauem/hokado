<?php


namespace common\helper;


use common\models\Common;
use common\models\Medias;
use yii\db\ActiveRecord;
use yii\web\BadRequestHttpException;

class HelperFunction
{
    static function getImage($path = '', $id = null, $type = '')
    {
        if ($path) {
            return "/static$path";
        }
        $model = Medias::findOne($id);
        if (!$model) {
            return "/static/$path";
        }
        return "/static/$model->path";
    }

    static function printf($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        exit;
    }

    static function firstError($model)
    {
        $modelErrs = $model->getFirstErrors();
        foreach ($modelErrs as $err) {
            return $err;
        }
        return "No error founded";
    }

    public static function getMedia($id)
    {
        $media = Medias::findOne($id);
        if (!$media) {
            return '/theme/images/logo.png';
        }
        return "/static/$media->path";
    }

    public static function setting($key, $getLang = false)
    {
        $lang = \Yii::$app->language;
        return \Yii::$app->settings->get('Common', $key . ($getLang == true && $lang == LANG_EN ? '_' . $lang : ''));
    }

    public static function getLogo($key = 'header')
    {
        $logo = \Yii::$app->settings->get('Common', "logo_$key");
        if (!$logo) {
            return '/usvn/images/logo/USVN.png';
        }
        $model = Medias::findOne($logo);
        if (!$model) {
            return '/usvn/images/logo/USVN.png';
        }
        return "/static$model->path";
    }

    public static function Language($lang = 'vi')
    {
        return \Yii::$app->language == $lang;
    }

    public static function getLanguage()
    {
        return \Yii::$app->language === 'vi-VN' ? 'vi' : 'en';
    }

    public static function Link($type = BLOG, $slug = '')
    {
        return "$type/$slug";
    }
}
