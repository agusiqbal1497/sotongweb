<?php


use yii\grid\GridView;




/** @var yii\web\View $this */

$this->title = 'My Yii Application';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>Dashboard</h1>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Merge</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Raspberry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Android</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Arduino</a>
  </li>
</ul>


<div class="container px-0">
<div class="row">
<?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                // ['class' => 'yii\grid\SerialColumn'],
                'id',
                
    
                // [
                //     "attribute" => "imsi",
                //     'label' => 'IMSI',
                // ],
                
                [
                    "attribute" => "msisdn",
                    'label' => 'MSISDN',
                ],

                [
                    "attribute" => "device",
                    'label' => 'DEVICE',
                ],

                // [
                //     "attribute" => "mccmnc",
                //     'label' => 'mccmnc',
                // ],

                // [
                //     "attribute" => "stu",
                //     'label' => 'stu',
                // ],

                [
                    "attribute" => "slot",
                    'label' => 'slot',
                ],

                [
                    "attribute" => "active",
                    'label' => 'active',
                ],

                [
                    "attribute" => "lastmessage",
                    'label' => 'lastmessage',
                ],

                [
                    "attribute" => "expiry",
                    'label' => 'expiry',
                ],

                [
                    "attribute" => "bill",
                    'label' => 'bill',
                ],

                [
                    "attribute" => "messages",
                    'label' => 'messages',
                ],

                [
                    "attribute" => "last_sent",
                    'label' => 'last_sent',
                ],

                [
                    "attribute" => "last_received",
                    'label' => 'last_received',
                ],

                [
                    "attribute" => "last_update",
                    'label' => 'last_update',
                ],
    
        ]
        // 'responsive' => true,
        // 'hover' => true
    ]);
?>
</div>
</div>