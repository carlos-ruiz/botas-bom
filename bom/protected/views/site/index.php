<div class="main">
	<div class="container">
		<div class="row nuevo-slider">
			<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php 
						$cont = 0;
						foreach ($bannerImages as $value) { ?>
							<li data-target="#carousel-example-generic" data-slide-to="<?= $cont ?>" class="<?= ($cont == 0)?'active':'' ?>"></li>
						<?php 
							$cont++;
						}	?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php 
						$cont = 0;
						foreach ($bannerImages as $imagen) { ?>
							<div class="item <?= ($cont == 0)?'active':'' ?>">
								<img src="<?= $imagen->url ?>" alt="...">
								<div class="carousel-caption">
								</div>
							</div>
						<?php 
							$cont++;
						} ?>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

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
			<div class="col-md-6 col-sm-6 pre-footer-col">
				<h2>¿Quienes somos?</h2>
				<p> Somos una empresa dedicada a la producción y comercialización de calzado industrial, fundada desde hace 60 años, que cuenta con un método de producción semi artesanal, con una capacidad de producción de 600 pares diarios, en donde cada par brinda una excelente calidad a nuestros usuarios.</p>

				<p>La empresa se encuentra ubicada en el estado de Michoacán, en el Municipio de Huaniqueo de Morales, la cual apoya al desarrollo productivo al generar empleos para los habitantes de la comunidad. </p>
			</div>
			<!-- END BOTTOM ABOUT BLOCK -->
			<!-- BEGIN BOTTOM INFO BLOCK -->
			<!-- <div class="col-md-4 col-sm-6 pre-footer-col">
				<h2>Información</h2>
			</div> -->
			<!-- END INFO BLOCK -->

			<!-- BEGIN TWITTER BLOCK -->
			<!-- <div class="col-md-3 col-sm-6 pre-footer-col">
				<h2 class="margin-bottom-0">Últimos Tweets</h2>
				<a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
			</div> -->
			<!-- END TWITTER BLOCK -->

			<!-- BEGIN BOTTOM CONTACTS -->
			<div class="col-md-6 col-sm-6 pre-footer-col">
				<h2>Contacto</h2>
				<address class="margin-bottom-40">
					Ana María Gallaga #84<br/>
					Huaniqueo de Morales, Michoacán, México<br/>
					Teléfono: 01 454 382 04 92<br/>
					Horario de atención: Lunes a Sábado de 7:00am a 3:00pm<br/>
					Email: <a href="mailto:info@botasbom.com">info@botasbom.com</a><br/>
				</address>
			</div>
			<!-- END BOTTOM CONTACTS -->
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->



