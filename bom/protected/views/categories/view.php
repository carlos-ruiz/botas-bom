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
</div>