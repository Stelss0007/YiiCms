<?php

namespace app\themes\bydiwell;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $css = [
        'css/bootstrap.min.css',
        'css/bootstrap-dropdownhover.css',
        'css/animate.min.css',
        'css/animated-text.css',
        'css/font-awesome.min.css',
        'css/font-awesome-animation.min.css',
        'css/lightbox.min.css',
        'css/owl.css',
        'css/responsive.css',
        'css/style.css',
    ];

    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/bootstrap-dropdownhover.min.js',
        'js/jquery-scrolltofixed-min.js',
        'js/bootstrap-datepicker.min.js',
        'js/lightbox.min.js',
        'js/owl.carousel.min.js',
        'js/jarallax.js',
        'js/jquery.countup.min.js',
        'js/jquery.waypoints.min.js',
        'js/dyscrollup.min.js',
        'js/animated-text.min.js',
        'js/wow.js',
        'js/imagesloaded.min.js',
        'js/jquery.filterizr.min.js',
        'js/main.js',

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
