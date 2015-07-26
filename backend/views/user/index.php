<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '系统管理员';
$this->secTitle = '管理员列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <p class="createButton">
        <?= Html::a('添加管理员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            'tel',
            'email',
            [
                'attribute' =>'time_insert',
                'label'=>'添加时间',
                'value'=>function($model){
                    return  date('Y-m-d H:i:s',$model->time_insert);
                },
            ],
            [
                'attribute' =>'time_update',
                'label'=>'修改时间',
                'value'=>function($model){
                    return  $model->time_update !=0 ? date('Y-m-d H:i:s',$model->time_update) : "";
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
