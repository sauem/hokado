<?php


namespace backend\controllers;


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

    public function actionCategory()
    {
        return $this->render('category.blade');
    }
}
