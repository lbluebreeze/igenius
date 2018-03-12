<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mantenimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mantenimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($relmodel, 'idEquipo')->widget(kartik\select2\Select2::className(), [
    	'data' => app\models\Equipos::getEquipos(),
    	'language' => 'es',
    	'options' => [
    		'placeholder' => 'Seleccione...',
    	],
		'pluginOptions' => [
			'allowClear' => true,
		],
    ]) ?>

    <?= $form->field($model, 'fechaProgramacion')->widget(
        \yii\jui\DatePicker::className(),
        [
            'dateFormat'=>'yyyy-MM-dd',
            'language'=>'es',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control']
        ]
    ) ?>

    <?= $form->field($model, 'descripcionGeneral')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->dropDownList(['1'=>'Activo', '0'=>'Inactivo']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
