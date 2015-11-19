<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="layout-content">
	<h1>Products</h1>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</div>
