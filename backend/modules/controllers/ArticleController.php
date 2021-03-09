<?php


namespace backend\modules\controllers;


use common\helper\HelperFunction;
use common\models\Articles;
use common\models\ArticlesSearch;
use common\models\SeoMeta;
use Composer\DependencyResolver\Transaction;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use function Webmozart\Assert\Tests\StaticAnalysis\null;

class ArticleController extends BaseActiveFilterController
{
    public $modelClass = Articles::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
       # unset($actions['update']);
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }


    public function actionCreate()
    {
        $model = new Articles();
        try {
            return $this->fetchData(\Yii::$app->request->post(), $model);
        } catch (BadRequestHttpException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
    }

    public function actionUpdate($id)
    {
        $model = Articles::findOne($id);
        if (!$model) {
            throw new BadRequestHttpException('Not found article');
        }
        try {
            return $this->fetchData(\Yii::$app->request->getBodyParams(), $model);
        } catch (BadRequestHttpException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
    }

    /**
     * @param $post
     * @param ActiveRecord $model
     * @throws BadRequestHttpException
     */
    private function fetchData($post, Articles $model)
    {
        try {
            $transaction = \Yii::$app->getDb()->beginTransaction(\yii\db\Transaction::SERIALIZABLE);
            if (\Yii::$app->request->isPost && $model->load($post, '')) {
                if (!$model->save()) {
                    throw new BadRequestHttpException(HelperFunction::firstError($model));
                }
                SeoMeta::createMeta([
                    'obj_id' => $model->id,
                    'obj_type' => SeoMeta::META_ARTICLE,
                    'meta_title' => ArrayHelper::getValue($post, 'meta_title', null),
                    'meta_keyword' => ArrayHelper::getValue($post, 'meta_keyword', null),
                    'meta_description' => ArrayHelper::getValue($post, 'meta_description', null),
                ], $model->isNewRecord);
                $transaction->commit();
                return true;
            }
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new ArticlesSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }
}
