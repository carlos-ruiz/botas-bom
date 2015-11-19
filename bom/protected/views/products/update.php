<?php
/* @var $this ProductsController */
/* @var $model Products */
?>
<div class="layout-content">
	<h1>Actualizar: <?php echo $model->name; ?></h1>

	<?php $this->renderPartial('_form', array('model'=>$model, 'producto_imagen'=>$producto_imagen)); ?>
</div>
