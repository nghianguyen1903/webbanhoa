<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = 'Update Products: ' . ' ' . $model->product_ID;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_ID, 'url' => ['view', 'id' => $model->product_ID]];
$this->params['breadcrumbs'][] = 'Update';
// $this->title = Yii::t('app', 'Update {modelClass}: ', [
//     'modelClass' => 'Products',
// ]) . ' ' . $model->product_ID;

// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->product_ID, 'url' => ['view', 'id' => $model->id]];
// $this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="products-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        // 'detail' => $detail,
    ]) ?>

</div>
