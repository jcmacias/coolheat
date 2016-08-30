<?php
/**
 * Created by PhpStorm.
 * User: 508
 * Date: 7/25/2016
 * Time: 4:47 PM
 */
$this->title = Yii::t('app','Ac Services');
$this->params['breadcrumbs'][] = $this->title;

?>
<section id="main-services">
    <div class="container">
        <div class="services-wrap">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="wrapper">
                        <ul id="portfolio-filter">
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="75%">
                                <li>
                                    <a class="current" href="#all" title="" rel="all">
                                      <?= Yii::t('app','All'); ?></a></li>
                                <span class="shape"><i class="border"></i></span>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="75%">
                                <li>
                                    <a href="#Commercial" title="" rel="Commercial">
                                        <?= Yii::t('app','Commercial'); ?></a></li>
                                <span class="shape"><i class="border"></i></span>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="70%">
                                <li><a href="#residential" title="" rel="residential">
                                        <?= Yii::t('app','Residential'); ?></a></li>
                                <span class="shape"><i class="border"></i></span>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="65%">
                                <li><a href="#emergency" title="" rel="emergency">
                                        <?= Yii::t('app','Emergency'); ?></a></li>
                                <span class="shape"><i class="border"></i></span>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul id="portfolio-list">
                        <li style="display: block;" class="all residential jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="90%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service1.png" alt="services" class="img-responsive">
                                <span class="overlay-effect"><?= Yii::t('app','Ac Repair'); ?>  </span>
                            </div>
                        </li>

                        <li style="display: block;" class="all Commercial jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="85%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service9.png" alt="services" class="img-responsive">
                                <span class="overlay-effect"><?= Yii::t('app','Shingle Replacement'); ?></span>

                            </div>

                        </li>

                        <li style="display: block;" class="all emergency jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="85%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service3.png" alt="services" class="img-responsive">
                                <span class="overlay-effect"><?= Yii::t('app','Ac Leak Repair'); ?>  </span>

                            </div>
                        </li>

                        <li style="display: block;" class="all Commercial jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="85%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service4.jpg" alt="services" class="img-responsive">
                                <span class="overlay-effect"><?= Yii::t('app','Ac Maintenance'); ?></span>

                            </div>
                        </li>

                        <li style="display: block;" class="all Commercial jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="85%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service5.png" alt="services" class="img-responsive">
                                <span class="overlay-effect"><?= Yii::t('app','Heatproofing'); ?></span>

                            </div>
                        </li>

                        <li class="all residential jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="80%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service7.jpg" alt="services" class="img-responsive">
                                <span class="overlay-effect"><?= Yii::t('app','Ventilation'); ?></span>

                            </div>
                        </li>

                        <li class="all emergency jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="90%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service8.jpg" alt="services" class="img-responsive">
                                <span class="overlay-effect"> <?= Yii::t('app','Ac Replacement'); ?> </span>

                            </div>
                        </li>

                        <li class="all residential jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="85%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service8.png" alt="services" class="img-responsive">
                                <span class="overlay-effect"> <?= Yii::t('app','Ac Inspections'); ?> </span>

                            </div>
                        </li>


                        <li class="all emergency jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="90%">
                            <div class="effect">
                                <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/service9.jpg" alt="services" class="img-responsive">
                                <span class="overlay-effect"> <?= Yii::t('app','Ac Preventative'); ?> </span>

                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

    </div> <!--CONTAINER-->
</section>
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




