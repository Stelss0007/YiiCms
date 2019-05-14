<?php
namespace app\modules\module\models;

use app\modules\module\Module;
use Stelssoft\YiiCmsCore\CmsActiveRecord;

class DbModule extends CmsActiveRecord
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
            [['name'], 'string', 'max' => 100],
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

    public static function getModulesDirectory()
    {
        return \Yii::getAlias('@app') . '/modules/';
    }

    public static function getAvailableModuleList()
    {
        $modulesDirectory = self::getModulesDirectory();
        $moduleFolderList = scandir($modulesDirectory);
        $fsModules = array_diff($moduleFolderList, ['.', '..']);
        $result = [];

        foreach ($fsModules as $fsModule) {
            if ($module = self::getAvailableModuleInfo($fsModule)) {
                $result[] = $module;
            }
        }

        return $result;
    }

    public static function getAvailableModuleInfo($systemModuleName)
    {
        $moduleInfoFile = sprintf('%s/%s/info.php', self::getModulesDirectory(), $systemModuleName);

        if (file_exists($moduleInfoFile)) {
            return self::arrayToObject(array_merge(require($moduleInfoFile), ['systemName' => $systemModuleName] ));
        }

        return null;
    }

    public static function install($systemModuleName)
    {
        $moduleInfo = self::getAvailableModuleInfo($systemModuleName);

        $module = new self();
        $module->systemName = $moduleInfo->systemName;
        $module->name = $moduleInfo->name;
        $module->description = $moduleInfo->description;
        $module->version = $moduleInfo->version;
        $module->author = $moduleInfo->author;
        $module->active = false;
        $module->save(false);
    }

    public static function uninstall($systemModuleName)
    {
        $module = self::getModule($systemModuleName);

        if (null !== $module) {
            $module->delete();
        }
    }

    public static function getModule($systemModuleName)
    {
        return self::findOne(['systemName' => $systemModuleName]);
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
