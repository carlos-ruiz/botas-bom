<?php
/* @var $this ProductsController */
/* @var $model Products */
?>

<div class="layout-content">
	<h1><?php echo $model->name; ?></h1>

	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'name',
			'description',
			'price',
			'size',
			'status',
		),
	)); ?>
<div class="row">
	<?php foreach ($model->images as $image) { ?>
    <img class="col-md-4" src="<?php echo $image->image_url;?>" />
  <?php } ?>
</div>
  <hr/>
  <?php if(!Yii::app()->user->isGuest){ ?>
  <div id="buttons" class="row clearfix">
    <div class="col-md-6 col-md-offset-6 text-right">
      <a href="<?= Yii::app()->request->baseUrl; ?>/products/update/<?= $model->id; ?>" class="btn red-haze btn-outline btn-circle btn-sm">Editar producto</a>
      <a href="<?= Yii::app()->request->baseUrl; ?>/products/delete/<?= $model->id; ?>" class="btn red-haze btn-outline btn-circle btn-sm">Eliminar producto</a>
      <a href="<?= Yii::app()->request->baseUrl; ?>/products/admin" class="btn red-haze btn-outline btn-circle btn-sm">Ir al admin</a>
    </div>
  </div>
  <?php } ?>
</div>
