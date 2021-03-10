<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "attributes_variants".
 *
 * @property int $id
 * @property int|null $attribute_id
 * @property string|null $name
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $slug
 * @property string|null $note
 * @property int|null $media_id
 * @property string|null $color
 */
class AttributesVariants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attributes_variants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['attribute_id', 'created_at', 'updated_at', 'media_id'], 'integer'],
            [['name', 'slug', 'note', 'color'], 'string', 'max' => 255],
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
            'attribute_id' => 'Attribute ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'slug' => 'Slug',
            'note' => 'Note',
            'media_id' => 'Media ID',
            'color' => 'Color',
        ];
    }
}
