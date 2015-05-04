<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_ID
 * @property string $username
 * @property string $userpassword
 * @property string $fullname
 * @property string $phone
 * @property string $address
 * @property string $creator
 * @property string $date_of_creation
 * @property string $editor
 * @property string $date_of_edition
 * @property integer $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['username', 'userpassword', 'fullname', 'phone', 'address', 'creator', 'date_of_creation', 'status'], 'required'],
            [['date_of_creation', 'date_of_edition'], 'safe'],
            [['status'], 'integer'],
            [['username', 'userpassword', 'fullname', 'phone', 'address', 'creator', 'editor'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [

            'user_ID' => 'User  ID',
            'username' => 'Username',
            'userpassword' => 'Userpassword',
            'fullname' => 'Fullname',
            'phone' => 'Phone',
            'address' => 'Address',
            'creator' => 'Creator',
            'date_of_creation' => 'Date Of Creation',
            'editor' => 'Editor',
            'date_of_edition' => 'Date Of Edition',
            'status' => 'Status',

        ];
    }
}
