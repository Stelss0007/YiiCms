<?php
namespace app\modules\main\controllers;

use app\modules\group\models\GroupSearch;
use app\modules\main\models\TestForm;
use app\modules\main\models\TestForm2;
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

        $testForm = new TestForm();
        if ($testForm->load(Yii::$app->request->post())) {
            $testForm->validate();
        }

        $testForm2 = new TestForm2();
        if ($testForm2->load(Yii::$app->request->post())) {
            $testForm2->validate();
        }

        return $this->render('test.twig', [
            'name' => 'Ruslan',
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'testForm' => $testForm,
            'testForm2' => $testForm2,
        ]);
    }

    public function actionProxy($url)
    {
        return file_get_contents($url);
    }

    public function actionInstagram()
    {

        $username = 'visualcraft_inc';

        $users = new InstagramUserInfo($username);

        dd($users->getInfo());
    }


    private function instagramAPICurlConnect($apiUrl){
        $connection = curl_init(); // initializing
        curl_setopt( $connection, CURLOPT_URL, $apiUrl ); // API URL to connect
        curl_setopt( $connection, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
        curl_setopt( $connection, CURLOPT_TIMEOUT, 20 );
        $json_return = curl_exec( $connection ); // connect and get json data
        curl_close( $connection ); // close connection
        return json_decode( $json_return ); // decode and return
    }
}
