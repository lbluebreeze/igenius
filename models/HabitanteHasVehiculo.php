<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "habitante_has_vehiculo".
 *
 * @property integer $id
 * @property integer $idHabitante
 * @property integer $idVehiculo
 */
class HabitanteHasVehiculo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'habitante_has_vehiculo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idHabitante', 'idVehiculo'], 'required'],
            [['idHabitante', 'idVehiculo'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idHabitante' => 'Id Habitante',
            'idVehiculo' => 'Id Vehiculo',
        ];
    }
}
