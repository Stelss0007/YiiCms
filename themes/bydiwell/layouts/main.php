<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\themes\bydiwell\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

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
                        <span>yourmail@gmail.com</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="herader-topbar-col tobar-rightside center991">
                        <span class="after-bdr ml0-991"><a href="account.html">Login</a></span>
                        <span class="after-bdr ml0-991"><a href="account.html">Register</a></span>
                        <span class="ml0">
                                <span class="s-icon ml0">
                                    <a href="index.html#" id="addClass"><span class="glyphicon glyphicon-search"></span></a>
                                </span>
                            </span>
                        <p><a href="index.html#appointment" id="scroll"><span>Make An Appointment</span></a></p>
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
                            <a class="navbar-brand" href="index.html">
                                <?= Html::img($theme->baseUrl.'/images/logo-1.png')?>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInUp">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home one</a>
                                        </li>
                                        <li><a href="index-two.html">Home two</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown">
                                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="projects-grid-3.html">Project Grid 3</a></li>
                                        <li><a href="projects-grid-4.html">Project Grid 4</a></li>
                                        <li><a href="projects-title.html">Project Title</a></li>
                                        <li><a href="projects-details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-gird-3.html">Blog gird 3</a>
                                        </li>
                                        <li><a href="blog-gird-4.html">Blog gird 4</a>
                                        </li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a>
                                        </li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a>
                                        </li>
                                        <li><a href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu mega-menu">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <li><a href="service.html">Service One</a>
                                                </li>
                                                <li><a href="service-two.html">Service Two</a>
                                                </li>
                                                <li><a href="service-three.html">Service Three</a>
                                                </li>
                                                <li><a href="service-details.html">Service Details</a>
                                                </li>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <li><a href="team-one.html">Team One</a>
                                                </li>
                                                <li><a href="team-two.html">Team Two</a>
                                                </li>
                                                <li><a href="team-details.html">Team Details</a>
                                                </li>
                                                <li><a href="testimonial.html">Testimonial</a>
                                                </li>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <li><a href="pricing.html">Pricing Table</a>
                                                </li>
                                                <li><a href="account.html">Account</a>
                                                </li>
                                                <li><a href="faq.html">FAQ Page</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a>
                                                </li>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <img class="nav-img" src="images/nav.gif" alt="">
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
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


<!-- Main Slider Start -->
<section class="main-slider-area">
    <div class="main-container">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First slide -->
                <div class="item active slide-1 text-left">
                    <div class="carousel-caption">
                        <p data-animation="animated fadeInUp">
                            Construction company
                        </p>
                        <h3 data-animation="animated fadeInUp">
                            Welcome to our <span>Vobon</span>
                        </h3>
                        <a href="contact.html" class="btn btn-primary btn-lg" data-animation="animated zoomIn">Contact Us</a>
                    </div>
                </div>
                <!-- /.item -->

                <!-- Second slide -->
                <div class="item slide-2 text-right">
                    <div class="carousel-caption">
                        <p data-animation="animated fadeInUp">
                            Construction company
                        </p>
                        <h3 data-animation="animated fadeInUp">
                            We Build <span>Buildings</span>
                        </h3>
                        <a href="contact.html" class="btn btn-primary btn-lg" data-animation="animated zoomIn">Contact Us</a>
                    </div>
                </div>
                <!-- /.item -->

                <!-- Third slide -->
                <div class="item slide-3 text-left">
                    <div class="carousel-caption">
                        <p data-animation="animated fadeInUp">
                            Construction company
                        </p>
                        <h3 data-animation="animated fadeInUp">
                            We are very <span>careful</span>
                        </h3>
                        <a href="contact.html" class="btn btn-primary btn-lg" data-animation="animated zoomIn">Contact Us</a>
                    </div>
                </div>
                <!-- /.item -->

            </div>
            <!-- /.carousel-inner -->

            <!-- Controls -->
            <a class="left carousel-control" href="index.html#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="index.html#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->
    </div>
</section>

<!-- About start -->
<section class="about-area" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-col">
                            <div class="experience-box wow bounceIn" data-wow-duration="1s" data-wow-delay="0s">
                                <h1>20</h1>
                                <h4>Years Experience</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-col welcome-text">
                            <p>WELCOME!</p>
                            <h2>Vobon</h2>
                            <h4>construction company</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-col">
                            <p>Expedita reprehenderit, sed neque nesciunt earum a alias voluptatum velit blanditiis vel molestias libero praesentium rerum repellendus eligendi obcaecati laboriosam nobis repellat ipsa placeat perspiciatis! Quod cum possimus, officia non debitis pariatur dolorum laudantium, in fuga ad a facere, voluptate deleniti! Unde, molestias eius, recusandae aut voluptates nam rem architecto provident.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-col">
                    <div class="about-image">
                        <?= Html::img($theme->baseUrl.'/images/about/1.png')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Separator Start -->
<section class="separator-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="separator-col">
                    <h2>please feel free to contact us</h2>
                    <h4><span>Hotline:</span> +001-111-222-3344</h4>
                    <h4><span>Mail Address:</span> yourmail@gmail.com</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!--services start-->
<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="defult-title text-center">
                    <h1>Our <span>services</span></h1>
                    <h5>consectetur adipisicing elit alias</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="service-icon">
                                <i class="flaticon-brick-wall"></i>
                            </div>
                            <h3 class="title">General Constructing</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="service-icon">
                                <i class="flaticon-crane-1"></i>
                            </div>
                            <h3 class="title">Making bridge</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="service-icon">
                                <i class="flaticon-ruler-and-pencil-1"></i>
                            </div>
                            <h3 class="title">Design Build</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="service-icon">
                                <i class="flaticon-wrench"></i>
                            </div>
                            <h3 class="title">Construction Services</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="service-icon">
                                <i class="flaticon-home-1"></i>
                            </div>
                            <h3 class="title">Best planning</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="service-icon">
                                <i class="flaticon-worker-1"></i>
                            </div>
                            <h3 class="title">Hard work</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="service-icon">
                                <i class="flaticon-buildings"></i>
                            </div>
                            <h3 class="title">Strong building</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <h3 class="title">Home structure</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <?= Html::img($theme->baseUrl.'/images/worker-2.png')?>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Start -->
<section class="appointment-area" id="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="appointment-col">
                    <div class="defult-title text-left bl-none">
                        <h1>Make An <span>Appointment</span></h1>
                        <h5>consectetur adipisicing elit alias</h5>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="appointment-col">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="appointment-col">
                                    <input type="text" class="form-control" placeholder="Phone Numbar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="appointment-col">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="appointment-col">
                                    <select class="form-control">
                                        <option>Select a option</option>
                                        <option>House building</option>
                                        <option>Office building</option>
                                        <option>Bridge</option>
                                        <option>Haematology</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="appointment-col">
                                    <select class="form-control">
                                        <option>Select a service</option>
                                        <option>Service 1</option>
                                        <option>Service 2</option>
                                        <option>Service 3</option>
                                        <option>Service 4</option>
                                        <option>Service 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="appointment-col">
                                    <div class="input-group date" >
                                        <input type="text"  id="datepicker" class="form-control">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="appointment-col center1199">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                    <button class="btn btn-default simple-btn" type="submit">Send Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="appointment-col appointment-img wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s">
                    <?= Html::img($theme->baseUrl.'/images/worker.png')?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Start -->
<section class="team-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="defult-title text-center">
                    <h1>Meet Our <span>experts</span></h1>
                    <h5>consectetur adipisicing elit alias</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="team-carousel">
                    <div class="our-team">
                        <div class="team-pic">
                            <?= Html::img($theme->baseUrl.'/images/team/1.jpg')?>
                        </div>
                        <div class="team-profile">
                            <h3 class="team-title">
                                <a href="team-details.html">Lan Cooper</a>
                                <small>Manager</small>
                            </h3>
                            <ul class="team-social">
                                <li><a href="index.html#" class="fa fa-facebook"></a></li>
                                <li><a href="index.html#" class="fa fa-twitter"></a></li>
                                <li><a href="index.html#" class="fa fa-google-plus"></a></li>
                                <li><a href="index.html#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="our-team">
                        <div class="team-pic">
                            <?= Html::img($theme->baseUrl.'/images/team/2.jpg')?>
                        </div>
                        <div class="team-profile">
                            <h3 class="team-title">
                                <a href="team-details.html">Ezra Oliva</a>
                                <small>Engineer</small>
                            </h3>
                            <ul class="team-social">
                                <li><a href="index.html#" class="fa fa-facebook"></a></li>
                                <li><a href="index.html#" class="fa fa-twitter"></a></li>
                                <li><a href="index.html#" class="fa fa-google-plus"></a></li>
                                <li><a href="index.html#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="our-team">
                        <div class="team-pic">
                            <?= Html::img($theme->baseUrl.'/images/team/3.jpg')?>
                        </div>
                        <div class="team-profile">
                            <h3 class="team-title">
                                <a href="team-details.html">Jose Easton</a>
                                <small>Engineer</small>
                            </h3>
                            <ul class="team-social">
                                <li><a href="index.html#" class="fa fa-facebook"></a></li>
                                <li><a href="index.html#" class="fa fa-twitter"></a></li>
                                <li><a href="index.html#" class="fa fa-google-plus"></a></li>
                                <li><a href="index.html#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="our-team">
                        <div class="team-pic">
                            <?= Html::img($theme->baseUrl.'/images/team/4.jpg')?>
                        </div>
                        <div class="team-profile">
                            <h3 class="team-title">
                                <a href="team-details.html">Brandon Tyler</a>
                                <small>CEO</small>
                            </h3>
                            <ul class="team-social">
                                <li><a href="index.html#" class="fa fa-facebook"></a></li>
                                <li><a href="index.html#" class="fa fa-twitter"></a></li>
                                <li><a href="index.html#" class="fa fa-google-plus"></a></li>
                                <li><a href="index.html#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="our-team">
                        <div class="team-pic">
                            <?= Html::img($theme->baseUrl.'/images/team/5.jpg')?>
                        </div>
                        <div class="team-profile">
                            <h3 class="team-title">
                                <a href="team-details.html">Xavier Leo</a>
                                <small>Engineer</small>
                            </h3>
                            <ul class="team-social">
                                <li><a href="index.html#" class="fa fa-facebook"></a></li>
                                <li><a href="index.html#" class="fa fa-twitter"></a></li>
                                <li><a href="index.html#" class="fa fa-google-plus"></a></li>
                                <li><a href="index.html#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="our-team">
                        <div class="team-pic">
                            <?= Html::img($theme->baseUrl.'/images/team/6.jpg')?>
                        </div>
                        <div class="team-profile">
                            <h3 class="team-title">
                                <a href="team-details.html">Jason Carson</a>
                                <small>CEO</small>
                            </h3>
                            <ul class="team-social">
                                <li><a href="index.html#" class="fa fa-facebook"></a></li>
                                <li><a href="index.html#" class="fa fa-twitter"></a></li>
                                <li><a href="index.html#" class="fa fa-google-plus"></a></li>
                                <li><a href="index.html#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Start -->
<section class="counter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                <div class="counter-box">
                    <div class="counter-icon"><i class="icofont icofont-files"></i>
                    </div>
                    <div class="counter-item counter">5890</div>
                    <div class="counter-title">
                        <h4>completed jobs</h4>
                    </div>
                </div>
                <!--counter-box-->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                <div class="counter-box">
                    <div class="counter-icon"><i class="icofont icofont-businessman"></i>
                    </div>
                    <div class="counter-item counter">5830</div>
                    <div class="counter-title">
                        <h4>Happy client</h4>
                    </div>
                </div>
                <!--counter-box-->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                <div class="counter-box">
                    <div class="counter-icon"><i class="icofont icofont-coins"></i>
                    </div>
                    <div class="counter-item counter">1856</div>
                    <div class="counter-title">
                        <h4>Our staff</h4>
                    </div>
                </div>
                <!--counter-box-->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                <div class="counter-box">
                    <div class="counter-icon"><i class="icofont icofont-award"></i>
                    </div>
                    <div class="counter-item counter">145</div>
                    <div class="counter-title">
                        <h4>Awards</h4>
                    </div>
                </div>
                <!--counter-box-->
            </div>
        </div>
    </div>
</section>

<!-- Projects Start -->
<section class="project-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="defult-title text-center">
                    <h1>Our recent <span>projects</span></h1>
                    <h5>consectetur adipisicing elit alias</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="project-col">
                    <div class="hover-box">
                        <?= Html::img($theme->baseUrl.'/images/project/1.jpg', ['class' => 'fixed-hight280 fixed-hight210'])?>
                        <div class="hover-box-content">
                            <h3>Project title</h3>
                            <ul class="icon">
                                <li><a class="gallery" href="images/project/1.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                <li><a href="projects-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="project-col">
                    <div class="hover-box">
                        <?= Html::img($theme->baseUrl.'/images/project/2.jpg', ['class' => 'fixed-hight280 fixed-hight210'])?>
                        <div class="hover-box-content">
                            <h3>Project title</h3>
                            <ul class="icon">
                                <li><a class="gallery" href="images/project/2.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                <li><a href="projects-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="project-col">
                    <div class="hover-box">
                        <?= Html::img($theme->baseUrl.'/images/project/3.jpg', ['class' => 'fixed-hight280 fixed-hight210'])?>
                        <div class="hover-box-content">
                            <h3>Project title</h3>
                            <ul class="icon">
                                <li><a class="gallery" href="images/project/3.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                <li><a href="projects-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="project-col">
                    <div class="hover-box">
                        <?= Html::img($theme->baseUrl.'/images/project/4.jpg', ['class' => 'fixed-hight280 fixed-hight210'])?>
                        <div class="hover-box-content">
                            <h3>Project title</h3>
                            <ul class="icon">
                                <li><a class="gallery" href="images/project/4.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                <li><a href="projects-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="project-col">
                    <div class="hover-box">
                        <?= Html::img($theme->baseUrl.'/images/project/5.jpg', ['class' => 'fixed-hight280 fixed-hight210'])?>
                        <div class="hover-box-content">
                            <h3>Project title</h3>
                            <ul class="icon">
                                <li><a class="gallery" href="images/project/5.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                <li><a href="projects-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="project-col">
                    <div class="hover-box">
                        <?= Html::img($theme->baseUrl.'/images/project/6.jpg', ['class' => 'fixed-hight280 fixed-hight210'])?>
                        <div class="hover-box-content">
                            <h3>Project title</h3>
                            <ul class="icon">
                                <li><a class="gallery" href="images/project/6.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                <li><a href="projects-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="project-col">
                    <div class="hover-box">
                        <<?= Html::img($theme->baseUrl.'/images/project/7.jpg', ['class' => 'fixed-hight280 fixed-hight210'])?>
                        <div class="hover-box-content">
                            <h3>Project title</h3>
                            <ul class="icon">
                                <li><a class="gallery" href="images/project/7.jpg" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                                <li><a href="projects-details.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="defult-title text-center">
                    <h1>What People <span>Says</span></h1>
                    <h5>consectetur adipisicing elit alias</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonial-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <?= Html::img($theme->baseUrl.'/images/testimonial/1.jpg')?>
                        </div>
                        <p class="description">
                            There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected humour. There are many variations of passages.
                        </p>
                        <div class="testimonial-content">
                            <a href="index.html#" class="title">Tom Latham</a>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <?= Html::img($theme->baseUrl.'/images/testimonial/2.jpg')?>
                        </div>
                        <p class="description">
                            There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected humour. There are many variations of passages.
                        </p>
                        <div class="testimonial-content">
                            <a href="index.html#" class="title">Merry Alvna</a>
                            <span class="post">Web Designer</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <?= Html::img($theme->baseUrl.'/images/testimonial/3.jpg')?>
                        </div>
                        <p class="description">
                            There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected humour. There are many variations of passages.
                        </p>
                        <div class="testimonial-content">
                            <a href="index.html#" class="title">Keen Williamson</a>
                            <span class="post">PHP Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Start -->
<section class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="defult-title text-center">
                    <h1>Our <span>latest news</span></h1>
                    <h5>consectetur adipisicing elit alias</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="post-box wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="post-img">
                        <?= Html::img($theme->baseUrl.'/images/blog/1.jpg')?>
                    </div>
                    <ul class="post-bar">
                        <li>Mar 08, 2018</li>
                        <li><a href="index.html#">Jon Robart</a></li>
                    </ul>
                    <h3 class="post-title"><a href="blog-details.html">Latest News Post</a></h3>
                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida.
                    </p>
                    <a class="btn btn-default simple-btn" href="blog-details.html">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="post-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="post-img">
                        <?= Html::img($theme->baseUrl.'/images/blog/2.jpg')?>
                    </div>
                    <ul class="post-bar">
                        <li>Mar 12, 2018</li>
                        <li><a href="index.html#">Dr. Martin</a></li>
                    </ul>
                    <h3 class="post-title"><a href="blog-details.html">Latest News Post</a></h3>
                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida.
                    </p>
                    <a class="btn btn-default simple-btn" href="blog-details.html">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                <div class="post-box wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="post-img">
                        <?= Html::img($theme->baseUrl.'/images/blog/3.jpg')?>
                    </div>
                    <ul class="post-bar">
                        <li>Mar 15, 2018</li>
                        <li><a href="index.html#">Rock tucaker</a></li>
                    </ul>
                    <h3 class="post-title"><a href="blog-details.html">Latest News Post</a></h3>
                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida.
                    </p>
                    <a class="btn btn-default simple-btn" href="blog-details.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client start -->
<section class="client-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client-carousel">
                    <div class="item">
                        <a href="index.html#"><?= Html::img($theme->baseUrl.'/images/client/1.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="index.html#"><?= Html::img($theme->baseUrl.'/images/client/2.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="index.html#"><?= Html::img($theme->baseUrl.'/images/client/3.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="index.html#"><?= Html::img($theme->baseUrl.'/images/client/4.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="index.html#"><?= Html::img($theme->baseUrl.'/images/client/5.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="index.html#"><?= Html::img($theme->baseUrl.'/images/client/6.jpg')?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="footer-about-col mb50">
                    <div class="footer-logo">
                        <a href="index.html#"><?= Html::img($theme->baseUrl.'/images/logo-2.png')?></a>
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
                            <h5><a href="index.html#">Web design and development</a></h5>
                            <p><a href="index.html#">5 Hours ago</a></p>
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
