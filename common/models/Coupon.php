<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "coupon".
 *
 * @property int $id
 * @property int|null $code
 * @property int|null $description
 * @property string|null $type
 * @property float|null $max
 * @property float|null $min
 * @property string|null $total
 * @property int|null $free_ship
 * @property int|null $exp_date
 * @property float|null $total_bill
 * @property float|null $total_discount
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Coupon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coupon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'description', 'free_ship', 'exp_date', 'created_at', 'updated_at'], 'integer'],
            [['max', 'min', 'total_bill', 'total_discount'], 'number'],
            [['total'], 'string'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'description' => 'Description',
            'type' => 'Type',
            'max' => 'Max',
            'min' => 'Min',
            'total' => 'Total',
            'free_ship' => 'Free Ship',
            'exp_date' => 'Exp Date',
            'total_bill' => 'Total Bill',
            'total_discount' => 'Total Discount',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
