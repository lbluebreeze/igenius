<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "habitante_has_apartamento".
 *
 * @property integer $idHabitante_has_apartamento
 * @property integer $idHabitante
 * @property integer $idApartamento
 * @property string $fechaInicio
 * @property string $fechaFin
 */
class Relhabitanteapartamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'habitante_has_apartamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idHabitante', 'idApartamento'], 'integer'],
            [['fechaInicio'], 'required'],
            [['fechaInicio', 'fechaFin'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHabitante_has_apartamento' => 'Id Habitante Has Apartamento',
            'idHabitante' => 'Id Habitante',
            'idApartamento' => 'Id Apartamento',
            'fechaInicio' => 'Fecha Inicio',
            'fechaFin' => 'Fecha Fin',
        ];
    }

    public function getHabitantes()
    {
        return $this->hasMany(\app\models\Habitantes::className(), ['idHabitante' => 'idHabitante']);
    }
}
