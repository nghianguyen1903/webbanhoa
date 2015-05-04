<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductDetail */

$this->title = 'Create Product Detail';
$this->params['breadcrumbs'][] = ['label' => 'Product Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
