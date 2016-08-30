<?php

/* @var $this yii\web\View */

$this->title = 'Cool & Heat';
use yii\helpers\Url;
?>
<section class="section2" >

    <div id="slider-with-blocks-1" class="owl-carousel">
        <div class="item slide1">
            <div class="rsABlock" data-move-offset="bottom">
                <!-- <img class="img-responsive" src="images/overlay-slider.png" alt="banner"> -->
            </div>
            <div class="container">
                <div class="bContainer">
                    <h2 class="rsABlock" data-move-effect="bottom"><?= Yii::t('app','slide1_text1')?></h2>
                    <h1 class="rsABlock" data-move-effect="left"><?= Yii::t('app','slide1_text2')?></h1>
        <span class="rsABlock" data-move-effect="bottom">
             <a href="<?= Url::to(['site/services']); ?>" class="red-button  btn-4 btn-4c bgcolor">
                 <span><?= Yii::t('app','read more')?></span>
             </a>
       </span>
                </div>
            </div>
        </div>

        <div class="item slide4">
            <div class="rsABlock" data-move-offset="bottom">
                <!-- <img src="images/overlay-slider.png" alt="banner"> -->
            </div>
            <div class="container">
                <div class="bContainer">
                    <h2 class="rsABlock" data-move-effect="top">
                        <?= Yii::t('app','slide2_text1')?>
                    </h2>
                    <h1 class="rsABlock" data-move-effect="left"><?= Yii::t('app','slide2_text2')?></h1>
          <span class="rsABlock" data-move-effect="bottom" style="margin-top: 20px">
             <a href="<?= Url::to(['site/eservices']); ?>" class="red-button  btn-4 btn-4c bgcolor">
                 <span><?= Yii::t('app','read more')?></span>
             </a></span>
                </div>
            </div>
        </div>
    </div>

</section>


<!--ROOFERS-->
<section class="roofers-bg" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h1><?= Yii::t('app','Welcome to Cool & Heat Company')?></h1>
                <hr class="center bgcolor">
                <p class="jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInDown">
                    <?= Yii::t('app','wellcome_home_text')?>

                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeInUp">
                    <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/emergancy.png" alt="">
                    <p><?= Yii::t('app','24/7 Emergency Available')?> </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInUp">
                    <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/professional.png" alt="">
                    <p><?= Yii::t('app','Expert and Professional')?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInUp">
                    <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/satisfaction.png" alt="">
                    <p><?= Yii::t('app','Satisfaction Guarantee')?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInUp">
                    <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/inspiration.png" alt="">
                    <p><?= Yii::t('app','Free Estimation')?></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="latest-news" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
                    <?= Yii::t('app','What we offer')?></h1>
                <hr class="center bgcolor">
                <p class="text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
                    <?= Yii::t('app','offer_text')?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="news-detail clearfix jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInLeft">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/latestnews.png" alt="latest news" class="img-responsive">
                    </div>

                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h3><?= Yii::t('app','Ac_service')?></h3>

                        <p>
                            <?= Yii::t('app','service_desc')?>
                        </p>
                        <a href="<?= Url::to(['site/services']); ?>" class="red-button  btn-4 btn-4c bgcolor">
                            <span><?= Yii::t('app','read more')?></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="news-detail clearfix jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInRight">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/electric_news.jpg" alt="latest news" class="img-responsive">
                    </div>

                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h3><?= Yii::t('app','E_service')?></h3>

                        <p>
                            <?= Yii::t('app','service_desc1')?>
                        </p>
                        <a href="<?= Url::to(['site/services']); ?>" class="red-button  btn-4 btn-4c bgcolor">
                            <span><?= Yii::t('app','read more')?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ESTIMATION-->
<section id="estimation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
                    <?= Yii::t('app','Contact Us')?></h1>
                <hr class="center bgcolor">
                <p class="text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
                    <?= Yii::t('app','contact_text')?>
                </p>
            </div>
        </div>
    </div>

    <div class="container estimation-container">
        <div class="row estimation-toggle">
            <div class="col-lg-10 col-lg-offset-1 col-md-9 col-md-offset-2 text-center">
                <div class="estimation clearfix jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInRight">
                    <form class="form-inline" role="form">
                        <div class="row">
                            <div class=" col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="<?= Yii::t('app','Name')?>" required>
                                </div>
                            </div>
                            <div class=" col-md-6 col-sm-6 col-xs-12 nospace">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="<?= Yii::t('app','Email')?>" required>
                                </div>
                            </div>
                            <div class=" col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="<?= Yii::t('app','Phone')?>" required>
                                </div>
                            </div>
                            <div class=" col-md-6 col-sm-6 col-xs-12 nospace">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="address" placeholder="<?= Yii::t('app','Address')?>" required>
                                </div>
                            </div>
                        </div>
                        <textarea name="" rows="9" placeholder="<?= Yii::t('app','Message')?>"></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-default btn-4 btn-4c bgcolor">
                                <span> <?= Yii::t('app','Submit')?></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!--<span class="toggle text-center btn-toggle bgcolor"></span>-->

</section>
