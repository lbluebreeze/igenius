<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mantenimientos;

/**
 * MantenimientosSearch represents the model behind the search form about `app\models\Mantenimientos`.
 */
class MantenimientosSearch extends Mantenimientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMantenimiento', 'estado'], 'integer'],
            [['fechaProgramacion', 'descripcionGeneral'], 'safe'],
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
        $query = Mantenimientos::find();

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
            'idMantenimiento' => $this->idMantenimiento,
            'fechaProgramacion' => $this->fechaProgramacion,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'descripcionGeneral', $this->descripcionGeneral]);

        return $dataProvider;
    }
}
