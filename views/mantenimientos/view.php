<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mantenimientos */

$this->title = $model->idMantenimiento;
$this->params['breadcrumbs'][] = ['label' => 'Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mantenimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idMantenimiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idMantenimiento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idMantenimiento',
            'fechaProgramacion',
            'descripcionGeneral:ntext',
            [
                'attribute' => 'estado',
                'value' => $model->getEstado(),
            ],
            [
                'label' => $model->getAttributeLabel('nombre'),
                'value' => Html::a($model->nombre, ["equipos/view?id={$model->idEquipo}"]),
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>
