<?php


namespace backend\controllers;


use common\models\Attributes;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

class ProductController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index.blade');
    }

    public function actionCreate()
    {
        return $this->render('create.blade');
    }

    public function actionUpdate()
    {
        return $this->render('create.blade');
    }

    public function actionCategory()
    {
        return $this->render('category.blade');
    }

    public function actionAttribute()
    {
        return $this->render('attribute.blade');
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionAttributeView($id)
    {
        $model = Attributes::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException('Không tìm thấy chỉ mục!');
        }
        return $this->render('attribute-view.blade', [
            'model' => $model
        ]);
    }
}
