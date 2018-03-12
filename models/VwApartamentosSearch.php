<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VwApartamentos;

/**
 * VwApartamentosSearch represents the model behind the search form about `app\models\VwApartamentos`.
 */
class VwApartamentosSearch extends VwApartamentos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idApartamento', 'numeroApartamento'], 'integer'],
            [['disponibilidad'], 'string', 'max' => 10],
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
        $query = VwApartamentos::find();

        $dataProvider = new ActiveDataProvider([
            'key' => 'idApartamento',
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'numeroApartamento' => SORT_ASC,
                ],
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idApartamento' => $this->idApartamento,
        ]);

        $query->andFilterWhere(['like', 'numeroApartamento', $this->numeroApartamento])
            ->andFilterWhere(['like', 'disponibilidad', $this->disponibilidad]);

        return $dataProvider;
    }
}
