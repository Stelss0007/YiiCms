<?php
namespace app\modules\main\controllers;

use yii\base\Controller;

class MainController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
