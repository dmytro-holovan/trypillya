<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Image;

/**
 * ImageSearch represents the model behind the search form about `common\models\Image`.
 */
class ImageSearch extends Image
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'portfolio_id'], 'integer'],
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
        $query = Image::find();

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
            'id' => $this->id,
            'portfolio_id' => $this->portfolio_id,
        ]);

        return $dataProvider;
    }
}
