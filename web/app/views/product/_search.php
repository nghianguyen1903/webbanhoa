<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_ID') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'creator') ?>

    <?= $form->field($model, 'date_of_creation') ?>

    <?php // echo $form->field($model, 'editor') ?>

    <?php // echo $form->field($model, 'date_of_edition') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
