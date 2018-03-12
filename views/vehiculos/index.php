<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VehiculosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehiculos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehiculos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vehiculos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idVehiculo',
            'Placa',
            [
                'header' => Html::a('Propietario', ['vehiculos/index?sort=nombres']),
                'attribute' => 'nombres',
                'content' => function($model, $key, $index, $column){
                    return ($model->nombres) ? 
                            Html::a($model->nombres, ["habitantes/view?id={$model->idHabitante}"])
                        :
                            Html::a('Asignar', ["vehiculos/assign?id={$model->idVehiculo}"]);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
