<?php


namespace backend\controllers;


class OrderController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index.blade');
    }

}
