<?php
/* @var $this CategoriesController */
/* @var $model Categories */
/* @var $form CActiveForm */
?>

<div class="row">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'categories-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

	<div class="form-body col-md-7">

		<div class="form-group <?php if($form->error($model,'name')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'name', array('class'=>'control-label')); ?>
			<div class="input-group">
				<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'name', array('class'=>'help-block')); ?>
			</div>
		</div>
		<div class="buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', array('class'=>'btn red-stripe uppercase')); ?>
		</div>

	</div>
	<?php $this->endWidget(); ?>
</div>
