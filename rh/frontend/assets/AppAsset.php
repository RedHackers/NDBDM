<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main display of frontend web.
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/front_assets';
    public $css = [
        'css/style.css',
        'css/bootstrap.css',
        'css/owl.carousel.css',  
    ];
    public $js = [
        'js/jquery.min.js',
        'js/move-top.js',
        'js/easing.js',
        'js/myscript.js',
        'js/owl.carousel.js',
        'js/jquery.mixitup.min.js',
    ];
    public $depends = [
        /* bootstrap.js ������
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        */
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
     
    ];   
}