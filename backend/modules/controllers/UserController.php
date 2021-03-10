<?php


namespace backend\modules\controllers;


use common\models\UserModel;
use common\models\UserSearch;

class UserController extends BaseActiveFilterController
{
    public $modelClass = UserModel::class;
    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new UserSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }

}
