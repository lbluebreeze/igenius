<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Notificaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notificaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idUsuario')->widget(kartik\select2\Select2::className(), [
    	'data' => app\models\Usuarios::getUsuarios(),
    	'language' => 'es',
    	'options' => [
    		'placeholder' => 'Seleccione...',
    	],
		'pluginOptions' => [
			'allowClear' => true,
		],
    ]) ?>

    <!-- <?//= $form->field($model, 'Fecha')->textInput() ?> -->

    <?= $form->field($model, 'Asunto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Detalle')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
