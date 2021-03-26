<?php

namespace common\models;

use Yii;
use yii\web\BadRequestHttpException;

/**
 * This is the model class for table "products_archive".
 *
 * @property int|null $archive_id
 * @property int|null $product_id
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class ProductsArchive extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_archive';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['archive_id', 'product_id', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'archive_id' => 'Archive ID',
            'product_id' => 'Product ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getArchive()
    {
        return $this->hasOne(Archives::className(), ['id' => 'archive_id']);
    }

    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }

    /**
     * @param $data
     * @param int $product_id
     * @param bool $update
     * @throws BadRequestHttpException
     */
    public static function saveItems($data, $product_id = 0, $update = false)
    {
        try {
            if ($update) {
                ProductsArchive::deleteAll(['product_id' => $product_id]);
            }
            Yii::$app->db->createCommand()->batchInsert(ProductsArchive::tableName(), [
                'archive_id', 'product_id', 'created_at', 'updated_at'
            ], $data)->execute();
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    /**
     * @param $obj_id
     * @throws BadRequestHttpException
     */
    static function removeRef($obj_id)
    {
        try {
            ProductsArchive::deleteAll([
                'product_id' => $obj_id
            ]);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }
}
