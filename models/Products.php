<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $product_ID
 * @property string $product_name
 * @property integer $cat_id
 * @property string $creator
 * @property string $date_of_creation
 * @property string $editor
 * @property string $date_of_edition
 * @property integer $status
 *
 * @property ProductDetail[] $productDetails
 * @property ProductOrderDetail[] $productOrderDetails
 * @property ProductCategories $cat
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }
    public $price;
    public $description_image;
    public $description;
    public $thumbnail_image;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'cat_id', 'creator', 'date_of_creation', 'status'], 'required'],
            [['cat_id', 'status'], 'integer'],
            [['date_of_creation', 'date_of_edition'], 'safe'],
            [['product_name', 'creator', 'editor','thumbnail_image','description_image', 'description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_ID' => 'Product  ID',
            'product_name' => 'Product Name',
            'cat_id' => 'Cat ID',
            'creator' => 'Creator',
            'date_of_creation' => 'Date Of Creation',
            'editor' => 'Editor',
            'date_of_edition' => 'Date Of Edition',
            'status' => 'Status',
            'description' =>'Description',
            'price' => 'Price',
            'thumbnail_image' => 'Thumbnail Image',
            'description_image' => 'Description Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductDetails()
    {
        return $this->hasOne(ProductDetail::className(), ['product_id' => 'product_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductOrderDetails()
    {
        return $this->hasMany(ProductOrderDetail::className(), ['product_id' => 'product_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    //get cat_name bang cat_ID
    public function getCat()
    {
        return $this->hasOne(ProductCategories::className(), ['cat_ID' => 'cat_id']);
    }

}
