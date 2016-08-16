<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Radippool;

/**
 * RadippoolSearch represents the model behind the search form about `app\models\Radippool`.
 */
class RadippoolSearch extends Radippool
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['pool_name', 'framedipaddress', 'nasipaddress', 'calledstationid', 'callingstationid', 'expiry_time', 'username', 'pool_key'], 'safe'],
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
        $query = Radippool::find();

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
            'expiry_time' => $this->expiry_time,
        ]);

        $query->andFilterWhere(['like', 'pool_name', $this->pool_name])
            ->andFilterWhere(['like', 'framedipaddress', $this->framedipaddress])
            ->andFilterWhere(['like', 'nasipaddress', $this->nasipaddress])
            ->andFilterWhere(['like', 'calledstationid', $this->calledstationid])
            ->andFilterWhere(['like', 'callingstationid', $this->callingstationid])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'pool_key', $this->pool_key]);

        return $dataProvider;
    }
}
