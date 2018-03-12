<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo_has_mantenimiento".
 *
 * @property integer $idEquipo_has_mantenimiento
 * @property integer $idEquipo
 * @property integer $idMantenimiento
 */
class Relequipomantenimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo_has_mantenimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEquipo', 'idMantenimiento'], 'required'],
            [['idEquipo', 'idMantenimiento'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEquipo_has_mantenimiento' => 'Id Equipo Has Mantenimiento',
            'idEquipo' => 'Id Equipo',
            'idMantenimiento' => 'Id Mantenimiento',
        ];
    }
}
