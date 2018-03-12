<h4>Mis notificaciones</h4>
<?php 
    $notificaciones = Yii::$app->user->identity->getNotificaciones();
    $items = [];
    foreach ($notificaciones->all() as $key => $notificacion) {
        $items[] = "<h4 class='list-group-item-heading' title='{$notificacion->Asunto}'>{$notificacion->Asunto}</h4><p class='list-group-item-text'>{$notificacion->Detalle}</p><time class='timeago' title='{$notificacion->Fecha}' datetime='".date('Y-m-d\TH:i:sP', strtotime($notificacion->Fecha))."'></time></p>";
    }
    echo ($items) ? yii\helpers\Html::ul(
        $items,
        [
            'encode' => false,
            'style'=>'padding-left: 0',
            'itemOptions' => [
                'class' => 'list-group-item',
            ],
        ]
    ) : '<em>No tienes notificaciones</em>';
?>