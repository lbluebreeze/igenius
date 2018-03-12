<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MascotasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mascotas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMascota') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'raza') ?>

    <?= $form->field($model, 'idTipoMascota') ?>

    <?= $form->field($model, 'anoNacimiento') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
