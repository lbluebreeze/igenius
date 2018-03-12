<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculos */

$this->title = 'Update Vehiculos: ' . ' ' . $model->idVehiculo;
$this->params['breadcrumbs'][] = ['label' => 'Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idVehiculo, 'url' => ['view', 'id' => $model->idVehiculo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehiculos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
