<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>用户登录</h1>
<div class="login-form">
	<div class="head-info">
		<label class="lbl-1"> </label>
		<label class="lbl-2"> </label>
		<label class="lbl-3"> </label>
	</div>
	<div class="clear"> </div>
	<div class="avtar"><img src="<?=Yii::getAlias('@web').'/'?>images/avtar.png" /></div>
		<?php $form = ActiveForm::begin(
			[
				'id' => 'login-form',
				'method' => 'post',
				'action' =>'/site/login',
				'validateOnSubmit' => true,
				'fieldConfig' => [  
		            'template' => "{input}\n{error}",  
		        ],  
			]
		);?>
		<?= $form->field($model, 'username')->textInput(["class"=>'text'])?>
		<div class="key">
			<?=$form->field($model, 'password')->passwordInput([
				"class"=>"password"
			])?>
		</div>
	<div class="signin">
		<?=$form->field($model,'submit')->input('submit',['class'=>'submit','value'=>'提交'])?>
	</div>
	<?php ActiveForm::end();?>
</div>
<div class="copy-rights">
	<p>Copyright &copy; 2015.Company name All rights reserved</p>
</div>