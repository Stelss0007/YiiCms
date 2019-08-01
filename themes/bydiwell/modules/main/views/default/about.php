<?php
use app\themes\bydiwell\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

$theme = AppAsset::register($this);
?>


<section class="innerpage-titlebar">
    <div class="container">
        <div class="titlebar-box">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <p><a href="/">Home</a> | <a href="#"><span>About</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-area about-area-three">
    <div class="container">
        <div class="row">
            <iframe id="partners-supporters" style="border: 0;" src="/proxy?url=https://go.missioncontinues.org/l/591531/2019-05-24/4hf39v" width="100%" height="500" frameborder="0"></iframe>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-three-col">
                    <?= Html::img($theme->baseUrl.'/images/about/2.jpg')?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-three-col">
                    <h3>Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                        rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis placeat
                        dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae iure
                        accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque sunt
                        beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed molestiae
                        quas officia reiciendis aut totam.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-three-col">
                    <h3>Our Vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                        rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis placeat
                        dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae iure
                        accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque sunt
                        beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed molestiae
                        quas officia reiciendis aut totam.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-three-col">
                    <?= Html::img($theme->baseUrl.'/images/about/3.jpg')?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-three-col">
                    <?= Html::img($theme->baseUrl.'/images/about/4.jpg')?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-three-col">
                    <h3>Our Responsibility</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                        rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis placeat
                        dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae iure
                        accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque sunt
                        beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed molestiae
                        quas officia reiciendis aut totam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section class="testimonial-area bg-white">
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
                            <a href="about.html#" class="title">Tom Latham</a>
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
                            <a href="about.html#" class="title">Merry Alvna</a>
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
                            <a href="about.html#" class="title">Keen Williamson</a>
                            <span class="post">PHP Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="client-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client-carousel">
                    <div class="item">
                        <a href="/about">
                            <?= Html::img($theme->baseUrl.'/images/client/1.jpg')?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/about">
                            <?= Html::img($theme->baseUrl.'/images/client/2.jpg')?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/about">
                            <?= Html::img($theme->baseUrl.'/images/client/3.jpg')?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/about">
                            <?= Html::img($theme->baseUrl.'/images/client/4.jpg')?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/about">
                            <?= Html::img($theme->baseUrl.'/images/client/5.jpg')?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/about">
                            <?= Html::img($theme->baseUrl.'/images/client/6.jpg')?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
