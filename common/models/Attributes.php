<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "attributes".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $type
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $note
 */
class Attributes extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attributes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'slug', 'type', 'note'], 'string', 'max' => 255],
            [['slug'], 'unique'],
            [['name', 'slug'], 'unique'],
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
            'slug' => 'Slug',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'note' => 'Note',
        ];
    }
}
