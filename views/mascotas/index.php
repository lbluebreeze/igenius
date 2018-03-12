<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MascotasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mascotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mascotas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mascotas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idMascota',
            'nombre',
            'raza',
            // 'idTipoMascota',
            'anoNacimiento',
            // 'estado',
            'tipo',
            [
                'header' => Html::a('Propietario', ['mascotas/index?sort=nombres']),
                'content' => function($model, $key, $index, $column){
                    $propietario = $model->getPropietario();
                    return ($propietario) ? 
                            Html::a($propietario->nombres, ["habitantes/view?id={$propietario->idHabitante}"])
                        :
                            Html::a('Asignar', ["mascotas/assign?id={$model->idMascota}"]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
