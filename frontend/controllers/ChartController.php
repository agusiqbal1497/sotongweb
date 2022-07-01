<?php

namespace frontend\controllers;

use yii\web\Controller;

class ChartController extends Controller{

    public function actionChart1()
    {

        return $this->render('chart1');
    }

}