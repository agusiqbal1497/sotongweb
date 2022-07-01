<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>




<body>
<?php $this->beginBody() ?>

<div class="bg-image">
<main role="main">
       
        <?= Alert::widget() ?>
        <?= $content ?>
  
</main>

<?php $this->endBody() ?>
</body>
<style> 
    .bg-image {
        background-image: url('images/www.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }
</style>
</div>
</html>
<?php $this->endPage();
