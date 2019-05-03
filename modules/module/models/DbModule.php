<?php
namespace app\modules\module\models;

use app\modules\module\Module;
use yii\db\ActiveRecord;

class DbModule extends ActiveRecord
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
            [['namespace'], 'string', 'max' => 400],
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

    public static function getAvailableModuleList()
    {
        $modulesDirectory = \Yii::getAlias('@app') . '/modules/';
        $moduleFolderList = scandir($modulesDirectory);
        $fsModules = array_diff($moduleFolderList, ['.', '..']);
        $result = [];

        foreach ($fsModules as $fsModule) {
            $moduleInfo = $modulesDirectory . $fsModule . '/info.php';

            if (file_exists($moduleInfo)) {
                $result[] = self::arrayToObject(array_merge(require($moduleInfo), ['systemName' => $fsModule] ));
            }
        }

        return $result;
    }

    private static function arrayToObject(array $array)
    {
        $obj = new self();
        $obj->name = $array['name'];
        $obj->systemName = $array['systemName'];
        $obj->description = $array['description'];
        $obj->version = $array['version'];
        $obj->author = $array['author'];

        return $obj;
    }

    public static function getInstaledModuleList()
    {
        $modules = self::find()->all();

        $result = [];

        foreach ($modules as $module) {
            $result[$module->systemName] = $module;
        }

        return $result;
    }
}
