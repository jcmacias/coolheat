<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="contact-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contact">
                    <h1 class="jw-animate-gen noOpacity" data-gen="fadeInDown" data-gen-offset="90%">
                        Contact Us</h1>
                    <p class="jw-animate-gen noOpacity" data-gen="fadeInDown" data-gen-offset="85%">
                        Lorem ipsum dolor sit amet, mea cu omnium urbanitas, labitur volumus id eum. Ius ignota offendit similique et, sea dolorum vituperata ullamcorper volumus id eum. Ius ignota offendit similique et, sea dolorum vituperata ullamcorper.</p>
                </div>
            </div>
        </div> <!--ROW-->
        <div class="row">

            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="contact jw-animate-gen noOpacity" data-gen="fadeInLeft" data-gen-offset="80%">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-1">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-11 nospace">
                            5512 Lorem Ipsum Vestibulum Molesqu, Dolor Sit Amet,
                            Egestas 666 69
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-11 nospace">
                            <a href="mailto:contact@yourdomain.com">
                                contact@yourdomain.com</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-1">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-11 nospace">
                            +1 800 450 6935 <br>
                            +1 800 450 6940
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="contact">
                    <form  class="jw-animate-gen noOpacity" data-gen="fadeInRight" data-gen-offset="85%">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control"  id="exampleInputName" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <textarea rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="text-right jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="70%">
                                    <button type="submit" class="btn btn-default btn-4 btn-4c bgcolor">
                                        <span>Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div> <!--ROW-->
    </div> <!--CONTAINER-->
</section>

