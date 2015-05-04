<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="/css/maincss/bootstrap.min.css">
        <link rel="stylesheet" href="/css/maincss/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/maincss/index.css">
        <link rel="stylesheet" href="/css/maincss/detail.css">
        <link rel="stylesheet" href="/css/maincss/master.css">
        <link rel="stylesheet" href="/css/maincss/common.css">
        <link rel="stylesheet" href="/css/maincss/cart.css">
        <link rel="stylesheet" href="/css/maincss/contact.css">
        <link rel="stylesheet" href="/css/maincss/checkout.css">
      
 
        <link rel="stylesheet" href="css/maincss/main.css">
        <link rel="stylesheet" href="css/maincss/thankyou.css">

        <link rel="stylesheet" href="css/maincss/reponsive.css">

       <?php $this->head() ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse header" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <ul class="main-menu">
              <li class="active pull-left"><a href="#">Trang chủ</a></li>
          </ul>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="main-menu main-nav">
              <li><a href="#">Sản phẩm</a></li>
              <li><a href="#">Dịch vụ</a></li>
              <li><a href="#">Liên hệ</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> <span class="badge">0</span></a></li>
              <li>
                <div class="pull-right search-wrap">
                  <input class="search-box" type="text" placeholder="Tìm kiếm ..." />
                </div>
              </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


<?php $this->beginBody() ?>
<div class="wrap">
      
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
</div>
<footer>
      <p>&copy; Agilsun Ltd 2015</p>
    </footer>  
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>