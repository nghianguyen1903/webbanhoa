<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductDetail */

$this->title = 'Update Product Detail: ' . ' ' . $model->product_detail_ID;
$this->params['breadcrumbs'][] = ['label' => 'Product Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_detail_ID, 'url' => ['view', 'id' => $model->product_detail_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
