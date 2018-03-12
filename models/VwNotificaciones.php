<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vw_notificaciones".
 *
 * @property integer $idNotificacion
 * @property integer $idUsuario
 * @property string $Fecha
 * @property string $Detalle
 * @property string $Asunto
 * @property string $usuario
 */
class VwNotificaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_notificaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idNotificacion', 'idUsuario'], 'integer'],
            [['idUsuario', 'Fecha', 'usuario'], 'required'],
            [['Fecha'], 'safe'],
            [['Detalle'], 'string', 'max' => 350],
            [['Asunto'], 'string', 'max' => 50],
            [['usuario'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNotificacion' => 'Id Notificacion',
            'idUsuario' => 'Id Usuario',
            'Fecha' => 'Fecha',
            'Detalle' => 'Detalle',
            'Asunto' => 'Asunto',
            'usuario' => 'Usuario',
        ];
    }
}
