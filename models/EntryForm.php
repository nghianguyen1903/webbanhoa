<?php 
namespace app\models;

use yii\base\Model;

/**
*  Demo entry
*/
class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules() 
	{
		return [
			[['name','email'],'required'],
			['email','email'],
		];
	}
	
}
?>