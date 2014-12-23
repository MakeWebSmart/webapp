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
//        'css/bootstrap.css',
        'css/fancybox/jquery.fancybox.css',
        'css/flexslider.css',
        'css/site.css',
        'css/default.css',
    ];
    public $js = [
//        'js/angular.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.fancybox-media.js',
        'js/google-code-prettify/prettify.js',
        'js/jquery.flexslider.js',
//        'js/ui-bootstrap-tpls-0.6.0.js',
        'js/animate.js',
//        'js/plunker.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
