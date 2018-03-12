<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vw_apartamentos".
 *
 * @property integer $idApartamento
 * @property integer $numeroApartamento
 * @property string $disponibilidad
 */
class VwApartamentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_apartamentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idApartamento', 'numeroApartamento'], 'integer'],
            [['numeroApartamento'], 'required'],
            [['disponibilidad'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idApartamento' => 'Id Apartamento',
            'numeroApartamento' => 'Numero Apartamento',
            'disponibilidad' => 'Disponibilidad',
        ];
    }
}
