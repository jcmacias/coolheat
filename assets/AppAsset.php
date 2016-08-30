<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/coolheat/css/font-awesome.min.css',
        'themes/coolheat/css/prettyPhoto.css',
        'themes/coolheat/css/animate-custom.css',
        'themes/coolheat/css/royalslider.css',
        'themes/coolheat/css/owl.carousel.css',
        'themes/coolheat/css/owl.transitions.css',
        'themes/coolheat/css/style.css',
        'themes/coolheat/css/rs-minimal-white.css',
        'themes/coolheat/css/loader.css',
        'themes/coolheat/css/changes.css',
    ];
    public $js = [
        'themes/coolheat/js/jquery-1.11.1.min.js',
        'themes/coolheat/js/bootstrap.min.js',
        'themes/coolheat/js/jquery.mosaicflow.js',
        'themes/coolheat/js/waypoints.js',
        'themes/coolheat/js/smoothScroll.js',
        'themes/coolheat/js/filterable.pack.js',
        'themes/coolheat/js/jquery.royalslider.min.js',
        'themes/coolheat/js/jquery.easing-1.3.js',
        'themes/coolheat/js/owl.carousel.js',
        'themes/coolheat/js/owl-slider.js',
        'themes/coolheat/js/jquery.cookie.js',
        'themes/coolheat/js/custom.js',
        'themes/coolheat/js/changes.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
