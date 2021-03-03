<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "medias".
 *
 * @property int $id
 * @property string|null $path
 * @property string|null $type
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Medias extends BaseModel
{
    public const STT_TEMP = 0;
    public const STT_ACTIVE = 1;


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
            [['created_at', 'updated_at','type'], 'integer'],
            #[['type'], 'string', 'max' => 50],
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
        ];
    }

    public function getData($uploadForm)
    {
        $this->path = $uploadForm->url;
        $this->type = $uploadForm->fileType;
    }
}
