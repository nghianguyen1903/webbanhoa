<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_detail_ID',
            'product_id',
            'price',
            'description',
            'thumbnail_image',
            // 'description_image',
            // 'origin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
