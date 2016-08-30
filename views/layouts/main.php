<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left bgcolor"></div>
    <div class="loader-section section-right bgcolor"></div>
    <div class="load_title">Cool & Heat</div>
</div>

<div class="container">
    <a href="#" class="back-to-top text-center bgcolor" style="display: inline;">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
<header>
    <div class="container">
        <div class="row text-center top-info">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 info">
                        <address>
                            <i class="fa fa-map-marker"></i>
                            Miami, FL 10036, United States
                        </address>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 info">
                <span class="address">
                <i class="fa fa-phone"></i>
                 1-305-834-1281
                </span>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 info">
                <span class="address">
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@coolheat.com">info@coolheat.com</a>
                </span>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="row timing">
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                <span class="address">
                <span class="color"><?= Yii::t('app','Mon-Fri:')?></span> 8:30am-5:30pm
                </span>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                <span class="address">
                <span class="color"><?= Yii::t('app','Sat:')?></span> 9:00am-12:00pm
                </span>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                <span class="address">
                    <?php
                    if(Yii::$app->language == "en"){
                        echo '<span class="color">'.Yii::t('app','Language:').'</span> '.Html::a('Español', [Yii::$app->controller->action->id, 'language'=>'es']);
                    }else {
                        echo '<span class="color">'.Yii::t('app','Language:').'</span> '.Html::a('English', [Yii::$app->controller->action->id, 'language'=>'en']);
                    }?>
                </span>
                    </div>
                </div>

            </div>
        </div>
    </div> <!--CONTAINER-->
</header>
<div class="navigation">
    <span class="bgcolor"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="logo bgcolor">
                    <span></span>
                    <a href="<?= Yii::$app->homeUrl; ?>">
                        <img src="<?= Yii::getAlias('@web/themes/coolheat') ?>/images/logo.png" style="margin-top: 10px;" alt="logo" class="img-responsive"></a>
                </div>
            </div>

            <div class="col-md-9 col-sm-8 col-xs-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse nav-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="hover"><a href="<?= Yii::$app->homeUrl; ?>"> <?= Yii::t('yii','Home')?> </a></li>
                            <li class="hover"><a href="<?= Url::to(['site/about']); ?>"> <?= Yii::t('app','About')?> </a></li>
                            <li class="dropdown hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?= Yii::t('app','Services')?> <b class="caret"></b></a>
                            <ul class="dropdown-menu bgcolor">
                            <li><a href="<?= Url::to(['site/services']); ?>"><?= Yii::t('app','Ac Services')?>  </a></li>
                            <li><a href="<?= Url::to(['site/eservices']); ?>"><?= Yii::t('app','Electrical Services')?></a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php if( isset($this->params['breadcrumbs'])) {?>
<div class="page-nav">
    <div class="container">
        <div class="row">
            <div class="top-nav2">
                <div class="col-md-9 col-sm-9 col-xs-12 jw-animate-gen noOpacity animated fadeInLeft" data-gen="fadeInLeft" data-gen-offset="50%">
                    <span class="heading"><?= $this->title?></span>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 text-right jw-animate-gen noOpacity animated fadeInRight" data-gen="fadeInRight" data-gen-offset="50%">
                    <?=  Breadcrumbs::widget([
                        'options'=>[
                            'class'=>"",
                        ],
                        'itemTemplate' => "
                <span class='inner-link'>
                 {link} <i class='fa fa-angle-double-right'></i>
               </span>\n",
                'links' => [
                    [
                        'label'=>$this->title,
                        'template' => "<span class='inner-link'>{link}</span>\n", // template for this link only
                    ],
                ],


//                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?= $content ?>
<footer id="footer" class="bordercolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="copy-right text-center bordercolor">
                    &copy; Cool & Heat <?= date('Y') ?>
                    All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
