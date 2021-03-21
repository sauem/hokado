<?php


namespace backend\modules\controllers;


use common\models\Testimonials;
use common\models\TestimonialsSearch;

class TestimonialController extends BaseActiveFilterController
{
    public $modelClass = Testimonials::class;
    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new TestimonialsSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }

}
