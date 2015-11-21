<?php
/* @var $this CategoriesController */
/* @var $model Categories */


?>
<div class="layout-content">
	<div class="align-center">
		<h1>Administrar Categorías</h1>
	</div>
	<div class="text-right">
		<?php echo CHtml::link('Agregar categoría', array('categories/create'), array('class'=>'btn red-haze btn-outline btn-circle btn-sm')); ?>
	</div>
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'categories-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'name',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>
</div>