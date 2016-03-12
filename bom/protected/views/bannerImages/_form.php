<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>
<div class="row">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'banner-images-form',
		'enableAjaxValidation'=>false,
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)); ?>
		<div class="form-body">
			<div class="col-md-4">
				<div class="form-group <?php if($form->error($model,'url')!=''){ echo 'has-error'; }?>">
					<?php echo $form->labelEx($model,'url', array('class'=>'control-label')); ?>
					<?php echo $form->fileField($model, 'url', array('class'=>'form-control')) ?>
					<?php echo $form->error($model,'url', array('class'=>'help-block')); ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', array('class'=>'btn red-stripe uppercase')); ?>
				</div>
			</div>
		</div><!-- form -->

	<?php $this->endWidget(); ?>
</div>
