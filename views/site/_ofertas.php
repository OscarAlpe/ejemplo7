<?php
use yii\helpers\Html;
?>

<div class="col-sm-6 col-md-6">
  <div class="thumbnail">
    <?= Html::img('@web//imgs/' . $model->foto, ['width' => '400px']) ?>
    <div class="caption">
      <h3><?= $model->id ?></h3>
      <p><?= $model->nombre ?></p>
      <p><?= $model->descripcion ?></p>
    </div>
  </div>
</div>