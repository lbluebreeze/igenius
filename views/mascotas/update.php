<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mascotas */

$this->title = 'Update Mascotas: ' . ' ' . $model->idMascota;
$this->params['breadcrumbs'][] = ['label' => 'Mascotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMascota, 'url' => ['view', 'id' => $model->idMascota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mascotas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
