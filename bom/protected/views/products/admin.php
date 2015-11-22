<?php
/* @var $this ProductsController */
/* @var $model Products */

?>
<div class="layout-content">
	<div class="align-center">
		<h1>Administrar productos</h1>
	</div>
	<div class="text-right">
		<?php echo CHtml::link('Agregar producto', array('products/create'), array('class'=>'btn red-haze btn-outline btn-circle btn-sm')); ?>
		<?php echo CHtml::link('Administrar categorías', array('categories/admin'), array('class'=>'btn red-haze btn-outline btn-circle btn-sm')); ?>
	</div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'products-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'name',
			'description',
			'price',
			'size',
			'status',
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
</div>