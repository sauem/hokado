<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Archives;
use yii\db\Expression;

/**
 * ArchivesSearch represents the model behind the search form of `common\models\Archives`.
 */
class ArchivesSearch extends Archives
{
    /**
     * {@inheritdoc}
     */
    public $groupby;

    public function rules()
    {
        return [
            [['id', 'active', 'created_at', 'updated_at'], 'integer'],
            [['name', 'slug', 'description', 'type', 'language', 'groupby'], 'safe'],
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
        $query = Archives::find();

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
        if (!empty($filter)) {
            $query->andWhere($filter);
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['=', 'type', $this->type])
            ->andFilterWhere(['=', 'language', $this->language])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['IS', 'parent_id', new Expression('NULL')]);
        return $dataProvider;
    }
}
