<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductCategories;

/**
 * ProductCategoriesSearch represents the model behind the search form about `app\models\ProductCategories`.
 */
class ProductCategoriesSearch extends ProductCategories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_ID', 'status'], 'integer'],
            [['cat_name', 'creator', 'date_of_creation', 'editor', 'date_of_edition'], 'safe'],
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
        $query = ProductCategories::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'cat_ID' => $this->cat_ID,
            'date_of_creation' => $this->date_of_creation,
            'date_of_edition' => $this->date_of_edition,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'cat_name', $this->cat_name])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'editor', $this->editor]);

        return $dataProvider;
    }
}
