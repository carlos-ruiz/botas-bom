<?php
/* @var $this CategoriesController */
/* @var $model Categories */
?>


<div class="layout-content">
	<h1>Categoría: <?php echo $model->name; ?></h1>

	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'name',
		),
	)); ?>

	<hr/>
	<?php if(!Yii::app()->user->isGuest){ ?>
	<div id="buttons" class="row clearfix">
		<div class="col-md-6 col-md-offset-6 text-right">
			<a href="<?= Yii::app()->request->baseUrl; ?>/categories/update/<?= $model->id; ?>" class="btn red-haze btn-outline btn-circle btn-sm">Editar categoría</a>
			<a href="<?= Yii::app()->request->baseUrl; ?>/categories/delete/<?= $model->id; ?>" class="btn red-haze btn-outline btn-circle btn-sm">Eliminar categoría</a>
			<a href="<?= Yii::app()->request->baseUrl; ?>/categories/admin" class="btn red-haze btn-outline btn-circle btn-sm">Administrar categorías</a>
		</div>
	</div>
	<?php } ?>
</div>