<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '系统管理员';
$this->secTitle = '添加管理员';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
