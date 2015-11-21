<?php
/* @var $this CategoriesController */
/* @var $model Categories */
?>

<div class="layout-content">

<h1>Actualizar: <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>