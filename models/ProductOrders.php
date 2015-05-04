<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_orders".
 *
 * @property integer $product_order_ID
 * @property integer $customer_id
 * @property string $date_of_creation
 * @property string $approver
 * @property string $date_of_approval
 * @property string $editor
 * @property string $date_of_edition
 * @property string $date_of_shipping
 * @property string $place_of_shipping
 * @property integer $total_order_price
 * @property integer $status
 * @property string $note
 *
 * @property ProductOrderDetail[] $productOrderDetails
 * @property Customers $customer
 */
class ProductOrders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'date_of_creation', 'place_of_shipping', 'total_order_price', 'status'], 'required'],
            [['customer_id', 'total_order_price', 'status'], 'integer'],
            [['date_of_creation', 'date_of_approval', 'date_of_edition', 'date_of_shipping'], 'safe'],
            [['approver', 'editor', 'place_of_shipping', 'note'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_order_ID' => 'Product Order  ID',
            'customer_id' => 'Customer ID',
            'date_of_creation' => 'Date Of Creation',
            'approver' => 'Approver',
            'date_of_approval' => 'Date Of Approval',
            'editor' => 'Editor',
            'date_of_edition' => 'Date Of Edition',
            'date_of_shipping' => 'Date Of Shipping',
            'place_of_shipping' => 'Place Of Shipping',
            'total_order_price' => 'Total Order Price',
            'status' => 'Status',
            'note' => 'Note',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductOrderDetails()
    {
        return $this->hasMany(ProductOrderDetail::className(), ['order_id' => 'product_order_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['customer_ID' => 'customer_id']);
    }
}
