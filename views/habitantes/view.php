<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Habitantes */

$this->title = 'Detalles de habitante';
if (Yii::$app->user->identity->id_rol === 1) {
    $this->params['breadcrumbs'][] = ['label' => 'Habitantes', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="habitantes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= (Yii::$app->user->identity->id_rol === 1) ? Html::a('Update', ['update', 'id' => $model->idHabitante], ['class' => 'btn btn-primary']) : '' ?>
        <?= (Yii::$app->user->identity->id_rol === 1) ? Html::a('Delete', ['delete', 'id' => $model->idHabitante], [
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
            // 'idHabitante',
            'nombres',
            'apellidos',
            'documento',
            'sexo',
            'fechaNacimiento',
            'emailHabitante:text',
            'telefono',
            'fecha_mudanza',
            'fecha_salida',
            [
                'attribute' => 'estado',
                'value' => $model->getEstado(),
            ]
        ],
    ]) ?>

    <h3>Mascotas:</h3>

    <?= GridView::widget([
        'dataProvider' => $mascotas,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'idMascota',
                'format' => 'html',
                'value' => function($model, $key, $index, $column){
                    return Html::a($model->idMascota, ["/mascotas/view?id={$model->idMascota}"]);
                }
            ],
            'nombre',
            'tipo',
            'anoNacimiento',
            (Yii::$app->user->identity->id_rol === 1) ? [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'habitante-has-mascota',
                'template' => '{delete}',
            ] : [],
        ],
    ]); ?>

    <h3>Vehículos:</h3>

    <?= GridView::widget([
        'dataProvider' => $vehiculos,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'idVehiculo',
                'format' => 'html',
                'value' => function($model, $key, $index, $column){
                    return Html::a($model->idVehiculo, ["/vehiculos/view?id={$model->idVehiculo}"]);
                }
            ],
            'Placa',
            (Yii::$app->user->identity->id_rol === 1) ? [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'habitante-has-vehiculo',
                'template' => '{delete}',
            ] : []
        ],
    ]); ?>

</div>
