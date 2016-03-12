<?php
/* @var $this BannerImagesController */
/* @var $model BannerImages */
?>

<div class="layout-content">
	<h1>Imágen #<?php echo $model->id; ?></h1>

	<div class="row align-center">
		<img src="<?= $model->url ?>" class="col-md-12">
	</div>

	<br/>
	<div class="row col-md-12">
		<?php echo CHtml::link('Nueva', array('bannerImages/create'), array('class'=>'btn red-haze btn-outline btn-circle btn-sm')); ?>
	</div>
	<br/>
</div>
