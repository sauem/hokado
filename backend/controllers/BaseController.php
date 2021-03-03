<?php


namespace backend\controllers;


use cyneek\yii2\blade\BladeBehavior;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class BaseController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'blade' => [
                'class' => BladeBehavior::class
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => array_merge(['error'], $this->authUnRequired()),
                        'allow' => true,
                    ],
                    [
                        'actions' => $this->authRequired(),
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function authRequired()
    {
        return [];
    }

    public function authUnRequired()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function actionError()
    {
        $exception = \Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render(
                '@backend/views/site/error.blade',
                [
                    'message' => $exception->getMessage()
                ]
            );
        }
    }

    public function responseAjax($params = [], $view = '')
    {
        if (\Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return $params;
        }
        return $this->render($view, $params);
    }
}
