<?php
// use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'product_ID',
            'product_name',
            // lay cat_name bang cat ID
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'cat_name',
                'value' => function($data){
                    $name = $data->cat->cat_name;
                    return $name;
                }
            ],

            // 'date_of_creation',
            // 'editor',
            // 'date_of_edition',
            // 'status',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'price',
                'value' => function($data){
                    $price = $data->productDetails['price'];
                    return $price;
                }
            ],

            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'description',
                'value' => function($data){
                    $description = $data->productDetails['description'];
                    return $description;
                }
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
