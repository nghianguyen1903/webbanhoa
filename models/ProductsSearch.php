<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */

    // add the public attributes that will be used to store the data to be search
    public $product_name;

    public function rules()
    {
        return [
            [['product_ID', 'cat_id', 'status'], 'integer'],
            [['product_name', 'creator', 'date_of_creation', 'editor', 'date_of_edition'], 'safe'],
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
        $query = Products::find();

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
            'product_ID' => $this->product_ID,
            'cat_id' => $this->cat_id,
            'date_of_creation' => $this->date_of_creation,
            'date_of_edition' => $this->date_of_edition,
            'status' => $this->status,
        ])->andFilterWhere(['like', 'Products.product_name', $this->product_name]);

        return $dataProvider;
    }
}
