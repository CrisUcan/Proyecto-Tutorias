<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PeriodoSemestral;

/**
 * PeriodoSemestralSearch represents the model behind the search form about `app\models\PeriodoSemestral`.
 */
class PeriodoSemestralSearch extends PeriodoSemestral
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'n_carrera', 'n_semestre', 'n_grupo'], 'integer'],
            [['periodo'], 'safe'],
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
        $query = PeriodoSemestral::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'n_carrera' => $this->n_carrera,
            'n_semestre' => $this->n_semestre,
            'n_grupo' => $this->n_grupo,
        ]);

        $query->andFilterWhere(['like', 'periodo', $this->periodo]);

        return $dataProvider;
    }
}
