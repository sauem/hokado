<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $message
 * @property int|null $media_id
 * @property string|null $position
 * @property string|null $company
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['media_id', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['position', 'company'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'message' => 'Message',
            'media_id' => 'Media ID',
            'position' => 'Position',
            'company' => 'Company',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
