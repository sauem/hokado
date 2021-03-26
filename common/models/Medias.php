<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\BadRequestHttpException;

/**
 * This is the model class for table "medias".
 *
 * @property int $id
 * @property string|null $path
 * @property string|null $type
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $media_type
 * @property int|null $status
 * @property int|null $obj_id;
 */
class Medias extends BaseModel
{
    const STATUS_TRASH = 0;
    const STATUS_USING = 1;
    const ARCHIVE_TYPE = 'archive';
    const PRODUCT_TYPE = 'product';
    const PRODUCT_THUMB_TYPE = 'thumb';
    const BANNER_TYPE = 'banner';
    const ARTICLE_TYPE = 'article';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['path'], 'string'],
            [['created_at', 'updated_at', 'obj_id', 'status'], 'integer'],
            [['type'], 'string', 'max' => 50],
            [['media_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'media_type' => 'Media Type',
            'status' => 'Status',
            'obj_id' => 'Ảnh'
        ];
    }

    public function getData($uploadForm)
    {
        $this->path = $uploadForm->url;
        $this->type = $uploadForm->type;
        # $this->media_type = $uploadForm->fileType;
        $this->status = self::STATUS_TRASH;
    }

    static function saveObj($media_id, $obj_id, $type = Medias::ARCHIVE_TYPE, $path = null, $update = false)
    {
        try {
            if ($media_id) {
                $model = Medias::findOne($media_id);
                $model->obj_id = $obj_id;
                return $model->save();
            }

            $model = new Medias();
            $model->obj_id = $obj_id;
            $model->status = Medias::STATUS_USING;
            return $model->save();
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    /**
     * @param $thumbs
     * @throws BadRequestHttpException
     */
    static function saveThumbnail($thumbs, $obj_id)
    {
        try {
            Medias::updateAll(['obj_id' => $obj_id, 'status' => 1, 'type' => Medias::PRODUCT_THUMB_TYPE], ['id' => $thumbs]);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    static function removeObj($obj_id, $type)
    {
        try {
            Medias::deleteAll([
                'obj_id' => $obj_id,
                'type' => $type
            ]);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }
}
