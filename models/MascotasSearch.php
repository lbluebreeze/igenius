<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mascotas;

/**
 * MascotasSearch represents the model behind the search form about `app\models\Mascotas`.
 */
class MascotasSearch extends Mascotas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMascota', 'idTipoMascota', 'estado'], 'integer'],
            [['nombre', 'raza', 'anoNacimiento'], 'safe'],
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
        $query = Mascotas::find();

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
            'idMascota' => $this->idMascota,
            'idTipoMascota' => $this->idTipoMascota,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'raza', $this->raza])
            ->andFilterWhere(['like', 'anoNacimiento', $this->anoNacimiento]);

        return $dataProvider;
    }
}
