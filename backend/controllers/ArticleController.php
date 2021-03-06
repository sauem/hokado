<?php


namespace backend\controllers;


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
}
