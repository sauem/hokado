<?php


namespace common\helper;


use yii\db\ActiveRecord;

class HelperFunction
{
    static function getImage($path = '')
    {
        return "/static/$path";
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
}
