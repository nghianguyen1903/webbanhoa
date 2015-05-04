<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ProductCategories;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'cat_id')->dropDownList(ArrayHelper::map(ProductCategories::find()->all(), 'cat_ID', 'cat_name')) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'description_image')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'thumbnail_image')->textInput(['maxlength' => 225]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
