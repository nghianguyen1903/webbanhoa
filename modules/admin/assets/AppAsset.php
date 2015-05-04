<?php

/*
 * author : NgocHonag<cafedat.hoang@gmail.com>
 */

//namespace app\modules\setting\assets;

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin/bootstrap.min.css',
        'css/admin/sb-admin.css',
        'css/admin/plugins/morris.css',
        'css/admin/font-awesome/css/font-awesome.min.css',
        'css/admin/profile.css',
    ];
    public $js = [
        'css/admin/js/jquery.js',
        'css/admin/js/bootstrap.min.js',
        'css/admin/js/plugins/morris/raphael.min.js',
        'css/admin/js/plugins/morris/morris.min.js',
        'css/admin/js/plugins/morris/morris-data.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
