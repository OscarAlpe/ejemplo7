<?php
use yii\widgets\DetailView;
use yii\grid\GridView;
?>

<?= DetailView::widget([
    'model' => $model,
]) ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
]) ?>