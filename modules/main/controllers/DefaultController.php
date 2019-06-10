<?php
namespace app\modules\main\controllers;

use app\modules\group\models\GroupSearch;
use Stelssoft\YiiCmsCore\CmsController;
use Symfony\Component\VarDumper\VarDumper;
use Yii;

class DefaultController extends CmsController
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionTwig()
    {
        $searchModel = new GroupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('test.twig', [
            'name' => 'Ruslan',
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
