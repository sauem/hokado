<?php

namespace backend\controllers;

use common\models\Common;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii2mod\settings\actions\SettingsAction;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    public function actions()
    {
        return array_merge(parent::actions(), [
            'settings' => [
                'class' => SettingsAction::class,
                'viewParams' => [],
                'view' => 'settings.blade',
                'on beforeSave' => function ($event) {

                    foreach ($event->form->attributes as $key => $attribute) {
                        if (empty($attribute)) {
                            Yii::$app->settings->remove("Common", $key);
                        }
                    }
                },
                'on afterSave' => function ($event) {

                },
                'modelClass' => Common::class,
            ],
        ]);
    }

    public function authUnRequired()
    {
        return ['login']; // TODO: Change the autogenerated stub
    }

    public function authRequired()
    {
        return [
            'index','settings'
        ]; // TODO: Change the autogenerated stub
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index.blade');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank.blade';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login.blade', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
