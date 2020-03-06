<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>

 <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'nombre',
        'descripcion',
        [
            'attribute' => 'foto',
            'label' => 'foto',
            'content' => function($data) {
                return Html::a(Html::img('@web/imgs/' . $data["foto"], ['width' => '400px']), ['site/detallecategoria','id'=>$data->id]);
            }
        ],
     ]
 ]) ?>