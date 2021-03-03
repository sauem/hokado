<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $status
 * @property string|null $content
 * @property string|null $excerpt
 * @property string|null $attributes
 * @property float|null $default_price
 * @property float|null $default_sale_type
 * @property float|null $default_sale_price
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'attributes'], 'string'],
            [['default_price', 'default_sale_type', 'default_sale_price'], 'number'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'slug', 'excerpt'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 50],
            [['slug'], 'unique'],
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
            'status' => 'Status',
            'content' => 'Content',
            'excerpt' => 'Excerpt',
            'attributes' => 'Attributes',
            'default_price' => 'Default Price',
            'default_sale_type' => 'Default Sale Type',
            'default_sale_price' => 'Default Sale Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
