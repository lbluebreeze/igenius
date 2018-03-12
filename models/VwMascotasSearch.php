<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VwMascotas;

/**
 * VwMascotasSearch represents the model behind the search form about `app\models\VwMascotas`.
 */
class VwMascotasSearch extends VwMascotas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMascota', 'idTipoMascota', 'estado'], 'integer'],
            [['nombre', 'raza', 'anoNacimiento', 'tipo'], 'safe'],
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
        $query = VwMascotas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'key' => 'idMascota',
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idMascota' => $this->idMascota,
            'idTipoMascota' => $this->idTipoMascota,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'raza', $this->raza])
            ->andFilterWhere(['like', 'anoNacimiento', $this->anoNacimiento])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
