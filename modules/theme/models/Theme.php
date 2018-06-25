<?php

namespace app\modules\theme\models;

use app\modules\theme\Module;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "theme".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $active
 * @property int $lastUpdate
 * @property string $title
 * @property string $version
 * @property string $author
 */
class Theme extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'theme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['updatedAt'], 'integer'],
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
            'name' => Module::t('Theme Name'),
            'description' => Module::t('Theme Description'),
            'active' => Module::t('Active'),
            'updatedAt' => Module::t('Theme Last Update'),
            'title' => Module::t('Theme Title'),
            'version' => Module::t('Theme Version'),
            'author' => Module::t('Theme Author'),
        ];
    }
}
