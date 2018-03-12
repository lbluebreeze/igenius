<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VwVehiculos;

/**
 * VwVehiculosSearch represents the model behind the search form about `app\models\VwVehiculos`.
 */
class VwVehiculosSearch extends VwVehiculos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVehiculo'], 'integer'],
            [['Placa', 'nombres'], 'safe'],
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
        $query = VwVehiculos::find();

        $dataProvider = new ActiveDataProvider([
            'key' => 'idVehiculo',
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

        $query->andFilterWhere(['like', 'Placa', $this->Placa])
            ->andFilterWhere(['like', 'nombres', $this->nombres]);

        return $dataProvider;
    }
}
