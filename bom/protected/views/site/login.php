<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>
<br/>
<br/>
<br/>
<br/>
<div class="align-center">
	<h1>Login</h1>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-body">
		<div class="form-group align-center <?php if($form->error($model,'username')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'username', array('class'=>'control-label')); ?>
			<div class="input-group margin-auto">
				<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'username', array('class'=>'help-block')); ?>
			</div>
		</div>

		<div class="form-group align-center <?php if($form->error($model,'password')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
			<div class="input-group margin-auto">
				<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'password', array('class'=>'help-block')); ?>
			</div>
		</div>

		<div class="form-actions align-center" style="color:black !important;">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe',array('class'=>'rememberme check', 'style'=>'color: black !important;')); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>
		<br/>
		<div class="align-center buttons">
			<?php echo CHtml::submitButton('Entrar',array('class'=>'btn red-stripe uppercase')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

