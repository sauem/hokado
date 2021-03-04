<?php


namespace backend\modules\controllers;


use common\models\ArchivesSearch;
use mdm\admin\components\AccessControl;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;

class BaseActiveController extends ActiveController
{
    public function init()
    {
        parent::init();
        $this->enableCsrfValidation = false;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['authenticator']);
        unset($behaviors['access']);
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
        ];

//        $behaviors['authenticator'] = [
//            'class' => CompositeAuth::className()
//        ];
//        $behaviors['authenticator']['except'] = $this->unRequiredAuthAction();
        $behaviors['access'] = [
            'class' => AccessControl::class,
            'allowActions' => [
                'site/login',
                '*'
            ]
        ];

        return $behaviors;
    }



    /**
     * @throws BadRequestHttpException
     */
    public function actionError()
    {
        $exception = \Yii::$app->errorHandler->exception;
        throw new BadRequestHttpException($exception->getMessage());
    }
}
