<?php
/* @var $this ProductsController */
/* @var $model Products */

?>
<h1>Agregar producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'producto_imagen'=>$producto_imagen)); ?>