<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>
<div class="row">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
	<div class="form-body col-md-7">

		<div class="form-group <?php if($form->error($model,'name')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'name', array('class'=>'control-label')); ?>
			<div class="input-group">
				<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'name', array('class'=>'help-block')); ?>
			</div>
		</div>

		<div class="form-group <?php if($form->error($model,'description')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'description', array('class'=>'control-label')); ?>
			<div class="input-group">
				<?php echo $form->textArea($model,'description',array('rows'=>3, 'cols'=>62, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'description', array('class'=>'help-block')); ?>
			</div>
		</div>
<!--
		<div class="form-group <?php if($form->error($model,'price')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'price', array('class'=>'control-label')); ?>
			<div class="input-group">
				<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'price', array('class'=>'help-block')); ?>
			</div>
		</div>
-->
		<div class="form-group <?php if($form->error($model,'size')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'size', array('class'=>'control-label')); ?>
			<div class="input-group">
				<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>65, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'size', array('class'=>'help-block')); ?>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'categoriesSelected', array('class'=>'control-label')); ?>
			<div class="input-group">
				<?php echo $form->dropDownList($model,'categoriesSelected',Categories::model()->selectListMultiple(), array("class" => "form-control select2","multiple"=>"multiple")); ?>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($producto_imagen,'image_url'); ?>
			<?php
			   $this->widget('CMultiFileUpload', array(
			   'model' => $producto_imagen,
			   //'name' => 'files',
			   'attribute' => 'image_url',
			   'accept' => 'jpeg|jpg|gif|png', // useful for verifying files
			   'duplicate' => 'Archivo duplicado', // useful, i think
			   'denied' => 'Tipo de archivo invalido', // useful, i think
			   'max'=>3,
			));
			?>
			<?php echo $form->error($producto_imagen,'image_url'); ?>
		</div>
<!--
		<div class="form-group <?php if($form->error($model,'status')!=''){ echo 'has-error'; }?>">
			<?php echo $form->labelEx($model,'status', array('class'=>'control-label')); ?>
			<div class="input-group">
				<?php echo $form->dropDownList($model,'status',array('1'=>'Activo', '0'=>'Inactivo'), array('class'=>'form-control input-medium')); ?>
				<?php echo $form->error($model,'status', array('class'=>'help-block')); ?>
			</div>
		</div>
-->
		<br/>
		<div class="buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', array('class'=>'btn red-stripe uppercase')); ?>
		</div>
	</div><!-- form -->

<?php $this->endWidget(); ?>


	<div class="col-md-4">
		<?php if(!$model->isNewRecord){ ?>
			 <?php foreach ($model->images as $image) { ?>
			 <div class="row" id="image_<?php echo $image->id;?>">
				 <div class="col-md-12 center-container">
				    <img class="col-md-12" src="<?php echo $image->image_url;?>" />
				 </div>
				 <div class="col-md-12 align-center">
			    	<span class="btn red-haze btn-outline btn-circle btn-sm eliminarImagen" data-id="<?php echo $image->id;?>">Eliminar Imagen</span>
			    </div>
			    <hr class="col-md-12"/>
			   </div>
			  <?php } ?>
		<?php } ?>
	</div>
</div>
<script type="text/javascript">
	$(".eliminarImagen").click(function(){
		var id=$(this).data('id');
		$.post(
			"<?php echo Yii::app()->request->baseUrl;?>/products/deleteImage",
			{
				id:id
			},
			function(error){
				if(error=="1")
					alert("Ocurrió un error, inténtalo de nuevo");
				else{
					$("#image_"+id).hide(400);
					$("#image_"+id).html("");
				}
			});
		});
</script>