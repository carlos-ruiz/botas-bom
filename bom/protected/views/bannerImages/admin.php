<?php
/* @var $this BannerImagesController */
/* @var $model BannerImages */
?>

<div class="layout-content">
	<div class="align-center">
		<h1>Administrar imágenes del banner</h1>
	</div>

	<div class="text-right">
		<?php echo CHtml::link('Nueva', array('bannerImages/create'), array('class'=>'btn red-haze btn-outline btn-circle btn-sm')); ?>
	</div>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'banner-images-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			array(
	            'name'  => 'url',
	            'type'  => 'raw',
	            'value' => 'CHtml::image($data->url,"",array(\'height\'=>\'100\'))',
	        ),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}{delete}',
			),
		),
	)); ?>
</div>
