<div class="layout-content overflow-auto">
	<h1>Contactanos</h1>
	<p>Cualquier duda o comentario que tengas, escribenos y te lo responderemos a la brevedad posible.</p>
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'products-form',
			'enableAjaxValidation'=>false,
			'htmlOptions' => array('enctype' => 'multipart/form-data'),
		)); ?>
		<div class="form-body col-md-12">
			<div class="row">
				<div class="col-md-4 form-group <?php if($form->error($model,'name')!=''){ echo 'has-error'; }?>">
					<?php echo $form->labelEx($model,'name', array('class'=>'control-label')); ?>
					<div class="input-group">
						<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
						<?php echo $form->error($model,'name', array('class'=>'help-block')); ?>
					</div>
				</div>

				<div class="col-md-4 form-group <?php if($form->error($model,'subject')!=''){ echo 'has-error'; }?>">
					<?php echo $form->labelEx($model,'subject', array('class'=>'control-label')); ?>
					<div class="input-group">
						<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
						<?php echo $form->error($model,'subject', array('class'=>'help-block')); ?>
					</div>
				</div>

				<div class="col-md-4 form-group <?php if($form->error($model,'email')!=''){ echo 'has-error'; }?>">
					<?php echo $form->labelEx($model,'email', array('class'=>'control-label')); ?>
					<div class="input-group">
						<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
						<?php echo $form->error($model,'email', array('class'=>'help-block')); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 form-group <?php if($form->error($model,'body')!=''){ echo 'has-error'; }?>">
					<?php echo $form->labelEx($model,'body', array('class'=>'control-label')); ?>
					<div class="input-group">
						<?php echo $form->textArea($model,'body',array('rows'=>5, 'cols'=>62, 'class'=>'form-control')); ?>
						<?php echo $form->error($model,'body', array('class'=>'help-block')); ?>
					</div>
				</div>

				<?php if(CCaptcha::checkRequirements()){ ?>
					<div class="col-md-4 form-group <?php if($form->error($model,'verifyCode')!=''){ echo 'has-error'; }?>">
						<?php echo $form->labelEx($model,'verifyCode', array('class'=>'control-label')); ?>
						<div class="input-group">
							<?php $this->widget('CCaptcha'); ?>
							<?php echo $form->textField($model,'verifyCode'); ?>
							<div class="hint">Favor de escribir las letras que se muestran en la imagen.
							<br/>No distingue entre muyúsculas y minúsculas.</div>
							<?php echo $form->error($model,'verifyCode', array('class'=>'help-block')); ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="row col-md-3">
				<?php echo CHtml::submitButton('Enviar', array('class'=>'btn red-stripe uppercase')); ?>
			</div>
		</div><!-- form -->

<?php $this->endWidget(); ?>
</div>