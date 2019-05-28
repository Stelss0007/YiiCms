<?php

namespace app\modules\permission\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ThemeSearch represents the model behind the search form of `app\modules\theme\models\Theme`.
 */
class PermissionGroupSearch extends PermissionGroup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
        $query = PermissionGroup::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> [
                'defaultOrder' => ['weight'=> SORT_DESC],
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }


        return $dataProvider;
    }
}
