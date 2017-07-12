<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity asset of frontend web.
 */
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ActivityAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/front_assets';
    public $css = [
       'css/style.css',
       'css/bootstrap.css',
       'css/owl.carousel.css',
       'css/activity_css/bootstrap.css',
       'css/activity_css/style.css',
       'css/activity_css/font-awesome.css',
       'css/activity_css/lsb.css',
  
    ];
    public $js = [
       'js/easing.js',
       'js/jquery.min.js',
       'js/jquery.mixitup.min.js',   
       'js/move-top.js',
       'js/myscript.js',   
       'js/owl.carousel.js',
       'js/activity_js/jquery-1.11.1.min.js',
       'js/activity_js/bootstrap.js',
       'js/activity_js/responsiveslides.min.js',
       'js/activity_js/jarallax.js',
       'js/activity_js/SmoothScroll.min.js',
       'js/activity_js/move-top.js',
       'js/activity_js/easing.js',
       'js/activity_js/lsb.js',
       'js/activity_js/jarallax.js',
       'js/activity_js/SmoothScroll.min.js',
       'js/activity_js/move-top.js',
       'js/activity_js/easing.js',
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