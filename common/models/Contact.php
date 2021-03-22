<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property string|null $type
 * @property string|null $export_country
 * @property int|null $time_exp
 * @property string|null $contact_pre
 * @property string|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Contact extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'name'], 'required'],
            [['message'], 'string'],
            [['time_exp', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 150],
            [['phone', 'type', 'export_country', 'status'], 'string', 'max' => 50],
            [['contact_pre'], 'string', 'max' => 100],
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
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
            'type' => 'Type',
            'export_country' => 'Export Country',
            'time_exp' => 'Time Exp',
            'contact_pre' => 'Contact Pre',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
