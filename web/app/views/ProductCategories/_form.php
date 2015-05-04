<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'date_of_creation')->textInput() ?>

    <?= $form->field($model, 'editor')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'date_of_edition')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
