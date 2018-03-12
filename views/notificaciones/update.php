<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Notificaciones */

$this->title = 'Update Notificaciones: ' . ' ' . $model->idNotificacion;
$this->params['breadcrumbs'][] = ['label' => 'Notificaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNotificacion, 'url' => ['view', 'id' => $model->idNotificacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notificaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
