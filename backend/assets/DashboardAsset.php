<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        //'plugins/morris/morris.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        //'plugins/datepicker/datepicker3.css',
        //'plugins/daterangepicker/daterangepicker-bs3.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];
    public $js = [
        //'js/main.js',
        //'js/dashboard.js',
        //'js/app.min.js',
        //'//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
        //'bootstrap/js/bootstrap.min.js',
        //'//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        //'plugins/morris/morris.min.js',
        //'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        //'plugins/knob/jquery.knob.js',
        //'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
        //'plugins/daterangepicker/daterangepicker.js',
        //'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        //'plugins/fastclick/fastclick.min.js',
        //'dist/js/app.min.js',
        'dist/js/pages/dashboard.js',
        'dist/js/demo.js',
        'js/notif.js',
        'js/socket.io-1.3.5.js',
        'js/bootstrap-notify-master/bootstrap-notify.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        //'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
