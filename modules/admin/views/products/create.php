<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;


/* @var $this yii\web\View */
/* @var $model app\models\Products */
// $this->title = Yii::t('app', 'Create {modelClass}', [
//     'modelClass' => 'Products',
// ]);
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product detail'), 'url' => ['index']];

$this->title = 'Create Products';
$this->params['breadcrumbs'][] = ['label' => 'Product', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' =>  Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= $this->render('_form', [
        'model' => $model,
        // 'detail' => $detail,
    ]) ?>



</div>
