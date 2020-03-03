<?php
    use yii\widgets\ListView;
?>
<div class="row">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_productos',
        'layout' => '<div>{summary}</div><br /><div class="container container-fluid">{items}</div><div>{pager}</div>',
    ]); ?>
</div>
