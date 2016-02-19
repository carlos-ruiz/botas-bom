    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
    	<!-- LayerSlider start -->
    	<div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">

    		<!-- slide-->
    		<div class="ls-slide ls-slide1" data-ls="offsetxin: right; slidedelay: 5000; transition2d: 24,25,27,28;">

    			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/bg.png"  height="495px" class="ls-bg" alt="Botas Bom"/>

    			<div class="ls-l ls-title" style="top: 96px; left: 35%; white-space: nowrap;" data-ls="
    			fade: true;
    			fadeout: true;
    			durationin: 750;
    			durationout: 750;
    			easingin: easeOutQuint;
    			rotatein: 90;
    			rotateout: -90;
    			scalein: .5;
    			scaleout: .5;
    			showuntil: 4000;
    			">Nuestras <strong>Botas y Botines</strong></div>

    			<div class="ls-l ls-mini-text" style="top: 300px; left: 33%; white-space: nowrap;" data-ls="
    			fade: true;
    			fadeout: true;
    			durationout: 750;
    			easingin: easeOutQuint;
    			delayin: 300;
    			showuntil: 4000;
    			">¡Son de alta calidad! diseñados para la comodidad </br> de nuestros <strong>clientes</strong></div>
    		</div>
    		<!-- slide one end -->

    	<!-- slide two start -->
    	<div class="ls-slide ls-slide2" data-ls="offsetxin: right; slidedelay: 5000; transition2d: 110,111,112,113;">

    		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/bg2.jpg" class="ls-bg" alt="Botas Bom">

    		<div class="ls-l ls-title" style="top: 40%; left: 21%; white-space: nowrap;" data-ls="
    		fade: true;
    		fadeout: true;
    		durationin: 750; durationout: 109750;
    		easingin: easeOutQuint;
    		easingout: easeInOutQuint;
    		delayin: 0;
    		delayout: 0;
    		rotatein: 90;
    		rotateout: -90;
    		scalein: .5;
    		scaleout: .5;
    		showuntil: 4000;
    		"><strong>Conoce</strong> todos nuestros <em>Modelos</em>
    	</div>

    	<div class="ls-l ls-price" style="top: 50%; left: 45%; white-space: nowrap;" data-ls="
    	fade: true;
    	fadeout: true;
    	durationout: 109750;
    	easingin: easeOutQuint;
    	delayin: 300;
    	scalein: .8;
    	scaleout: .8;
    	showuntil: 4000;"><b>Desde</b> <strong><span>$</span>450</strong>
    </div>

    <a href="<?php echo Yii::app()->request->baseUrl; ?>/products/index" class="ls-l ls-more" style="top: 72%; left: 21%; display: inline-block; white-space: nowrap;" data-ls="
    fade: true;
    fadeout: true;
    durationin: 750;
    durationout: 750;
    easingin: easeOutQuint;
    easingout: easeInOutQuint;
    delayin: 0;
    delayout: 0;
    rotatein: 90;
    rotateout: -90;
    scalein: .5;
    scaleout: .5;
    showuntil: 4000;">Ver Catálogo
</a>
</div>

<!-- slide four start -->
<div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 5000; transition2d: 110,111,112,113;">

	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/bg4.jpg" class="ls-bg" alt="Botas Bom">

	<div class="ls-l ls-title" style="top: 35%; left: 60%; white-space: nowrap;" data-ls="
	fade: true;
	fadeout: true;
	durationin: 750;
	durationout: 750;
	easingin: easeOutQuint;
	rotatein: 90;
	rotateout: -90;
	scalein: .5;
	scaleout: .5;
	showuntil: 4000;">
	Lo más<br/>
	pedido
</div>

<div class="ls-l ls-mini-text" style="top: 70%; left: 60%; white-space: nowrap;" data-ls="
fade: true;
fadeout: true;
durationout: 750;
easingin: easeOutQuint;
delayin: 300;
scalein: .8;
scaleout: .8;
showuntil: 4000;">
<span>Categorías</span>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/products/index">Ver Catálogo</a>
</div>

</div>
<!-- slide four end -->
</div>
<!-- LayerSlider end -->
</div>
<!-- END SLIDER -->

<div class="main">
	<div class="container">
		<!-- BEGIN SIDEBAR & CONTENT -->
		<div class="row margin-bottom-40 margin-top">
			<!-- BEGIN SIDEBAR -->
			<div class="sidebar col-md-3 col-sm-4">
				<h2>Categorías</h2>
				<ul class="list-group margin-bottom-25 sidebar-menu">
					<?php foreach ($categories as $category) { ?>
						<li class="list-group-item clearfix menu-category"><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> <?= $category->name?></a></li>
					<?php } ?>
					<li class="list-group-item clearfix show-all-category"><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Mostrar todos</a></li>
				</ul>
			</div>
			<!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
			<div class="col-md-9 col-sm-8">
				<h2>Más nuevos</h2>
				<div class="owl-carousel flex-container owl-carousel3 recent-products-container">
					<?php foreach ($newProducts as $product) { ?>
						<div class="white-color border-background flex-item">
							<div class="product-item">
								<div class="pi-img-wrapper">
									<img src="<?= $product->images[0]->image_url;?>" class="img-responsive product-image" alt="<?= $product->name; ?>">
									<div>
										<a href="<?= $product->images[0]->image_url; ?>" class="btn btn-default fancybox-button">Zoom</a>
										<a href="#product-pop-up" data-id="<?= $product->id; ?>" class="btn btn-default fancybox-fast-view">Ver</a>
									</div>
								</div>
								<div class="product-categories">
								<?php foreach ($product->categories as $category) { ?>
									<div class="category"><?= $category->category->name; ?></div>
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
			<!-- END CONTENT -->
		</div>
		<!-- END SIDEBAR & CONTENT -->

		<!-- BEGIN LIST OF PRODUCTS -->
		<div class="col-md-12 all-products-container">
			<h2>Productos</h2>
			<div class="flex-container">
				<?php foreach ($products as $product) { ?>
					<div class="col-md-3 flex-item white-color margin product-container">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="<?= $product->images[0]->image_url;?>" class="img-responsive product-image" alt="<?= $product->name; ?>">
								<div>
									<a href="<?= $product->images[0]->image_url; ?>" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" data-id="<?= $product->id; ?>" class="btn btn-default fancybox-fast-view">Ver</a>
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
		<!-- END LIST OF PRODUCTS -->
	</div>
</div>

<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
	<div class="container">
		<div class="row">
			<!-- BEGIN BOTTOM ABOUT BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>¿Quienes somos?</h2>
				<p> Somos una empresa dedicada a la producción y comercialización de calzado industrial, fundada desde hace 60 años, que cuenta con un método de producción semi artesanal, con una capacidad de producción de 200 pares diarios, en donde cada par brinda una excelente calidad a nuestros usuarios.</p>

				<p>La empresa se encuentra ubicada en el estado de Michoacán, en el Municipio de Huaniqueo de Morales, la cual apoya al desarrollo productivo al generar empleos para los habitantes de la comunidad. </p>
			</div>
			<!-- END BOTTOM ABOUT BLOCK -->
			<!-- BEGIN BOTTOM INFO BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>Información</h2>
			</div>
			<!-- END INFO BLOCK -->

			<!-- BEGIN TWITTER BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2 class="margin-bottom-0">Últimos Tweets</h2>
				<a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
			</div>
			<!-- END TWITTER BLOCK -->

			<!-- BEGIN BOTTOM CONTACTS -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>Contacto</h2>
				<address class="margin-bottom-40">
					Ana María Gallaga 123<br/>
					Huaniqueo de Morales, Mich. MX<br/>
					Teléfono: 01 454 382 04 92<br/>
					Email: <a href="mailto:info@botasbom.com">info@botasbom.com</a><br/>
					Skype: <a href="skype:metronic">botasbom</a>
				</address>
			</div>
			<!-- END BOTTOM CONTACTS -->
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->



