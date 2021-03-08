<?php

namespace common\models;

use common\helper\HelperFunction;
use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $href
 * @property string|null $active
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $language
 * @property int|null $media_id
 * @property string|null $page_show
 * @property string|null $type
 * @property string|null $position
 * @property string|null $device
 */
class Banners extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public $avatar;
    const BANNER_IMAGE = 'image';
    const BANNER_VIDEO = 'video';

    public static function tableName()
    {
        return 'banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['page_show', 'safe'],
            [['href', 'avatar'], 'string'],
            [['created_at', 'updated_at', 'media_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['active', 'language', 'type', 'position', 'device'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function extraFields()
    {
        return ['avatar']; // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'href' => 'Href',
            'active' => 'Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'language' => 'Language',
            'media_id' => 'Media ID',
            'page_show' => 'Page Show',
            'type' => 'Type',
            'position' => 'Position',
            'device' => 'Device',
        ];
    }

    public function beforeSave($insert)
    {
        $this->page_show = Json::encode($this->page_show);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public function afterDelete()
    {
        parent::afterDelete(); // TODO: Change the autogenerated stub
        Medias::deleteAll(['obj_id' => $this->id, 'type' => Medias::BANNER_TYPE]);
    }

    public function afterFind()
    {
        parent::afterFind(); // TODO: Change the autogenerated stub
        $this->avatar = $this->media ? HelperFunction::getImage($this->media->path) : null;
        $this->page_show = Json::decode($this->page_show);
    }

    public function getMedia()
    {
        return $this->hasOne(Medias::className(), ['id' => 'media_id'])
            ->where(['medias.type' => Medias::BANNER_TYPE]);
    }
}
