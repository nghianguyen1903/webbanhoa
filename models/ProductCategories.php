<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_categories".
 *
 * @property integer $cat_ID
 * @property string $cat_name
 * @property string $creator
 * @property string $date_of_creation
 * @property string $editor
 * @property string $date_of_edition
 * @property integer $status
 *
 * @property Products[] $products
 */
class ProductCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'creator', 'date_of_creation', 'status'], 'required'],
            [['date_of_creation', 'date_of_edition'], 'safe'],
            [['status'], 'integer'],
            [['cat_name', 'creator', 'editor'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_ID' => 'Mã số danh mục',
            'cat_name' => 'Tên danh mục',
            'creator' => 'Người tạo',
            'date_of_creation' => 'Ngày tạo',
            'editor' => 'Người chỉnh sửa',
            'date_of_edition' => 'Ngày chỉnh sửa',
            'status' => 'Trạng thái',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['cat_id' => 'cat_ID']);
    }
}
