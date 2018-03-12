<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehiculos".
 *
 * @property integer $idVehiculo
 * @property string $Placa
 */
class Vehiculos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehiculos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Placa'], 'required'],
            [['Placa'], 'string', 'max' => 7],
            [['Placa'], 'unique']
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
        ];
    }
}
