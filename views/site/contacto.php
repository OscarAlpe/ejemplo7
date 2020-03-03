<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<?php
if (Yii::$app->session->hasFlash('enviadoContacto')) {
    echo '<div class="alert alert-success">';
    echo 'Solicitud de contacto enviada';
    echo '</div>';
}
?>

<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'nombre')->textInput(['autofocus' => true]) ?>
        
            <?= $form->field($model, 'apellidos') ?>

            <?= $form->field($model, 'correo') ?>

            <?= $form->field($model, 'asunto')->dropDownList(['General' => 'General', 'Productos' => 'Productos', 'Reclamación' => 'Reclamación']) ?>

            <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton('Enviar contacto', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
