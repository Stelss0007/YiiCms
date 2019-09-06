<?php

namespace app\themes\admin;

use yii\helpers\VarDumper;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $css = [
        // Font Awesome
        'vendors/font-awesome/css/font-awesome.min.css',
        // Bootstrap
        'vendors/bootstrap/dist/css/bootstrap.min.css',
        // NProgress
        'vendors/nprogress/nprogress.css',
        // iCheck
        'vendors/iCheck/skins/flat/green.css',
        // bootstrap-progressbar
        'vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        // JQVMap
        'vendors/jqvmap/dist/jqvmap.min.css',
        // bootstrap-daterangepicker
        'vendors/bootstrap-daterangepicker/daterangepicker.css',
        // Theme styles
        'build/css/custom.css',
    ];

    public $js = [
        // Bootstrap
        'vendors/bootstrap/dist/js/bootstrap.min.js',
        // FastClick
        'vendors/fastclick/lib/fastclick.js',
        // NProgress
        'vendors/nprogress/nprogress.js',
        // Chart.js
        'vendors/Chart.js/dist/Chart.min.js',

        // bootstrap-progressbar
        'vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        // iCheck
        'vendors/iCheck/icheck.min.js',
        // Skycons
        'vendors/skycons/skycons.js',
        // Flot
        'vendors/Flot/jquery.flot.js',
        'vendors/Flot/jquery.flot.pie.js',
        'vendors/Flot/jquery.flot.time.js',
        'vendors/Flot/jquery.flot.stack.js',
        'vendors/Flot/jquery.flot.resize.js',
        'vendors/Flot/jquery.flot.resize.js',
        // Flot plugins
        'vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        'vendors/flot-spline/js/jquery.flot.spline.min.js',
        'vendors/flot.curvedlines/curvedLines.js',

        // JQVMap
        'vendors/jqvmap/dist/jquery.vmap.js',
        'vendors/jqvmap/dist/maps/jquery.vmap.world.js',
        'vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        'vendors/bootstrap-daterangepicker/daterangepicker.js',
        'vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js',

        // Custom Theme Scripts
        'build/js/custom.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $publishOptions = [
        'forceCopy' => YII_ENV_DEV,
    ];

    public function init()
    {
        // НУЖНО ЗАЮЗАТЬ http://php.net/manual/en/function.stat.php для определения хеша директории assets

        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();

        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return true;
            //return false; //Прод режим, не копировать ассетсы. ускорение в 10-100 раз
        };
    }
}
