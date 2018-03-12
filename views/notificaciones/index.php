<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NotificacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notificaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notificaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notificaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Mostrando <strong>{count}</strong> de <strong>{totalCount}</strong> resultados',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idNotificacion',
            [
                'header' => Html::a('Enviado a', ['vehiculos/index?sort=usuario']),
                'attribute' => 'usuario',
                'content' => function ($model, $key, $index, $column){
                    return Html::a(app\models\Usuarios::findOne($model->idUsuario)->usuario, ['usuarios/view?id=' . $model->idUsuario]);
                },
            ],
            [
                'attribute' => 'Fecha',
                'filter' => \yii\jui\DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'Fecha',
                    'dateFormat'=>'yyyy-MM-dd',
                    'language'=>'es',
                    'clientOptions' => [
                        'changeMonth' => true,
                        'changeYear' => true,
                    ],
                    'options' => ['class' => 'form-control']
                ]),
            ],
            'Asunto',
            'Detalle',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
