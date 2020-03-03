<?php
use yii\helpers\Html;
?>

<div class="col-sm-6 col-md-6">
  <div class="thumbnail">
    <div style="text-align: center; margin-top: 5%;">
    <?= Html::img('@web//imgs/' . $model->foto, ['width' => '400px']) ?>
    </div>
    <div class="caption">
      <h3><?= $model->id ?></h3>
      <p><?= $model->nombre ?></p>
      <p><?= $model->descripcion ?></p>
    </div>
  </div>
</div>