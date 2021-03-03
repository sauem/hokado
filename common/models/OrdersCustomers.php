<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders_customers".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $company
 * @property string|null $country
 * @property string|null $address
 * @property string|null $zipcode
 * @property string|null $city
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $note
 * @property int|null $payment_method
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class OrdersCustomers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders_customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_method', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'company', 'country', 'address', 'city', 'note'], 'string', 'max' => 255],
            [['zipcode'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'company' => 'Company',
            'country' => 'Country',
            'address' => 'Address',
            'zipcode' => 'Zipcode',
            'city' => 'City',
            'phone' => 'Phone',
            'email' => 'Email',
            'note' => 'Note',
            'payment_method' => 'Payment Method',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
