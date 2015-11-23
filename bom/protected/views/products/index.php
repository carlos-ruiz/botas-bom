<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="layout-content container">
	<h1>Products</h1>
	<div class="col-md-12 all-products-container">
		<div class="flex-container">
			<?php foreach ($products as $product) { ?>
				<div class="col-md-3 flex-item white-color margin">
					<div class="product-item">
						<div class="pi-img-wrapper">
							<img src="<?= $product->images[0]->image_url;?>" class="img-responsive" alt="<?= $product->name; ?>">
							<div>
								<a href="<?= $product->images[0]->image_url; ?>" class="btn btn-default fancybox-button">Zoom</a>
								<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Ver</a>
							</div>
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
