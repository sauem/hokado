<?php

namespace common\models;

use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "menu_config".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $items
 * @property string|null $language
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class MenuConfig extends BaseModel
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
            [['name', 'language'], 'string', 'max' => 50],
            [['items'], 'string'],
            //    [['name'], 'unique'],
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
            'language' => 'Language',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
