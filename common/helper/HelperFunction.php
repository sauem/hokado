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

    public static function setting($key)
    {
        return \Yii::$app->settings->get('Common', $key);
    }
}
