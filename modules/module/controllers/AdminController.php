<?php

namespace app\modules\module\controllers;

use app\modules\module\models\DbModule;
use Stelssoft\YiiCmsCore\CmsAdminController;
use Stelssoft\YiiCmsCore\CmsMigration;
use Yii;
use yii\web\NotFoundHttpException;

class AdminController extends CmsAdminController
{
    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {

        $availableModules = DbModule::getAvailableModuleList();
        $instaledModules = DbModule::getInstaledModuleList();

        return $this->render('index', [
            'availableModules' => $availableModules,
            'instaledModules' => $instaledModules,
        ]);
    }

    public function actionInstall()
    {
        $request = Yii::$app->request;

        $moduleName = $request->get('module');

        $cmsMigration  = new CmsMigration();
        $cmsMigration->migrateModule($moduleName);
        DbModule::install($moduleName);

        return $this->redirect(['index']);
    }

    public function actionUninstall()
    {
        $request = Yii::$app->request;

        $moduleName = $request->get('module');

        $cmsMigration  = new CmsMigration();
        $cmsMigration->unmigrateModule($moduleName);
        DbModule::uninstall($moduleName);

        return $this->redirect(['index']);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionView($id)
    {
        $this->getObjectName();

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionActivate($id)
    {
        $request = Yii::$app->request;
        $moduleName = $request->get('module');

        $module = DbModule::getModule($moduleName);
        $module->actvate();

        return $this->redirect(['index']);
    }

    public function actionDeactivate($id)
    {
        $request = Yii::$app->request;
        $moduleName = $request->get('module');

        $module = DbModule::getModule($moduleName);
        $module->deactivate();

        return $this->redirect(['index']);
    }

    /**
     * @param $id
     * @return null|static
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = DbModule::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
