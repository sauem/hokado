<?php


namespace backend\modules\controllers;


use common\helper\HelperFunction;
use common\models\Medias;
use common\models\Products;
use common\models\ProductsArchive;
use common\models\ProductsSearch;
use yii\db\Transaction;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;

class ProductController extends BaseActiveFilterController
{
    public $modelClass = Products::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new ProductsSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }

    /**
     * @throws BadRequestHttpException
     */
    public function actionCreate()
    {
        $product = new Products();
        $transaction = \Yii::$app->getDb()->beginTransaction(Transaction::SERIALIZABLE);
        try {
            $postData = \Yii::$app->request->post();

            $archives = ArrayHelper::getValue($postData, 'archive_id', []);
            $thumbnails = ArrayHelper::getValue($postData, 'thumbnails', []);

            $product->load($postData, '');
            if (!$product->save()) {
                throw new BadRequestHttpException(HelperFunction::firstError($product));
            }
            //save avatar
            Medias::saveObj($product->media_id, $product->id, Medias::PRODUCT_TYPE);
            //save archive
            if ($archives) {
                $archives = array_map(function ($archive) use ($product) {
                    return [
                        $archive, $product->id, time(), time()
                    ];
                }, $archives);
                ProductsArchive::saveItems($archives);
            }
            //save thumbs
            if ($thumbnails) {
                Medias::saveThumbnail($thumbnails, $product->id);
            }

            $transaction->commit();
            return $postData;
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return array|mixed|null
     * @throws BadRequestHttpException
     */
    public function actionUpdate($id)
    {
        $product = Products::findOne($id);
        if (!$product) {
            throw new BadRequestHttpException('Product not found!');
        }
        $transaction = \Yii::$app->getDb()->beginTransaction(Transaction::SERIALIZABLE);
        try {
            $postData = \Yii::$app->request->post();
            $archives = ArrayHelper::getValue($postData, 'archive_id', []);
            $thumbnails = ArrayHelper::getValue($postData, 'thumbnails', []);
            $product->load($postData, '');
            if (!$product->save()) {
                throw new BadRequestHttpException(HelperFunction::firstError($product));
            }
            //save avatar
            Medias::saveObj($product->media_id, $product->id, Medias::PRODUCT_TYPE, $product->avatar, $update = true);
            //save archive
            if ($archives) {
                $archives = array_map(function ($archive) use ($product) {
                    return [
                        $archive, $product->id, time(), time()
                    ];
                }, $archives);
                ProductsArchive::saveItems($archives, $product->id, true);
            }
            //save thumbs
            if ($thumbnails) {
                Medias::saveThumbnail($thumbnails, $product->id);
            }

            $transaction->commit();
            return $postData;
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }
}
