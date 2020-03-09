<?php
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Html;
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'nombre',
        'descripcion',
        [
            'label' => 'foto',
            'format' => 'raw',
            'value' => Html::img("@web/imgs/" . $model->foto, [
                'class' => 'fotoDetalle',
            ]),
            'contentOptions' => ['style' => 'text-align: center;']
        ]
    ]
]) ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
]) ?>