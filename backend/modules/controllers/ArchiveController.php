<?php

namespace backend\modules\controllers;

use backend\modules\controllers\BaseActiveController;
use common\models\Archives;
use common\models\ArchivesSearch;
use yii\rest\ActiveController;

class ArchiveController extends BaseActiveController
{
    public $modelClass = Archives::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new ArchivesSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }
}
