<?php

namespace backend\modules\controllers;

use common\helper\HelperFunction;
use common\models\Archives;
use common\models\Common;
use common\models\Medias;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class DefaultController extends BaseActiveController
{
    public $modelClass = Archives::class;

    /**
     * @return bool|false|int
     * @throws BadRequestHttpException
     * @throws \Throwable
     */
    public function actionRemoveMedia()
    {
        $media_id = \Yii::$app->request->post('media_id');
        try {
            $media = Medias::findOne($media_id);
            if (!$media) {
                throw new BadRequestHttpException('Media not found!');
            }
            return $media->delete();
        } catch (\Exception $exceptione) {
            throw new BadRequestHttpException($exceptione->getMessage());
        }
    }
}
