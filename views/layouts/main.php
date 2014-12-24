<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
//use frontend\assets\AppAsset;
use app\assets\AdminAsset;
use app\assets\PublicAsset;
use app\assets\MyAsset;
use app\widgets\Alert;
//use app\widgets\Alert;
//use yii\bootstrap\Collapse; 

AdminAsset::register($this);
PublicAsset::register($this);

$url = new yii\helpers\Url();
$params = [
    'baseUrl' => $url->base(true),
];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
    <?php $this->beginBody() ?>
    <div class="container">
            <!-- Left side column. contains the logo and sidebar -->
                <!-- Main content -->
                <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="col-center">
 <?php
            NavBar::begin([
                'brandLabel' => 'w3nav',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>
                    </div>
                    </div>
                    </div>
                <section class="row space-top">
                <!--<div class="space-top"></div>-->
                <!-- Content Header (Page header) -->

        <?= Alert::widget() ?>
        <?= $content ?>

                </section><!-- /.content -->
            
    </div><!-- ./wrapper -->

    <footer>
	
    </footer>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
