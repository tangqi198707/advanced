<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = "系统管理员";
$this->secTitle = '管理员信息';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
    <p class="createButton">
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'tel',
            'email:email',
            [
                'label'=>'添加时间',
                'value'=>date("Y-m-d H:i:s",$model->time_insert),
            ],
            [
                'label'=>'修改时间',
                'value'=>$model->time_update!=0 ?date("Y-m-d H:i:s",$model->time_update) : '',
            ],
        ],
    ]) ?>

</div>
