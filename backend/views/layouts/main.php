<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?=Html::cssFile('@web/css/bootstrap.min.css')?>
    <?=Html::cssFile('@web/css/font-awesome.css')?>
    <?=Html::cssFile('@web/css/morris-0.4.3.min.css')?>
    <?=Html::cssFile('@web/css/main.css')?>
    <?=Html::jsFile('@web/js/jquery-2.1.1.min.js')?>
</head>
<body class="fixed-navigation">
    <?php $this->beginBody() ?>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?=Yii::getAlias('@web')?>/images/avtar.png" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=Yii::$app->user->identity->username?></strong>
                             </span>  
                            </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?=Yii::$app->urlManager->createUrl(['site/index'])?>">个人资料</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            H+
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?=Yii::$app->urlManager->createUrl(['user/index'])?>"><i class="fa fa-columns"></i> <span class="nav-label">系统管理员</span></a>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-sitemap"></i> <span class="nav-label">菜单 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="index.html#">二级菜单</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">欢迎使用yii2后台模板</span>
                        </li>
                        <li>
                            <a href="<?=Yii::$app->urlManager->createUrl(['site/logout'])?>">
                                 退出
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?= Html::encode($this->title) ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?=Yii::$app->urlManager->createUrl([Yii::$app->controller->id.'/index'])?>">主页
                            </a>
                        </li>
                        <li>
                            <strong><?=$this->secTitle?></strong>
                        </li>
                    </ol>
                </div>
            </div>
            <?php echo $content?>

        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/js/jquery.metisMenu.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/js/hplus.js"></script>
