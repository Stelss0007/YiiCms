<?php
namespace app\modules\module\models;

use yii\db\ActiveRecord;

class Module extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 200],
            [['active'], 'string', 'max' => 4],
            [['version'], 'string', 'max' => 20],
            [['author'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Module::t('Module Name'),
            'description' => Module::t('Module Description'),
            'active' => Module::t('Active'),
            'version' => Module::t('Module Version'),
            'author' => Module::t('Module Author'),
        ];
    }
}
