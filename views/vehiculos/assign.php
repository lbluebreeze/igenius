<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HabitantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $idVehiculo string */

Yii::$app->session['idVehiculo'] = $idVehiculo;

$this->title = 'Asignar propietario';
$this->params['breadcrumbs'][] = ['label' => 'Vehiculos', 'url' => ['vehiculos/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idHabitante',
            'nombres',
            'apellidos',
            'documento',
            // 'fechaNacimiento',
            // 'emailHabitante:email',
            // 'telefono',
            // 'estado',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{assign}',
                'buttons' => [
                    'assign' => function($url, $model, $key){
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', "$url&veh=" . Yii::$app->session['idVehiculo']);
                    }
                ],
            ],
        ],
    ]); ?>

</div>
