<?php


namespace backend\controllers;


use common\models\Articles;
use yii\web\NotFoundHttpException;

class ArticleController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index.blade');
    }

    public function actionCategory()
    {
        return $this->render('category.blade');
    }

    public function actionCreate()
    {
        return $this->render('create.blade');
    }

    public function actionUpdate($id)
    {
        $model = Articles::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException('Bài viết không tồn tại!');
        }
        return $this->render('create.blade');
    }
}
