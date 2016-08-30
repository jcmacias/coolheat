<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="about-section">
    <div class="container">
        <div class="meet-us">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 jw-animate-gen noOpacity" data-gen="fadeInLeft" data-gen-offset="70%">
                    <div class="about-slider">
                        <div class="carousel slide abt-carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="bannerImage">
                                        <a href="#"><img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/about-main.jpg" alt="about slider"></a>
                                    </div>
                                </div><!-- /Slide1 -->

                            </div>
                        </div><!-- Carousel -->

                    </div>
                </div>

                <div class="col-md-7 col-sm-7 col-xs-12 jw-animate-gen noOpacity" data-gen="fadeInRight" data-gen-offset="65%">
                    <h1 class="jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInDown">
                        <?= Yii::t('app','Hello, Meet Us!')?></h1>
                    <h2><?= Yii::t('app','Cool&Heat, always here for you')?></h2>
                    <p>
                        <?= Yii::t('app','about_text')?>

                    </p>
<!--                    <div class="jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">-->
<!--                        <a href="news.html" class="red-button  btn-4 btn-4c bgcolor">-->
<!--                            <span>read more</span>-->
<!--                        </a>-->
<!--                    </div>-->
                </div>
            </div>


        </div>

    </div> <!--CONTAINER-->
</section>
<!--containing multiple logos-->
<section id="partners" class="partners partner-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeIn">
                    <?= Yii::t('app','Payments we accept'); ?></h1>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
                <div id="owl-example" class="owl-carousel">
                    <div class="item">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/rsz_paypal.png" alt="Logo">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/visa.gif" alt="Logo">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/rsz_mastercard.gif" alt="Logo">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/rsz_discover.png" alt="Logo">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/american_express.png" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
