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
}
