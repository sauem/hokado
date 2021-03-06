<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $en_name
 * @property string|null $description
 * @property string|null $en_description
 * @property string|null $href
 * @property string|null $en_href
 * @property string|null $active
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['href', 'en_href'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'en_name'], 'string', 'max' => 100],
            [['description', 'en_description'], 'string', 'max' => 255],
            [['active'], 'string', 'max' => 50],
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
            'en_name' => 'En Name',
            'description' => 'Description',
            'en_description' => 'En Description',
            'href' => 'Href',
            'en_href' => 'En Href',
            'active' => 'Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
