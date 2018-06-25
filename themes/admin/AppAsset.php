<?php

namespace app\themes\admin;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $css = [
        'font/FontAwesome.otf',
        'font/fontawesome-webfont.eot',
        'font/fontawesome-webfont.svg',
        'fonte/fontawesome-webfont.ttf',
        'font/fontawesome-webfont.woff',
        'css/font-awesome.css',
//        'css/bootstrap.min.css',
        'css/bootstrap-responsive.min.css',
        'css/colorpicker.css',
        'css/datepicker.css',
        'css/fullcalendar.css',
        'css/matrix-style.css',
        'css/matrix-media.css',
        'css/select2.css',
        'css/uniform.css',
        'css/jquery.gritter.css',
    ];

    public $js = [
        'js/bootstrap.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $publishOptions = [
        'forceCopy' => true,
    ];

    public function init()
    {
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}
