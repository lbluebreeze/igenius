<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VwUsuarios;

/**
 * VwUsuariosSearch represents the model behind the search form about `app\models\VwUsuarios`.
 */
class VwUsuariosSearch extends VwUsuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsuario', 'documento', 'id_rol'], 'integer'],
            [['usuario', 'contrasena', 'nombre_rol'], 'safe'],
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
        $query = VwUsuarios::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'key' => 'idUsuario'
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idUsuario' => $this->idUsuario,
            'documento' => $this->documento,
            'id_rol' => $this->id_rol,
        ]);

        $query->andFilterWhere(['like', 'usuario', $this->usuario])
            ->andFilterWhere(['like', 'contrasena', $this->contrasena])
            ->andFilterWhere(['like', 'nombre_rol', $this->nombre_rol]);

        return $dataProvider;
    }
}
