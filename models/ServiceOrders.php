<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_orders".
 *
 * @property integer $service_order_ID
 * @property integer $customer_id
 * @property string $date_of_creation
 * @property string $approver
 * @property string $date_of_approval
 * @property string $editor
 * @property string $date_of_edition
 * @property string $date_do_service
 * @property string $place_do_service
 * @property integer $deposit
 * @property integer $proceeds
 * @property integer $total_price
 * @property string $requirement
 * @property integer $status
 *
 * @property Customers $customer
 */
class ServiceOrders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'date_of_creation', 'place_do_service', 'status'], 'required'],
            [['customer_id', 'deposit', 'proceeds', 'total_price', 'status'], 'integer'],
            [['date_of_creation', 'date_of_approval', 'date_of_edition', 'date_do_service'], 'safe'],
            [['approver', 'editor', 'place_do_service', 'requirement'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_order_ID' => 'Service Order  ID',
            'customer_id' => 'Customer ID',
            'date_of_creation' => 'Date Of Creation',
            'approver' => 'Approver',
            'date_of_approval' => 'Date Of Approval',
            'editor' => 'Editor',
            'date_of_edition' => 'Date Of Edition',
            'date_do_service' => 'Date Do Service',
            'place_do_service' => 'Place Do Service',
            'deposit' => 'Deposit',
            'proceeds' => 'Proceeds',
            'total_price' => 'Total Price',
            'requirement' => 'Requirement',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['customer_ID' => 'customer_id']);
    }
}
