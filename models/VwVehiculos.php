<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vw_vehiculos".
 *
 * @property integer $idVehiculo
 * @property string $Placa
 * @property integer $idHabitante
 * @property string $nombres
 */
class VwVehiculos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_vehiculos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVehiculo', 'idHabitante'], 'integer'],
            [['Placa'], 'required'],
            [['Placa'], 'string', 'max' => 7],
            [['nombres'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idVehiculo' => 'Id Vehiculo',
            'Placa' => 'Placa',
            'idHabitante' => 'Id Habitante',
            'nombres' => 'Nombres',
        ];
    }
}
