<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vehiculos;

/**
 * VehiculosSearch represents the model behind the search form about `app\models\Vehiculos`.
 */
class VehiculosSearch extends Vehiculos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVehiculo'], 'integer'],
            [['Placa'], 'safe'],
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
        $query = Vehiculos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idVehiculo' => $this->idVehiculo,
        ]);

        $query->andFilterWhere(['like', 'Placa', $this->Placa]);

        return $dataProvider;
    }
}
