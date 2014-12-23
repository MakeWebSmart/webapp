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
        'admin-lte/js/AdminLTE/app.js',
        'admin-lte/js/AdminLTE/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}