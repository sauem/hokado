<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "coupon_rule".
 *
 * @property int $id
 * @property int|null $coupon_id
 * @property string|null $include_products
 * @property string|null $exclude_products
 * @property string|null $include_archives
 * @property string|null $exclude_archives
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CouponRule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coupon_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['coupon_id', 'created_at', 'updated_at'], 'integer'],
            [['include_products', 'exclude_products', 'include_archives', 'exclude_archives'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'coupon_id' => 'Coupon ID',
            'include_products' => 'Include Products',
            'exclude_products' => 'Exclude Products',
            'include_archives' => 'Include Archives',
            'exclude_archives' => 'Exclude Archives',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
