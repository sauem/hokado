<?php


namespace backend\controllers;


use common\models\Archives;
use common\models\ArchivesSearch;
use Composer\Util\Http\Response;
use yii\web\NotFoundHttpException;

class ArchiveController extends BaseController
{
    public function authUnRequired()
    {
        return ['*']; // TODO: Change the autogenerated stub
    }

    public function actionIndex()
    {
        return $this->render('index.blade');
    }

    public function actionCreate()
    {

    }

    /**
     * @param $id
     * @return bool|Archives|false|int
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        if ($model = $this->findModel($id)) {
            return $model->delete();
        }
        return $model;
    }

    /**
     * @param $id
     * @return Archives
     * @throws NotFoundHttpException
     */
    public function findModel($id)
    {
        $model = Archives::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException('Không tìm thấy trang!');
        }
        return $model;
    }
}
