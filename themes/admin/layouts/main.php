<?php
/**
 * Created by PhpStorm.
 * User: rus
 * Date: 28.02.18
 * Time: 12:47
 */


use app\themes\admin\AppAsset;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\helpers\Html;

use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
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
<!--Header-part-->
<div id="header">
    <a href="dashboard.html">Stelsy CMS</a>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                <li class="divider"></li>
                <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                <li class="divider"></li>
                <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
            </ul>
        </li>
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar">
<!--    <a href="#" class="visible-phone">-->
<!--        <i class="icon icon-home"></i>-->
<!--        Dashboard-->
<!--    </a>-->


<!--    <ul>-->
<!--        <li class="active">-->
<!--            <a href="/admin">-->
<!--                <i class="icon icon-home"></i>-->
<!--                <span>Dashboard</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="">-->
<!--            <a href="/admin/theme">-->
<!--                <i class="icon icon-home"></i>-->
<!--                <span>Themes</span></a>-->
<!--        </li>-->
<!--        <li class="">-->
<!--            <a href="/admin/module">-->
<!--                <i class="icon icon-home"></i>-->
<!--                <span>Modules</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>-->
<!--            <ul>-->
<!--                <li><a href="form-common.html">Basic Form</a></li>-->
<!--                <li><a href="form-validation.html">Form with Validation</a></li>-->
<!--                <li><a href="form-wizard.html">Form with Wizard</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!---->
<!--        <li class="content"> <span>Monthly Bandwidth Transfer</span>-->
<!--            <div class="progress progress-mini progress-danger active progress-striped">-->
<!--                <div style="width: 77%;" class="bar"></div>-->
<!--            </div>-->
<!--            <span class="percent">77%</span>-->
<!--            <div class="stat">21419.94 / 14000 MB</div>-->
<!--        </li>-->
<!--        <li class="content"> <span>Disk Space Usage</span>-->
<!--            <div class="progress progress-mini active progress-striped">-->
<!--                <div style="width: 87%;" class="bar"></div>-->
<!--            </div>-->
<!--            <span class="percent">87%</span>-->
<!--            <div class="stat">604.44 / 4000 MB</div>-->
<!--        </li>-->
<!--    </ul>-->


    <?php
        echo Nav::widget([
            'encodeLabels' => false,
            'options' => ['class' => 'left-menu'],
            'items' => [
                ['label' => '<i class="icon icon-home"></i><span>Dashboard</span>', 'url' => ['/admin']],
                ['label' => '<i class="icon icon-home"></i><span>Modules</span>', 'url' => ['/admin/module']],
                ['label' => '<i class="icon icon-home"></i><span>Themes</span>', 'url' => ['/admin/theme']],
            ],
        ]);
    ?>

</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <?= Breadcrumbs::widget([
            'options' => [
                'id' => 'breadcrumb',
                'class' => 'breadcrumb',
            ],
            'homeLink'      =>  [
                'label'     =>  Yii::t('yii', 'Home'),
                'url'       =>  ['/admin'],
                'class'     =>  'home',
            ],
            'itemTemplate' => "<li>{link}</li>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
    <!--End-breadcrumbs-->

    <!-- Alerts -->
    <?= Alert::widget() ?>
    <!-- End Alerts -->

    <!-- Content -->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <?= $content ?>
            </div>
        </div>
    </div>
    <!-- End Content -->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

    // if url is empty, skip the menu dividers and reset the menu selection to default
    if (newURL != "") {

      // if url is "-", it is this page -- reset the menu:
      if (newURL == "-" ) {
        resetMenu();
      }
      // else, send page to designated URL
      else {
        document.location.href = newURL;
      }
    }
  }

  // resets the menu selection upon entry to this page:
  function resetMenu() {
    document.gomenu.selector.selectedIndex = 2;
  }
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
