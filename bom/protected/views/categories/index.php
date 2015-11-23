<?php
/* @var $this CategoriesController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class="layout-content">
	<h1>Categorías</h1>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</div>
