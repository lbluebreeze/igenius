<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Habitantes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="habitantes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'documento')->textInput() ?>

    <?= $form->field($model, 'sexo')->dropDownList(['M'=>'Masculino', 'F' => 'Femenino']) ?>

    <?= $form->field($model, 'fechaNacimiento')->widget(
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

    <?= $form->field($model, 'emailHabitante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'fecha_mudanza')->widget(
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

    <?= $form->field($model, 'fecha_salida')->widget(
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

    <?= $form->field($model, 'estado')->dropDownList(['1'=>'Activo', '0'=>'Inactivo']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
