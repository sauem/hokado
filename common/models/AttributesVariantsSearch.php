<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AttributesVariants;

/**
 * AttributesVariantsSearch represents the model behind the search form of `common\models\AttributesVariants`.
 */
class AttributesVariantsSearch extends AttributesVariants
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'attribute_id', 'created_at', 'updated_at', 'media_id'], 'integer'],
            [['name', 'slug', 'note', 'color'], 'safe'],
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
    public function search($params, $filter = null)
    {
        $query = AttributesVariants::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, '');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        if ($filter) {
            $query->andFilterWhere($filter);
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'attribute_id' => $this->attribute_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'media_id' => $this->media_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
