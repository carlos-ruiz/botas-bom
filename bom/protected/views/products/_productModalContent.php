<div class="product-page product-pop-up">
			  <div class="row">
				<div class="col-md-6 col-sm-6 col-xs-3">
				  <div class="product-main-image">
					<img src="<?php echo $product->images[0]->image_url; ?>" alt="<?= $product->name; ?>" class="img-responsive">
				  </div>
				  <?php if (sizeof($product->images)>1) { ?>
					  <div class="product-other-images">
					  <?php foreach ($product->images as $image) { ?>
						<a href="javascript:void(0);" class="mini-img"><img alt="<?= $product->name; ?>" src="<?php echo $image->image_url; ?>"></a>
					  <?php } ?>
					  </div>
				  <?php } ?>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <h2></h2>
				  <div class="price-availability-block clearfix">
					<div class="price">
					  <strong><?= $product->name; ?></strong>
					  
					</div>
					<div class="availability">
					  Categorías: <strong><?php foreach ($product->categories as $category) { ?>
						<div class=""><?= $category->category->name; ?></div>
					<?php } ?></strong>
					</div>
				  </div>
				  <div class="description">
					<p><?= $product->description; ?></p>
				  </div>
				  <div class="product-page-options">
					<div class="pull-left">
					  <label class="control-label"><strong>Tallas: </strong></label>
					  <label class="control-label"><?= $product->size; ?></label>
					   
					</div>
					
				  </div>
				  
				</div>

				<div class="sticker sticker-sale"></div>
			  </div>
			</div>

<script type="text/javascript">
	$(".mini-img img").click(function() {
		var image_url = $(this).attr('src');
		$(".product-main-image img").attr('src',image_url);
	});
	Layout.initImageZoom();
	$(document).ready(function(){
		$('.fancybox-inner').css('height','auto');
	});
</script>