<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';

?>
<div class="container text-center text-white font-weight-bold" style="font-size:30px">
    <img src="images/logo.png" alt="HTML5 Icon" style="width:80px;height:80px;">
<h1> Probe Monitoring System </h1></div>

<div class="container-fluid">
    <div class="row align-items-center justify-content-md-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-5-strong" style="background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);">

                 <div class="site-login">
                  <h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>

                 <div class="row justify-content-md-center">
                     <div class="col-lg-10  ">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#333333;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <!-- <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?> -->
                    <br>
                    Don't have an Account? <?= Html::a('Register here', ['site/signup']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-lg btn-block', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
