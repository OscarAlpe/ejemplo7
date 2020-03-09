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
                'class' => 'fotoDetalleDetailView',
            ]),
            'contentOptions' => ['style' => 'text-align: center;']
        ]
    ]
]) ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'nombre',
        'descripcion',
        [
            'label' => 'Foto',
            'format' => 'raw',
            'value' => function($data) {
                        return Html::img("@web/imgs/" . $data->foto, [
                            'class' => 'fotoDetalleGridView',
                        ]);
                    },
            'contentOptions' => ['style' => 'text-align: center;']
        ]
    ]
]) ?>