<?php


namespace backend\modules\controllers;


use common\models\Banners;
use common\models\BannersSearch;

class BannerController extends BaseActiveFilterController
{
    public $modelClass = Banners::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new BannersSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }
}
