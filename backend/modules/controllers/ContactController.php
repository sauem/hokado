<?php


namespace backend\modules\controllers;


use common\models\Contact;
use common\models\ContactSearch;

class ContactController extends BaseActiveFilterController
{
    public $modelClass = Contact::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new ContactSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}
