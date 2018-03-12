<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VwHabitantes;

/**
 * VwHabitantesSearch represents the model behind the search form about `app\models\VwHabitantes`.
 */
class VwHabitantesSearch extends VwHabitantes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idHabitante', 'documento', 'sexo', 'telefono', 'estado'], 'integer'],
            [['nombres', 'apellidos', 'fechaNacimiento', 'emailHabitante', 'numeroApartamento'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = VwHabitantes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'key' => 'idHabitante',
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idHabitante' => $this->idHabitante,
            'documento' => $this->documento,
            'sexo' => $this->sexo,
            'fechaNacimiento' => $this->fechaNacimiento,
            'telefono' => $this->telefono,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'emailHabitante', $this->emailHabitante])
            ->andFilterWhere(['like', 'numeroApartamento', $this->numeroApartamento]);

        return $dataProvider;
    }
}
