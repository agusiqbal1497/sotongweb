<?php

namespace frontend\controllers;

use yii\web\Controller;

class CobaController extends Controller{

    public function actionCobi(){
        echo 'testing Controller';
    } //url http://localhost/yii-project/frontend/web/index.php?r=coba%2Fcobi

    public function actionCobain()
    {
        return $this->render('cobain');
    }
}