<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Banners;

/**
 * BannersSearch represents the model behind the search form of `common\models\Banners`.
 */
class BannersSearch extends Banners
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'media_id'], 'integer'],
            [['name', 'description', 'href', 'active', 'language', 'page_show', 'type', 'position', 'device'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Banners::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'media_id' => $this->media_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'href', $this->href])
            ->andFilterWhere(['like', 'active', $this->active])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'page_show', $this->page_show])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'device', $this->device]);

        return $dataProvider;
    }
}
