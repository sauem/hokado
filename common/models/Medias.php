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

    static function saveObj($media_id, $obj_id, $type = Medias::ARCHIVE_TYPE)
    {
        try {
            $model = Medias::findOne(['obj_id' => $obj_id]);
            if ($model) {
                $model->delete();
            }
            $model = Medias::findOne($media_id);
            $model->obj_id = $obj_id;
            $model->status = Medias::STATUS_USING;
            $model->save();
            return Medias::deleteAll(['status' => Medias::STATUS_TRASH]);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }
}
