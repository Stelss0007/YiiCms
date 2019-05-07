<?php

namespace app\modules\module\controllers;

use app\modules\module\models\DbModule;
use app\modules\module\models\DbModuleSearch;
use Stelssoft\YiiCmsCore\CmsAdminController;
use Stelssoft\YiiCmsCore\CmsMigration;
use Yii;
use yii\helpers\VarDumper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class AdminController extends CmsAdminController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

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

        echo 'mod=' . $moduleName;
    }

    public function actionUninstall()
    {
        $request = Yii::$app->request;

        $moduleName = $request->get('module');

        $cmsMigration  = new CmsMigration();
        $cmsMigration->unmigrateModule($moduleName);

        echo 'mod=' . $moduleName;
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

    /**
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DbModule();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

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
