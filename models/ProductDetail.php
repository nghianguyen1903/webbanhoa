<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_detail".
 *
 * @property integer $product_detail_ID
 * @property integer $product_id
 * @property integer $price
 * @property string $description
 * @property string $thumbnail_image
 * @property string $description_image
 * @property string $origin
 *
 * @property Products $product
 */
class ProductDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'price', 'description', 'thumbnail_image', 'description_image', 'origin'], 'required'],
            [['product_id', 'price'], 'integer'],
            [['description', 'thumbnail_image', 'description_image', 'origin'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_detail_ID' => 'Product Detail  ID',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'description' => 'Description',
            'thumbnail_image' => 'Thumbnail Image',
            'description_image' => 'Description Image',
            'origin' => 'Origin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['product_ID' => 'product_id']);
    }
}
