<?php


namespace backend\modules\controllers;


use common\models\Attributes;
use common\models\AttributesSearch;

class AttributeController extends BaseActiveFilterController
{
    public $modelClass = Attributes::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new AttributesSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }
}
