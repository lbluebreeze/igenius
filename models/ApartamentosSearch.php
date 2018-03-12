<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\apartamentos;

/**
 * ApartamentosSearch represents the model behind the search form about `app\models\apartamentos`.
 */
class ApartamentosSearch extends apartamentos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idApartamento', 'numeroApartamento'], 'integer'],
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
        $query = apartamentos::find();

        $dataProvider = new ActiveDataProvider([
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

        $query->andFilterWhere(['like', 'numeroApartamento', $this->numeroApartamento]);

        return $dataProvider;
    }
}
