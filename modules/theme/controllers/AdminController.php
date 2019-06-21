<?php

namespace app\modules\theme\controllers;

use DirectoryIterator;
use FilesystemIterator;
use Stelssoft\YiiCmsCore\CmsAdminController;
use Yii;
use app\modules\theme\models\Theme;
use app\modules\theme\models\ThemeSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ThemeController implements the CRUD actions for Theme model.
 */
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
     * Lists all Theme models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ThemeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $availableThemesList = $this->getAvailableThemesList();

        //dd($availableThemesList);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'availableThemesList' => $availableThemesList,
        ]);
    }

    /**
     * Displays a single Theme model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Theme model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Theme();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Theme model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
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
     * Deletes an existing Theme model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionScreenshot($theme)
    {
        $fileName ='screenshot.png';
        $screenshotPath = Yii::getAlias(sprintf('@app/themes/%s/%s', $theme, $fileName));

        if (!file_exists($screenshotPath)) {
            $fileName ='screenshot.jpg';
            $screenshotPath = Yii::getAlias(sprintf('@app/themes/admin/assets/images/%s', $fileName));
        }

        // Set cache time
        Yii::$app->response->getHeaders()->add('Pragma', 'cache');
        Yii::$app->response->getHeaders()->add('Cache-Control', 'max-age=86400');
        return Yii::$app->response->sendFile(
            $screenshotPath,
            $fileName
        );
      }

    /**
     * Finds the Theme model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Theme the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Theme::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * @return array
     */
    private function getAvailableThemesList()
    {
        $availableThemesList = [];
        $iterator = new FilesystemIterator(Yii::getAlias('@app/themes'));

        /** @var DirectoryIterator $entry */
        foreach($iterator as $entry) {

            $themeInfoFile = sprintf('%s/info.php',$entry->getPathname());

            if (!file_exists($themeInfoFile)) {
                continue;
            }

            $themeDirName = $entry->getFilename();
            $availableThemesList[$themeDirName] = [
                'themeDirName' => $themeDirName,
                'themeAbsolutePath' => $entry->getPathname(),
                'themeInfo' => require($themeInfoFile),
            ];
        }

        return $availableThemesList;
    }
}
