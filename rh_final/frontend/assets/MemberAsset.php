<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member asset of frontend web.
 */
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MemberAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/front_assets';
    public $css = [
        // 'css/style.css',
        // 'css/bootstrap.css',
        // 'css/owl.carousel.css', 
        'css/member_css/style.css',
        'css/member_css/bootstrap.css',
    ];
    public $js = [
        // 'js/jquery.min.js',
        // 'js/move-top.js',
        // 'js/easing.js',
        // 'js/myscript.js',
        // 'js/owl.carousel.js',
        // 'js/jquery.mixitup.min.js',
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