<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "archives".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property int|null $active
 * @property string|null $description
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Archives extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'archives';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
            [['name', 'slug'], 'required'],
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
            'active' => 'Active',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getMedia()
    {

    }

}
