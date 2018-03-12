<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "habitante_has_mascota".
 *
 * @property integer $idHabitante_has_mascota
 * @property integer $idHabitante
 * @property integer $idMascota
 */
class HabitanteHasMascota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'habitante_has_mascota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idHabitante', 'idMascota'], 'required'],
            [['idHabitante', 'idMascota'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHabitante_has_mascota' => 'Id Habitante Has Mascota',
            'idHabitante' => 'Id Habitante',
            'idMascota' => 'Id Mascota',
        ];
    }
}
