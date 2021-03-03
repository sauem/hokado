<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int|null $product_id
 * @property string|null $product_option
 * @property float|null $total_bill
 * @property float|null $total_discount
 * @property string|null $coupon_code
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'created_at', 'updated_at'], 'integer'],
            [['product_option'], 'string'],
            [['total_bill', 'total_discount'], 'number'],
            [['coupon_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'product_option' => 'Product Option',
            'total_bill' => 'Total Bill',
            'total_discount' => 'Total Discount',
            'coupon_code' => 'Coupon Code',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
