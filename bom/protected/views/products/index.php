<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="layout-content container">

	<h1>Productos</h1>
	<div class="sidebar col-md-3 col-sm-4" style="padding-left:0px">
		<h2>Categorías</h2>
		<ul class="list-group margin-bottom-25 sidebar-menu">
			<?php foreach ($categories as $category) { ?>
				<li class="list-group-item clearfix menu-category"><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> <?= $category->name?></a></li>
			<?php } ?>
			<li class="list-group-item clearfix show-all-category"><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Mostrar todos</a></li>
		</ul>
	</div>
	<div class="col-md-12 all-products-container">
		<div class="flex-container">
			<?php foreach ($products as $product) { ?>
				<div class="col-md-3 flex-item white-color margin product-container">
					<div class="product-item">
						<div class="pi-img-wrapper">
							<img src="<?= $product->images[0]->image_url;?>" class="img-responsive" alt="<?= $product->name; ?>">
							<div>
								<a href="<?= $product->images[0]->image_url; ?>" class="btn btn-default fancybox-button">Zoom</a>
								<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Ver</a>
							</div>
						</div>
						<div class="product-categories">
							<?php foreach ($product->categories as $category) { ?>
								<div class="category filter"><?= $category->category->name; ?></div>
							<?php } ?>
							</div>
						<h3><a href="<?= Yii::app()->request->baseUrl; ?>/products/<?= $product->id; ?>"><?= $product->name; ?></a></h3>
						<div class="pi-price">Tallas: <?= $product->size; ?></div>
						<div class="sticker sticker"></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
