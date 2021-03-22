<?php

namespace frontend\controllers;

use common\helper\HelperFunction;
use common\models\Archives;
use common\models\ArchivesSearch;
use common\models\Articles;
use common\models\Banners;
use common\models\Medias;
use common\models\Products;
use common\models\ProductsSearch;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\db\Expression;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends BaseController
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $sliders = Banners::findAll([
            'active' => Banners::BANNER_ACTIVE,
            'language' => HelperFunction::getLanguage(),
            'position' => 'home_slider'
        ]);
        $categories = ArchivesSearch::findAll([
            'active' => Archives::STATUS_ACTIVE,
            'language' => HelperFunction::getLanguage()
        ]);
        $articles = Articles::find()
            ->where([
                'status' => Articles::STATUS_ACTIVE,
                'language' => HelperFunction::getLanguage()
            ])->limit(12)->orderBy('created_at DESC')->all();
        $products = Products::find()
            ->where([
                'status' => Articles::STATUS_ACTIVE,
                'language' => HelperFunction::getLanguage()
            ])->limit(6)->orderBy('created_at DESC')->all();
        return $this->render('index', [
            'sliders' => $sliders,
            'categories' => $categories,
            'articles' => $articles,
            'products' => $products
        ]);
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @return yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionSwitchLanguage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (Yii::$app->request->isPost) {
            $lang = Yii::$app->request->post('lang') == 'en' ? 'en' : 'vi-VN';
            Yii::$app->cache->set('language', $lang);
            Yii::$app->language = $lang;
            return Yii::$app->language;
        }
        return false;
    }

    public function actionProductAndBrief()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('product-and-brief', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * @param $slug
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionProductDetail($slug)
    {
        $model = Products::findOne(['slug' => $slug]);
        if (!$model) {
            throw new NotFoundHttpException(Yii::t('app', 'not_found_product'));
        }
        $nextProduct = Products::find()
            ->filterWhere(['language' => HelperFunction::getLanguage()])
            ->andFilterWhere(['>', 'id', $model->id])
            ->orderBy('created_at DESC')
            ->one();
        $prevProduct = Products::find()
            ->filterWhere(['language' => HelperFunction::getLanguage()])
            ->andFilterWhere(['<', 'id', $model->id])
            ->orderBy('created_at DESC')
            ->one();
        $categories = Archives::find()
            ->filterWhere(['language' => HelperFunction::getLanguage()])
            ->andFilterWhere(['IS', 'parent_id', new Expression('NULL')])
            ->all();
        return $this->render('product-detail', [
            'model' => $model,
            'categories' => $categories,
            'nextProduct' => $nextProduct,
            'prevProduct' => $prevProduct
        ]);
    }

    public function actionGuide()
    {
        return $this->render('guide', [
            'products' => [],
        ]);
    }
}
