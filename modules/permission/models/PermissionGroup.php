<?php

namespace app\modules\permission\models;

use app\modules\group\models\Group;
use app\modules\permission\Module;
use Stelssoft\YiiCmsCore\CmsActiveRecord;
use Stelssoft\YiiCmsCore\CmsPermission;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "theme".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $active
 */
class PermissionGroup extends CmsActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'permission_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'pattern'], 'string', 'max' => 400,],
            [['gid', 'level', 'weight'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gid' => Module::t('Group ID'),
            'pattern' => Module::t('Object Pattern'),
            'group.name' => Module::t('Group Name'),
            'level' => Module::t('Access level'),
            'accessLevelName' => Module::t('Access level'),
            'weight' => Module::t('Order'),
            'description' => Module::t('Description'),
        ];
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'gid']);
    }

    public function getAccessLevelName()
    {
        return CmsPermission::permissionLevel($this->level);
    }
}
