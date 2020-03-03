<?php
use app\widgets\Miniaturas;
?>

<div class="col-sm-6 col-md-6">
    <?= Miniaturas::widget([
        'id' => $model->id,
        'nombre' => $model->nombre,
        'descripcion' => $model->descripcion,
        'foto' =>  $model->foto,
    ]) ?>
</div>