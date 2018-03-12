<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VwNotificaciones;

/**
 * VwNotificacionesSearch represents the model behind the search form about `app\models\Notificaciones`.
 */
class VwNotificacionesSearch extends VwNotificaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idNotificacion', 'idUsuario'], 'integer'],
            [['Fecha', 'Asunto', 'usuario'], 'safe'],
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
        $query = VwNotificaciones::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'key' => 'idNotificacion',
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idNotificacion' => $this->idNotificacion,
            'idUsuario' => $this->idUsuario,
        ]);

        $query->andFilterWhere(['like', 'Detalle', $this->Detalle])
            ->andFilterWhere(['like', 'Asunto', $this->Asunto])
            ->andFilterWhere(['like', 'usuario', $this->usuario])
            ->andFilterWhere(['like', 'Fecha', $this->Fecha]);

        return $dataProvider;
    }
}
