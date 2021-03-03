<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment_info".
 *
 * @property int $id
 * @property int|null $payment_id
 * @property string|null $bank_account
 * @property string|null $bank_name
 * @property string|null $bank_number
 * @property string|null $bank_branch
 * @property string|null $note
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class PaymentInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'created_at', 'updated_at'], 'integer'],
            [['bank_account', 'bank_name', 'bank_branch', 'note'], 'string', 'max' => 255],
            [['bank_number'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payment_id' => 'Payment ID',
            'bank_account' => 'Bank Account',
            'bank_name' => 'Bank Name',
            'bank_number' => 'Bank Number',
            'bank_branch' => 'Bank Branch',
            'note' => 'Note',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
