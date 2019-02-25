<?php
use app\themes\bydiwell\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

$theme = AppAsset::register($this);
?>

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
            <a class="left carousel-control" href="/carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="/carousel-example-generic" role="button" data-slide="next">
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
                                <li><a href="/" class="fa fa-facebook"></a></li>
                                <li><a href="/" class="fa fa-twitter"></a></li>
                                <li><a href="/" class="fa fa-google-plus"></a></li>
                                <li><a href="/" class="fa fa-instagram"></a></li>
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
                                <li><a href="/" class="fa fa-facebook"></a></li>
                                <li><a href="/" class="fa fa-twitter"></a></li>
                                <li><a href="/" class="fa fa-google-plus"></a></li>
                                <li><a href="/" class="fa fa-instagram"></a></li>
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
                                <li><a href="/" class="fa fa-facebook"></a></li>
                                <li><a href="/" class="fa fa-twitter"></a></li>
                                <li><a href="/" class="fa fa-google-plus"></a></li>
                                <li><a href="/" class="fa fa-instagram"></a></li>
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
                                <li><a href="/" class="fa fa-facebook"></a></li>
                                <li><a href="/" class="fa fa-twitter"></a></li>
                                <li><a href="/" class="fa fa-google-plus"></a></li>
                                <li><a href="/" class="fa fa-instagram"></a></li>
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
                                <li><a href="/" class="fa fa-facebook"></a></li>
                                <li><a href="/" class="fa fa-twitter"></a></li>
                                <li><a href="/" class="fa fa-google-plus"></a></li>
                                <li><a href="/" class="fa fa-instagram"></a></li>
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
                                <li><a href="/" class="fa fa-facebook"></a></li>
                                <li><a href="/" class="fa fa-twitter"></a></li>
                                <li><a href="/" class="fa fa-google-plus"></a></li>
                                <li><a href="/" class="fa fa-instagram"></a></li>
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
                            <a href="/" class="title">Tom Latham</a>
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
                            <a href="/" class="title">Merry Alvna</a>
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
                            <a href="/" class="title">Keen Williamson</a>
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
                        <li><a href="/">Jon Robart</a></li>
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
                        <li><a href="/">Dr. Martin</a></li>
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
                        <li><a href="/">Rock tucaker</a></li>
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
                        <a href="/"><?= Html::img($theme->baseUrl.'/images/client/1.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="/"><?= Html::img($theme->baseUrl.'/images/client/2.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="/"><?= Html::img($theme->baseUrl.'/images/client/3.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="/"><?= Html::img($theme->baseUrl.'/images/client/4.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="/"><?= Html::img($theme->baseUrl.'/images/client/5.jpg')?></a>
                    </div>
                    <div class="item">
                        <a href="/"><?= Html::img($theme->baseUrl.'/images/client/6.jpg')?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
