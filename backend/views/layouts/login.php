<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
$this->registerCssFile('@web/css/style.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript" src="<?=Yii::getAlias('@web').'/js/jquery-2.1.1.min.js'?>"></script>
	<script type="application/x-javascript"> 
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<script>$(document).ready(function(c) {
		$('.close').on('click', function(c){
			$('.login-form').fadeOut('slow', function(c){
		  		$('.login-form').remove();
			});
		});	  
	});
	</script>
</head>
<body>
    <?php $this->beginBody() ?>

        <?= $content ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
