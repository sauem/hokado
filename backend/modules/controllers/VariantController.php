<?php


namespace backend\modules\controllers;


use common\models\AttributesVariants;
use common\models\AttributesVariantsSearch;

class VariantController extends BaseActiveFilterController
{
    public $modelClass = AttributesVariants::class;
    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new AttributesVariantsSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }

}
