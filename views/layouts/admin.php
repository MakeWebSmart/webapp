<?php
use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
//use frontend\assets\AppAsset;
use app\assets\AdminAsset;
use app\assets\MyAsset;
//use app\widgets\Alert;
//use yii\bootstrap\Collapse; 

AdminAsset::register($this);
MyAsset::register($this);

if(! empty( \Yii::$app->session->get('user.name'))){
    $name = \Yii::$app->session->get('user.name');
} else {
    $name = 'No Name';
}

if(! empty( \Yii::$app->session->get('user.regtime'))){
    $regTime = \Yii::$app->formatter->asDate(\Yii::$app->session->get('user.regtime'),'long'); 
} else {
    $regTime = false;
}

$url = new yii\helpers\Url();
$params = [
    'baseUrl' => $url->base(true),
    'uName' => $name,
    'regTime' => $regTime,
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
    <?= $this->render('//sections/header', $params) ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?= $this->render('//sections/left-col', $params) ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <?= $this->render('//sections/right-col',['content' =>$content,'baseUrl' => $url->base(true)]) ?>
            
    </div><!-- ./wrapper -->

    <footer>
	<?= $this->render('//sections/footer', $params) ?>
    </footer>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
