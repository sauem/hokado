<?php


namespace common\models;


use yii\base\Model;

class Common extends Model
{
    public $email;
    public $hotline_1;
    public $hotline_2;
    public $site_name;
    public $address_1;
    public $address_2;
    public $logo_header;
    public $logo_footer;

    public static function tableName()
    {
        return '{{%setting}}'; // TODO: Change the autogenerated stub
    }

    public function rules()
    {
        return [
            [['email', 'site_name', 'hotline_1',
                'hotline_2', 'address_1', 'address_2',
                'logo_header', 'logo_footer'], 'string']
        ];
    }
}
