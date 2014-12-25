<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $sourcePath = '@bower/';
    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css',
        '//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css',
        'admin-lte/css/AdminLTE.css',
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        'admin-lte/js/plugins/morris/morris.min.js',
        'admin-lte/js/plugins/sparkline/jquery.sparkline.min.js',
        'admin-lte/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'admin-lte/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'admin-lte/js/plugins/jqueryKnob/jquery.knob.js',
        'admin-lte/js/plugins/daterangepicker/daterangepicker.js',
        'admin-lte/js/plugins/datepicker/bootstrap-datepicker.js',
        'admin-lte/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'admin-lte/js/plugins/iCheck/icheck.min.js',
        
        'admin-lte/js/AdminLTE/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\jui\JuiAsset'
    ];
}