<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_order_detail".
 *
 * @property integer $product_order_detail_ID
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $amount
 * @property integer $total_price
 *
 * @property Products $product
 * @property ProductOrders $order
 */
class ProductOrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'amount', 'total_price'], 'required'],
            [['order_id', 'product_id', 'amount', 'total_price'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_order_detail_ID' => 'Product Order Detail  ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'amount' => 'Amount',
            'total_price' => 'Total Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['product_ID' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(ProductOrders::className(), ['product_order_ID' => 'order_id']);
    }
}
