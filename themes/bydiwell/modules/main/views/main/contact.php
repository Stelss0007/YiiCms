<?php
use app\themes\bydiwell\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

$theme = AppAsset::register($this);
?>

<!-- Inner Page title Start -->
<section class="innerpage-titlebar">
    <div class="container">
        <div class="titlebar-box">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <p><a href="index.html">Home</a> | <a href="contact.html#"><span>Contact</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Start -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-box col-default">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>3312(A) / 2 Mayville, Barker Street, Western Australia</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box col-default">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>admin@budiwell.com</p>
                    <p>info@budiwell.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box col-default">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>
                        +38 (097) 880 0000
                        <br>
                        +38 (097) 880 0101
                    </p>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="contact-form col-default text-center">
                    <div id="form-messages"></div>
                    <form id="ajax-contact" method="post" action="http://codecares.com/html/vobon/php/contact.php">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                               required>
                        <textarea class="form-control textarea-hight-full" id="message" name="message" rows="5"
                                  placeholder="Message" required></textarea>
                        <button class="btn btn-default simple-btn" type="submit">Sent Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<div id="map" style="width:100%; height:400px;"></div>
<?php $this->registerJsFile($theme->baseUrl . '/js/google-map.js'); ?>
<?php $this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyDdEPAHqgxFK5pioDAB3rsvKchAtXxRGO4&callback=initMap', ['position' => \yii\web\View::POS_END]); ?>
<!-- Google map -->
