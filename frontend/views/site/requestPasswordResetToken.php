<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Request password reset';

?>
<div class="container text-center text-white font-weight-bold" style="font-size:30px">
<img src="images/logo.png" alt="HTML5 Icon" style="width:80px;height:80px;">
Probe Monitoring System</div>

<div class="container-fluid">
    <div class="row align-items-center justify-content-md-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-5-strong" style="background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);">

<div class="site-request-password-reset">
<h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>

<div class="row justify-content-md-center">
<div class="col-lg-10  ">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
