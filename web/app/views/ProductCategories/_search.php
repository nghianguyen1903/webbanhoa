<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductCategoriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-categories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cat_ID') ?>

    <?= $form->field($model, 'cat_name') ?>

    <?= $form->field($model, 'creator') ?>

    <?= $form->field($model, 'date_of_creation') ?>

    <?= $form->field($model, 'editor') ?>

    <?php // echo $form->field($model, 'date_of_edition') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
