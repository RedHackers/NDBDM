<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the start layout of backend web. 
 */
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/backend';
    public $css = [
       'css/site.css',
        'vendor/plugins/summernote/summernote.css',
        'assets/skin/default_skin/css/theme.css',
        'assets/admin-tools/admin-forms/css/admin-forms.css',

        //index

        'vendor/bootstrap/css/bootstrap.min1.css',
        'vendor/bootstrap/css/templatemo-style.css',
    ];
    public $js = [
        //'vendor/bootstrap/js/bootstrap.min.js',
        'vendor/jquery/jquery_ui/jquery-ui.min.js',
       // 'vendor/jquery/jquery-1.11.1.min.js',
        
        'vendor/plugins/summernote/summernote.min.js',
        'assets/js/utility/utility.js',
        'assets/js/demo/demo.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}