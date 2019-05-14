<?php

namespace app\modules\install\controllers;

use Stelssoft\YiiCmsCore\CmsController;
use Yii;

class DefaultController extends CmsController
{

    public function actionIndex()
    {
        $this->setLayout('simple');

        return $this->render('index');
    }
}
