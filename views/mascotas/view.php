<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mascotas */

$this->title = 'Detalles de mascota';
if (Yii::$app->user->identity->id_rol === 1) {
    $this->params['breadcrumbs'][] = ['label' => 'Mascotas', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="mascotas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= (Yii::$app->user->identity->id_rol === 1) ? Html::a('Update', ['update', 'id' => $model->idMascota], ['class' => 'btn btn-primary']) : '' ?>
        <?= (Yii::$app->user->identity->id_rol === 1) ? Html::a('Delete', ['delete', 'id' => $model->idMascota], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) : '' ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idMascota',
            'nombre',
            'raza',
            [
                'attribute' => 'idTipoMascota',
                'value' => ($model->getTipo()) ? $model->getTipo() : $model->idTipoMascota,
            ],
            'anoNacimiento',
            [
                'attribute' => 'estado',
                'value' => $model->getEstado(),
            ]
        ],
    ]) ?>

</div>
