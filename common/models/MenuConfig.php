<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_config".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $items
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class MenuConfig extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['items'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'items' => 'Items',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}