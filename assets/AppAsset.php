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
        'css/front/bootstrap.min.css',
        'css/front/bootstrap-theme.min.css',
        'css/front/index.css',
        'css/front/detail.css',
        'css/front/master.css',
        'css/front/common.css',     
        'css/front/cart.css',
        'css/front/contact.css',
        'css/front/checkout.css',
        'css/front/main.css',
        'css/front/thankyou.css',
        'css/front/reponsive.css',
    ];
    public $js = [
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
