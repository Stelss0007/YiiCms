<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\themes\bydiwell\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\modules\user\Module as UserModule;

$theme = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Preloader -->
<div id="preloader"></div>

<!-- Main Header start -->
<header class="main-herader">
    <!-- Header topbar start -->
    <div class="header-topbar center991">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="herader-topbar-col tobar-leftside">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span class="after-bdr">+0123 1205 1010</span>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>admin@budiwell.com</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="herader-topbar-col tobar-rightside center991">
                        <?php if (Yii::$app->user->getIsGuest()): ?>
                            <span class="after-bdr ml0-991">
                                <a href="/user/login"><?php echo \Yii::t('app', 'Sign In'); ?></a>
                            </span>
                            <span class="after-bdr ml0-991">
                                <a href="/user/registration"><?php echo \Yii::t('app', 'Sign Up'); ?></a>
                            </span>
                        <?php else: ?>
                            <span class="after-bdr ml0-991">
                                <a href="/user/profile">
                                    <?php echo UserModule::t('My Account'); ?>
                                </a>
                            </span>
                        <?php endif; ?>
                        <span class="ml0">
                            <span class="s-icon ml0">
                                <a href="/" id="addClass"><span class="glyphicon glyphicon-search"></span></a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header navbar start -->
    <div class="header-navbar fixed-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">
                                <?= Html::img($theme->baseUrl.'/images/logo-1.png')?>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInUp">
                            <?php
                            Menu::begin([
//                                'brandLabel' => Yii::$app->name,
//                                'brandUrl' => Yii::$app->homeUrl,
//                                'options' => [
//                                    'class' => 'navbar-inverse navbar-fixed-top',
//                                ],
                            ]);
                            echo Menu::widget([
                                'options' => ['class' => 'nav navbar-nav navbar-right'],
                                'items' => [
                                    ['label' => 'Главная', 'url' => ['/']],
                                    ['label' => 'О Нас', 'url' => ['/about']],
                                    ['label' => 'Контакты', 'url' => ['/contact']],
                                 ],
                                'activeCssClass'=>'active',
                                'firstItemCssClass'=>'fist',
                                'lastItemCssClass' =>'last',
                            ]);
                            //Menu::end();
                            ?>

<!--                            <ul class="nav navbar-nav navbar-right">-->
<!--                                <li class="active">-->
<!--                                    <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Главная</a>-->
<!--                                </li>-->
<!--                                <li><a href="/about">О Нас</a></li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Проекты <i class="fa fa-angle-down" aria-hidden="true"></i></a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="projects-grid-3.html">Project Grid 3</a></li>-->
<!--                                        <li><a href="projects-grid-4.html">Project Grid 4</a></li>-->
<!--                                        <li><a href="projects-title.html">Project Title</a></li>-->
<!--                                        <li><a href="projects-details.html">Project Details</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="/contact">Контакты</a>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Popup Search Area -->
<div id="qnimate" class="off">
    <div id="search" class="open">
        <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
        <form>
            <input type="text" placeholder="Type search keywords here" value="" name="term" id="term">
            <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
        </form>
    </div>
</div>

<?php echo $content; ?>

<!-- footer start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="footer-about-col mb50">
                    <div class="footer-logo">
                        <a href="/"><?= Html::img($theme->baseUrl.'/images/logo-2.png')?></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt soluta beatae ipsa.</p>
                    <ul class="about-info">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <p>1120 Maxlen Street, New York</p></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <p>+012 111-222-1234</p></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <p>yourmail@gmail.com</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="footer-post-col mb50 clearfix">
                    <h4>Recent Post</h4>
                    <div class="heading-under-line"></div>
                    <ul>
                        <li>
                            <?= Html::img($theme->baseUrl.'/images/blog/post-1.jpg')?>
                            <h5><a href="/">Web design and development</a></h5>
                            <p><a href="/">5 Hours ago</a></p>
                        </li>
                        <li>
                            <?= Html::img($theme->baseUrl.'/images/blog/post-2.jpg')?>
                            <h5><a href="index.html#">Web design and development</a></h5>
                            <p><a href="index.html#">6 Hours ago</a></p>
                        </li>
                        <li>
                            <?= Html::img($theme->baseUrl.'/images/blog/post-3.jpg')?>
                            <h5><a href="index.html#">Web design and development</a></h5>
                            <p><a href="index.html#">6 Hours ago</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="footer-subscribe mb50">
                    <h4>Get news</h4>
                    <div class="heading-under-line"></div>
                    <div class="subscribe-box text-center">
                        <p>Subscribe for latest news</p>
                        <form>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                            <button class="btn btn-default simple-btn subscribe-btn" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright start from here -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright-col">
                    <ul class="social center991">
                        <li><a href="index.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="copyright-col text-right center991">
                    <p>Copyright ©2018 <a href="https://themeforest.net/user/xcodesolution" target="_blank">xcodesolution</a> All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
