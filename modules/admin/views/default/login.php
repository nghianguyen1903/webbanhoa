<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params[][] = $this->title;
?>
<div class="site-login">



    <?php $form = ActiveForm::begin([
        'id' => 'formID',
         // 'action' => '/Dashboard',
    ]); ?>
    <div class="modal-content form-create">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
        <div class="form-group">
                <div class="form-info">
                    <div class="input-group">

                        <?= $form->field($model, 'username')?>
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <div class="pull-left failed-login"><?php echo 'error'; ?></div>
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-primary-login submit', 'name' => 'login-button']) ?>
        </div>



    <?php ActiveForm::end(); ?>

</div>


<!-- <form id="formID" class="formular" method="post">
        <div class="modal-content form-create">
            <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
        <div class="modal-body"> -->
            <!--User name-->
            <!-- <div class="form-group">
                <div class="form-info">
                    <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                        <i class="fa fa-user"></i>
                        </span>
                        <input type="text" required name="user-name" class="form-control input-circle-right  text-input" placeholder="User name..">
                    </div>
                </div>
            </div> -->

            <!--Password-->
            <!-- <div class="form-group">
                <div class="form-info">
                    <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                        <i class="fa fa-key"></i>
                        </span>
                        <input type="password" required name="password" class="form-control input-circle-right validate[required] text-input" placeholder="Password">
                    </div>
                </div>
            </div>


        </div>
            <div class="modal-footer">
                <p class="pull-left failed-login">Login failed</p>
                <button type="submit" class="btn btn-primary btn-primary-login submit">Login</button>
            </div>
        </div>
</form> -->