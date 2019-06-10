<?php

namespace app\modules\main\controllers;

use Stelssoft\YiiCmsCore\CmsAdminController;
use Yii;
use yii\web\NotFoundHttpException;


/**
 * ThemeController implements the CRUD actions for Theme model.
 */
class AdminController extends CmsAdminController
{
    /**
     * Lists all Theme models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

//    /**
//     * Lists all Theme models.
//     * @return mixed
//     */
//    public function actionConfiguration()
//    {
//        return $this->render('configuration');
//    }
}
