<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';

?>
<div class="container text-center text-white font-weight-bold" style="font-size:30px">
<img src="images/logo.png" alt="HTML5 Icon" style="width:80px;height:80px;">
Probe Monitoring System</div>

<div class="container-fluid">
    <div class="row align-items-center justify-content-md-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-5-strong" style="background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);">

                <div class="site-login">
                <h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>

                <div class="row justify-content-md-center">
                <div class="col-lg-10  ">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div style="color:#333333;margin:1em 0">
                    Already have an Account? <?= Html::a('Login', ['site/login']) ?>
                </div>
                <div class="form-group" >
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-lg btn-block', 'name' => 'signup-button']) ?>
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
