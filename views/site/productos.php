<?php
    use yii\widgets\ListView;
?>
<div class="row">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_productos'
    ]); ?>
</div>
