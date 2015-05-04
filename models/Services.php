<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $service_ID
 * @property string $service_name
 * @property string $description
 * @property string $creator
 * @property string $date_of_creation
 * @property string $editor
 * @property string $date_of_edition
 * @property string $thumbnail_image
 * @property string $description_image
 * @property integer $status
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_name', 'description', 'creator', 'date_of_creation', 'thumbnail_image', 'description_image', 'status'], 'required'],
            [['date_of_creation', 'date_of_edition'], 'safe'],
            [['status'], 'integer'],
            [['service_name', 'description', 'creator', 'editor', 'thumbnail_image', 'description_image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_ID' => 'Service  ID',
            'service_name' => 'Service Name',
            'description' => 'Description',
            'creator' => 'Creator',
            'date_of_creation' => 'Date Of Creation',
            'editor' => 'Editor',
            'date_of_edition' => 'Date Of Edition',
            'thumbnail_image' => 'Thumbnail Image',
            'description_image' => 'Description Image',
            'status' => 'Status',
        ];
    }
}
