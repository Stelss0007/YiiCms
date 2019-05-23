<?php

namespace app\modules\group\models;

use app\modules\user\Module;
use Stelssoft\YiiCmsCore\CmsActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "theme".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $active
 */
class Group extends CmsActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 100,],
            [['description'], 'string', 'max' => 200,],
            [['active'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Module::t('Name'),
            'description' => Module::t('Description'),
            'active' => Module::t('Active'),
        ];
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }
}
