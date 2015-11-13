<?php
/* @var $this ProductsController */
/* @var $model Products */
?>

<h1>Actualizar: <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'producto_imagen'=>$producto_imagen)); ?>