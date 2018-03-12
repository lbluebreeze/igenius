<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notificaciones".
 *
 * @property integer $idNotificacion
 * @property integer $idUsuario
 * @property string $Fecha
 * @property string $Detalle
 * @property string $Asunto
 * @property string $FechaAct
 *
 * @property Usuarios $idUsuario0
 */
class Notificaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notificaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsuario', 'Fecha'], 'required'],
            [['idUsuario'], 'integer'],
            [['Fecha', 'FechaAct'], 'safe'],
            [['Detalle'], 'string', 'max' => 350],
            [['Asunto'], 'string', 'max' => 50]
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
            'FechaAct' => 'Fecha Actualizacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario0()
    {
        return $this->hasOne(Usuarios::className(), ['idUsuario' => 'idUsuario']);
    }
}
