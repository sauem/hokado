<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seo_meta".
 *
 * @property int $id
 * @property int|null $obj_id
 * @property string|null $obj_type
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keyword
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class SeoMeta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo_meta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['obj_id', 'created_at', 'updated_at'], 'integer'],
            [['meta_title', 'meta_description', 'meta_keyword'], 'string'],
            [['obj_type'], 'string', 'max' => 50],
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
            'obj_type' => 'Obj Type',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keyword' => 'Meta Keyword',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
