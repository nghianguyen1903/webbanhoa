<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $customer_ID
 * @property string $customer_name
 * @property string $provice
 * @property string $address
 * @property string $phone
 * @property string $email
 *
 * @property ProductOrders[] $productOrders
 * @property ServiceOrders[] $serviceOrders
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'provice', 'address', 'phone'], 'required'],
            [['customer_name', 'provice', 'address', 'phone', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_ID' => 'Customer  ID',
            'customer_name' => 'Customer Name',
            'provice' => 'Provice',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductOrders()
    {
        return $this->hasMany(ProductOrders::className(), ['customer_id' => 'customer_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceOrders()
    {
        return $this->hasMany(ServiceOrders::className(), ['customer_id' => 'customer_ID']);
    }
}
