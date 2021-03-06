<?php


namespace backend\controllers;


class BannerController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index.blade');
    }
}
