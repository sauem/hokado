<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "medias_ref".
 *
 * @property int $id
 * @property int|null $obj_id
 * @property int|null $media_id
 * @property string|null $obj_type
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class MediasRef extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medias_ref';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['obj_id', 'media_id', 'created_at', 'updated_at'], 'integer'],
            [['obj_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'obj_id' => 'Obj ID',
            'media_id' => 'Media ID',
            'obj_type' => 'Obj Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
