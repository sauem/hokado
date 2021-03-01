<?php


namespace backend\controllers;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class BaseController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
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
                '@backend/views/site/error.php',
                [
                    'message' => $exception->getMessage()
                ]
            );
        }
    }
}
